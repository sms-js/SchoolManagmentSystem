<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class StaticPages {
	private $staticpages = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/
	public function getAllStaticPages(){
		$query = "SELECT * FROM staticpages where pageActive=1";
		$dbcontroller = new DBController();
		$this->staticpages = $dbcontroller->executeSelectQuery($query);
		return $this->staticpages;
	}	
	
	
    
}
?>