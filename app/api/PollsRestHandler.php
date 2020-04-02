<?php
require_once("SimpleRest.php");
require_once("Polls.php");
		
class PollsRestHandler extends SimpleRest {

	function getAllPolls() {	

		$polls = new Polls();
		$rawData = $polls->getAllPolls();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No polls found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["all polls"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }


    function getStudentsPolls() {	

		$polls = new Polls();
		$rawData = $polls->getStudentsPolls();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No students polls found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["students polls"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

    function getTeachersPolls() {	

		$polls = new Polls();
		$rawData = $polls->getTeachersPolls();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No teachers polls found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["teachers polls"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

    function getParentsPolls() {	

		$polls = new Polls();
		$rawData = $polls->getParentsPolls();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No parents polls found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["parents polls"] = $rawData;
				
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