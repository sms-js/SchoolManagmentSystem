<?php
require_once("UserRestHandler.php");
require_once("User.php");		
$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);
	 
	 // name store into $name.
    $view = $obj['view'];
    
    $sun=$obj['un'];
$seml=$obj['eml'];
$spw=$obj['pw'];
$sfn=$obj['fn'];
$sbd=$obj['bd'];
$sri=$obj['ri'];
$sci=$obj['cl'];
$sg=$obj['g'];
$sadr=$obj['adr'];
$spn=$obj['pn'];
$smn=$obj['mn'];

/*{$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
	}}

{
	$sun="";
	$seml="";
	$spw="";
	$sfn="";
	$sbd="";
	$sri="";
	$sci="";
	$sg="";
	$sadr="";
	$spn="";
	$smn="";
	
	if(isset($_GET["s_un"]) && isset($_GET["s_eml"]) && isset($_GET["s_pw"]) && isset($_GET["s_fn"]) && isset($_GET["s_bd"])
	&& isset($_GET["s_ri"]) && isset($_GET["s_ci"]) && isset($_GET["s_g"]) && isset($_GET["s_adr"]) && isset($_GET["s_pn"]) && isset($_GET["s_mn"]) )
	
	$sun=$_GET["s_un"];$sun=$_GET["s_un"];
	$seml=$_GET["s_eml"];
	$spw=$_GET["s_pw"];
	$sfn=$_GET["s_fn"];
	$sbd=$_GET["s_bd"];
	$sri=$_GET["s_ri"];
	$sci=$_GET["s_ci"];
	$sg=$_GET["s_g"];
	$sadr=$_GET["s_adr"];
	$spn=$_GET["s_pn"];
	$smn=$_GET["s_mn"];}*/

switch($view){



		case "register_student":
			$userRestHandler = new UserRestHandler();
			$userRestHandler->register_student($sun,$seml,$spw,$sfn,$sbd,$sri,$sci,$sg,$sadr,$spn,$smn);
			break;

		
}


?>