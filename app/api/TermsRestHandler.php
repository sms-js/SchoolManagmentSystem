<?php
require_once("SimpleRest.php");
require_once("Terms.php");
		
class TermsRestHandler extends SimpleRest {

	function getAllTerms() {	

		$terms = new Terms();
		$rawData = $terms->getAllTerms();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('terms' => 'No terms found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["terms"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}
	
	
    
    public function encodeJson($responseData) {
		$jsonResponse = json_encode($responseData);
		return $jsonResponse;		
    }
    
}
?>