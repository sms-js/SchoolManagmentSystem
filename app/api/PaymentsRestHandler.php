<?php
require_once("SimpleRest.php");
require_once("Payments.php");
		
class PaymentsRestHandler extends SimpleRest {

    function getAllPayments($id) {	

		$payments = new Payments();
		$rawData = $payments->getAllPayments($id);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No messages found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["all payments"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

	function getUnpaidPayments($id) {	

		$payments = new Payments();
		$rawData = $payments->getUnpaidPayments($id);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No unpaid payments found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["unpaid payments"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }
    
    function getPaidPayments($id) {	

		$payments = new Payments();
		$rawData = $payments->getPaidPayments($id);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No paid payments found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["paid payments"] = $rawData;
				
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