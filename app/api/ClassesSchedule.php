<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class ClassesSchedule {
	private $classSchedule = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/
	public function getClassSchedule($id){
		$query = "SELECT * FROM classschedule where classId=".$id;
		$dbcontroller = new DBController();
		$this->classSchedule = $dbcontroller->executeSelectQuery($query);
		return $this->classSchedule;
	}	
	
	
    
}
?>