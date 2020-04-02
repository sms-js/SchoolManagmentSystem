<?php
require_once("UserRestHandler.php");
require_once("User.php");		
$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);
	 
	 // name store into $name.
	$view = $obj['view'];

	$tun=$obj['un'];
	$teml=$obj['eml'];
	$tpw=$obj['pw'];
	$tfn=$obj['fn'];
	$tbd=$obj['bd'];
	$tg=$obj['g'];
	$tadr=$obj['adr'];
	$tpn=$obj['pn'];
	$tmn=$obj['mn'];


switch($view){

	
        
		case "register_teacher":
		$userRestHandler = new UserRestHandler();
		$userRestHandler->register_teacher($tun,$teml,$tpw,$tfn,$tbd,$tg,$tadr,$tpn,$tmn);
		break;

}


?>