<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class Assignments {
	private $assignments = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/
	public function getAllAssignments(){
		$query = "SELECT * FROM assignments";
		$dbcontroller = new DBController();
		$this->assignments = $dbcontroller->executeSelectQuery($query);
		return $this->assignments;
	}	
    
    public function InsertAssignment($c_id,$s_id,$t_id,$a_t,$a_ds,$a_f,$a_dt){
		$query = "INSERT INTO `assignments`(`classId`, `subjectId`, `teacherId`, `AssignTitle`, `AssignDescription`, `AssignFile`, `AssignDeadLine`) 
        VALUES (".$c_id.",".$s_id.",".$t_id.",'".$a_t."','".$a_ds."','".$a_f."','".$a_dt."')";echo $query;
		$dbcontroller = new DBController();
		$this->assignments = $dbcontroller->executeInsertQuery($query);
		return $this->assignments;
	}
	
    
}
?>