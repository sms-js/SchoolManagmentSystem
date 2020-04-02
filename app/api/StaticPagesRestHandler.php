<?php
require_once("SimpleRest.php");
require_once("StaticPages.php");
		
class StaticPagesRestHandler extends SimpleRest {

	function getAllStaticPages() {	

		$staticpages = new StaticPages();
		$rawData = $staticpages->getAllStaticPages();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No static pages found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["static pages"] = $rawData;
				
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