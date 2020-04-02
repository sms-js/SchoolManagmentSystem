<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class Payments {
	private $payments = array();
	//private $req="";
	/*
		you should hookup the DAO here
    */
    
    public function getAllPayments($id){
		$query = "SELECT * FROM payments where paymentStudent=".$id;
		$dbcontroller = new DBController();
		$this->payments = $dbcontroller->executeSelectQuery($query);
		return $this->payments;
    }

	public function getUnpaidPayments($id){
		$query = "SELECT * FROM payments where paymentStudent=".$id." and paymentStatus=0";
		$dbcontroller = new DBController();
		$this->payments = $dbcontroller->executeSelectQuery($query);
		return $this->payments;
    }	
    
    public function getPaidPayments($id){
		$query = "SELECT * FROM payments where paymentStudent=".$id." and paymentStatus=1";
		$dbcontroller = new DBController();
		$this->payments = $dbcontroller->executeSelectQuery($query);
		return $this->payments;
	}
	
	
    
}
?>