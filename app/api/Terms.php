<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class Terms {
	private $terms = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/
	public function getAllTerms(){
		$query = "SELECT fieldValue FROM settings where id=14";
		$dbcontroller = new DBController();
		$this->terms = $dbcontroller->executeSelectQuery($query);
		return $this->terms;
	}	
	
	
    
}
?>