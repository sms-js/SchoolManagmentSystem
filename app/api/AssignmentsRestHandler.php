<?php
require_once("SimpleRest.php");
require_once("Assignments.php");
		
class AssignmentsRestHandler extends SimpleRest {

	function getAllAssignments() {	

		$assignments = new Assignments();
		$rawData = $assignments->getAllAssignments();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No assignments found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["assignments"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }
    
    function InsertAssignment($c_id,$s_id,$t_id,$a_t,$a_ds,$a_f,$a_dt){
        $assignment = new Assignments();
        $rawData = $assignment->InsertAssignment($c_id,$s_id,$t_id,$a_t,$a_ds,$a_f,$a_dt);
        
        
        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'ERROR !');		
        } else {
            $statusCode = 200;
            
        }

        $requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
        $this ->setHttpHeaders($requestContentType, $statusCode);
        
        $result["insert status"] = $rawData;
                
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