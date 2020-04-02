<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class Attendance {
	private $attendance = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/
	public function getAllAttendances($id){
		$query = "SELECT * FROM attendance where studentId=".$id;
		$dbcontroller = new DBController();
		$this->attendance = $dbcontroller->executeSelectQuery($query);
		return $this->attendance;
    }	
    
    public function getAttendanceByDate($id,$date){
		$query = "SELECT * FROM attendance where studentId=".$id." and date='".$date."'";
		$dbcontroller = new DBController();
		$this->attendance = $dbcontroller->executeSelectQuery($query);
		return $this->attendance;
	}
	
	
    
}
?>