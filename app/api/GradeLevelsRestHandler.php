<?php
require_once("SimpleRest.php");
require_once("GradeLevels.php");
		
class GradeLevelsRestHandler extends SimpleRest {

	function getGradeLevels() {	

		$gradelevels = new GradeLevels();
		$rawData = $gradelevels->getGradeLevels();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No grade levels found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["grade levels"] = $rawData;
				
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