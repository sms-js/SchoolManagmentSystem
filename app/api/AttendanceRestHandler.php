<?php
require_once("SimpleRest.php");
require_once("Attendance.php");
		
class AttendanceRestHandler extends SimpleRest {

	function getAllAttendances($id) {	

		$attendance = new Attendance();
		$rawData = $attendance->getAllAttendances($id);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No attendance found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["attendance"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }
    
    function getAttendanceByDate($id,$date) {	

		$attendance = new Attendance();
		$rawData = $attendance->getAttendanceByDate($id,$date);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No attendance found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["attendance"] = $rawData;
				
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