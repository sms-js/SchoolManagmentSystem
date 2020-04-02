<?php
require_once("SimpleRest.php");
require_once("Transportation.php");
		
class TransportationRestHandler extends SimpleRest {

	function getAllTransportations() {	

		$transportation = new Transportation();
		$rawData = $transportation->getAllTransportations();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No transportation found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["transportations"] = $rawData;
				
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