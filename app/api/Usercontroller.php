<?php
require_once("UserRestHandler.php");
require_once("User.php");		
$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);
	 
	 // name store into $name.
	$view = $obj['view'];
	$un=$obj['un'];
	$pw=$obj['pw'];

	/*$tun=$obj['un'];
	$teml=$obj['eml'];
	$tpw=$obj['pw'];
	$tfn=$obj['fn'];
	$tbd=$obj['bd'];
	$tg=$obj['g'];
	$tadr=$obj['adr'];
	$tpn=$obj['pn'];
	$tmn=$obj['mn'];*/

/*
{
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
	}}


{
	$un="";$pw="";
if(isset($_GET["un"]) && isset($_GET["pw"])){
$un=$_GET["un"];$pw = $_GET["pw"];
	}}
	
{	
	$tun="";
	$teml="";
	$tpw="";
	$tfn="";
	$tbd="";
	$tg="";
	$tadr="";
	$tpn="";
	$tmn="";
	
	if(isset($_GET["t_un"]) && isset($_GET["t_eml"]) && isset($_GET["t_pw"]) && isset($_GET["t_fn"]) && isset($_GET["t_bd"])
	 && isset($_GET["t_g"]) && isset($_GET["t_adr"]) && isset($_GET["t_pn"]) && isset($_GET["t_mn"]) )

$tun=$_GET["t_un"];$tun=$_GET["t_un"];
$teml=$_GET["t_eml"];
$tpw=$_GET["t_pw"];
$tfn=$_GET["t_fn"];
$tbd=$_GET["t_bd"];
$tg=$_GET["t_g"];
$tadr=$_GET["t_adr"];
$tpn=$_GET["t_pn"];
$tmn=$_GET["t_mn"];}

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
$smn=$_GET["s_mn"];}

{
$pun="";
$peml="";
$ppw="";
$pfn="";
$pbd="";
$pp="";
$pg="";
$padr="";
$ppn="";
$pmn="";
$pof="";
if(isset($_GET["p_un"]) && isset($_GET["p_eml"]) && isset($_GET["p_pw"]) && isset($_GET["p_fn"]) && isset($_GET["p_bd"])
&& isset($_GET["p_p"]) && isset($_GET["p_g"]) && isset($_GET["p_adr"]) && isset($_GET["p_pn"]) && isset($_GET["p_mn"]) && isset($_GET["p_of"]))

$pun=$_GET["p_un"];$pun=$_GET["p_un"];
$peml=$_GET["p_eml"];
$ppw=$_GET["p_pw"];
$pfn=$_GET["p_fn"];
$pbd=$_GET["p_bd"];
$pp=$_GET["p_p"];
$pg=$_GET["p_g"];
$padr=$_GET["p_adr"];
$ppn=$_GET["p_pn"];
$pmn=$_GET["p_mn"];
$pof=$_GET["p_of"];}


	{
	if(isset($_GET["un"])){
		$un=$_GET["un"];
	}}

	
	*/
	
/*
controls the RESTful services
URL mapping
*/
switch($view){

	/*case "all":
		// to handle REST Url /mobile/list/
		$userRestHandler = new UserRestHandler();
		$userRestHandler->getAllUsers();
		break;*/
		
		case "login":
		$userRestHandler = new UserRestHandler();
		$userRestHandler->login_verification($un,$pw);
		break;
        
		case "register_teacher":
		$userRestHandler = new UserRestHandler();
		$userRestHandler->register_teacher($tun,$teml,$tpw,$tfn,$tbd,$tg,$tadr,$tpn,$tmn);
		break;

		case "register_student":
			$userRestHandler = new UserRestHandler();
			$userRestHandler->register_student($sun,$seml,$spw,$sfn,$sbd,$sri,$sci,$sg,$sadr,$spn,$smn);
			break;

		case "register_parent":
				$userRestHandler = new UserRestHandler();
				$userRestHandler->register_parent($pun,$peml,$ppw,$pfn,$pbd,$pp,$pg,$padr,$ppn,$pmn,$pof);
				break;

		/*case "getrole":
			$userRestHandler = new UserRestHandler();
			$userRestHandler->getUserrole($un);
		break;*/
		
	    case "" :
		//404 - not found;
		break;
		
		/*default :
		$userRestHandler = new UserRestHandler();
		$userRestHandler->getUserbyid($view);
		break;*/
}


?>
