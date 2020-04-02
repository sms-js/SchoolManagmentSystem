<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class Dormitories {
	private $dormitorie = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/
	public function getDormitorie($id){
		$query = "SELECT * FROM dormitories where id=".$id;
		$dbcontroller = new DBController();
		$this->dormitorie = $dbcontroller->executeSelectQuery($query);
		return $this->dormitorie;
	}	
	
	
    
}
?>