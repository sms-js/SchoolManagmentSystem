<?php
require_once("SimpleRest.php");
require_once("MediaAlbums.php");
		
class MediaAlbumsRestHandler extends SimpleRest {

	function getMediaAlbums() {	

		$mediaalbums = new MediaAlbums();
		$rawData = $mediaalbums->getMediaAlbums();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No media albums found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["media albums"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }
    
    function getMediaAlbumsChildren($id) {	

		$mediaalbumschildren = new MediaAlbums();
		$rawData = $mediaalbumschildren->getMediaAlbumsChildren($id);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No media albums children found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["media albums children"] = $rawData;
				
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