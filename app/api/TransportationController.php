<?php
require_once("TransportationRestHandler.php");
require_once("Transportation.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    
    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $transportaionRestHandler = new TransportationRestHandler();
            $transportaionRestHandler->getAllTransportations();
            break;


        }
        ?>