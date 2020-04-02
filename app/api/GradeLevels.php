<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class GradeLevels {
	private $gradelevels = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/
	public function getGradeLevels(){
		$query = "SELECT * FROM gradelevels ";
		$dbcontroller = new DBController();
		$this->gradelevels = $dbcontroller->executeSelectQuery($query);
		return $this->gradelevels;
	}	
	
	
    
}
?>