<?php
require_once("UserInfoRestHandler.php");
require_once("UserInfo.php");		


///////view
	$get = "";
if(isset($_GET["get"]) ){
	$get = $_GET["get"];
    }

    $id="";
    if(isset($_GET["id"])){
    $id = $_GET["id"];
}  
    
    
    switch($get){

        case "all":
        $userinfoRestHandler = new UserInfoRestHandler();
        $userinfoRestHandler->getAllUsers();
        break;
        

        case "byid":
            $userinfoRestHandler = new UserInfoRestHandler();
            $userinfoRestHandler->getUserbyid($id);
        break;
        
        default :
        echo "error !";
        break;
}
    
    ?>
    