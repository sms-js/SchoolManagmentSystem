<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class Classes {
	private $classes = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/

	public function CountClasses(){
		$query = "SELECT count(*) FROM classes";
		$dbcontroller = new DBController();
		$this->classes = $dbcontroller->executeSelectQuery($query);
		return $this->classes;
    }

    public function getAllClasses(){
		$query = "SELECT * FROM classes";
		$dbcontroller = new DBController();
		$this->classes = $dbcontroller->executeSelectQuery($query);
		return $this->classes;
    }	

	public function getClass($id){
		$query = "SELECT * FROM classes where id=".$id;
		$dbcontroller = new DBController();
		$this->classes = $dbcontroller->executeSelectQuery($query);
		return $this->classes;
    }	
    
    public function getTeacherClasses($id){
		$query = "SELECT * FROM classes where classTeacher='".$id."'";
		$dbcontroller = new DBController();
		$this->classes = $dbcontroller->executeSelectQuery($query);
		return $this->classes;
	}	
	
	
    
}
?>