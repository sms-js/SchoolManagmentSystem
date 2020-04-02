<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class ExamMarks {
	private $exammarks = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/
	public function getExamMarks($id){
		$query = "SELECT * FROM exammarks where studentId=".$id;
		$dbcontroller = new DBController();
		$this->exammarks = $dbcontroller->executeSelectQuery($query);
		return $this->exammarks;
	}	
	
	
    
}
?>