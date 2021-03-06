<?php
require_once("SimpleRest.php");
require_once("Books.php");
		
class BooksRestHandler extends SimpleRest {

    function getAllBooks() {	

		$books = new Books();
		$rawData = $books->getAllBooks();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No books found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["all books"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

	function getTraditionalBooks() {	

		$books = new Books();
		$rawData = $books->getTraditionalBooks();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No traditional found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["traditional books"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

    function getEBooks() {	

		$books = new Books();
		$rawData = $books->getEBooks();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No Ebooks found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["Ebooks"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

    function getBooksByTitle($title) {	

		$books = new Books();
		$rawData = $books->getBooksByTitle($title);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No books found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["books"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

    function getBooksByAuthor($author) {	

		$books = new Books();
		$rawData = $books->getBooksByAuthor($author);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No books found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["books"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

    function getBooksByStatus($status) {	

		$books = new Books();
		$rawData = $books->getBooksByStatus($status);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No books found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["books"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

    function getBooksByTStatus($t_status) {	

		$books = new Books();
		$rawData = $books->getBooksByTStatus($t_status);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No books found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["books"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }

    function getBooksByEStatus($e_status) {	

		$books = new Books();
		$rawData = $books->getBooksByEStatus($e_status);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No books found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["books"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
    }


	function getBooksByPrice($price) {	

		$books = new Books();
		$rawData = $books->getBooksByPrice($price);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No books found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["books"] = $rawData;
				
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