<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class MediaAlbums {
	private $mediaalbums = array();
	//private $req="";
	/*
		you should hookup the DAO here
	*/
	public function getMediaAlbums(){
		$query = "SELECT * FROM mediaalbums where albumParent=0"; //
		$dbcontroller = new DBController();
		$this->mediaalbums = $dbcontroller->executeSelectQuery($query);
		return $this->mediaalbums;
    }	
    
    public function getMediaAlbumsChildren($id){
		$query = "SELECT * FROM mediaalbums where albumParent=".$id;
		$dbcontroller = new DBController();
		$this->mediaalbums = $dbcontroller->executeSelectQuery($query);
		return $this->mediaalbums;
	}	
	
	
    
}
?>