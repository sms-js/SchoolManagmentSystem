<?php
class DBController {
	private $conn = "";
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "dbschool";

	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->conn = $conn;			
		}
	}

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}

	function executeSelectQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;//print_r($resultset);print_r($row);
		}
		if(!empty($resultset))
			return $resultset;
	}
	
	function executeInsertQuery($query) {
	$result="";
	if (mysqli_query($this->conn, $query)) {
               $result= "New record created successfully";
            } else {
               $result= "Error: " . mysqli_error($this->conn);
            }
			
			return $result;
		}
		
	
}
?>
