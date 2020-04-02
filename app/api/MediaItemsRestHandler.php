<?php
require_once("SimpleRest.php");
require_once("MediaItems.php");
		
class MediaItemsRestHandler extends SimpleRest {

	function getMediaItems() {	

		$mediaitems = new MediaItems();
		$rawData = $mediaitems->getMediaItems();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No media items found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["media items"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }
    
    function getMediaItemsChildren($id) {	

		$mediaitemschildren = new MediaItems();
		$rawData = $mediaitemschildren->getMediaItemsChildren($id);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No media items children found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["media items children"] = $rawData;
				
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