<?php
require_once("SimpleRest.php");
require_once("ExamMarks.php");
		
class ExamMarksRestHandler extends SimpleRest {

	function getExamMarks($id) {	

		$exammarks = new ExamMarks();
		$rawData = $exammarks->getExamMarks($id);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No exam marks found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["exam marks"] = $rawData;
				
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