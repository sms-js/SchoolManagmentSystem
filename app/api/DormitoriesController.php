<?php
require_once("DormitoriesRestHandler.php");
require_once("Dormitories.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    
{///////class id
	$id = "";
if(isset($_GET["id"]) ){
	$id = $_GET["id"];
    }}

    switch($view){

        case "get":
            // to handle REST Url /mobile/list/
            $DormitoriesRestHandler = new DormitoriesRestHandler();
            $DormitoriesRestHandler->getDormitorie($id);
            break;


        }
        ?>