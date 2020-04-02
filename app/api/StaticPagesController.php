<?php
require_once("StaticPagesRestHandler.php");
require_once("StaticPages.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    
    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $staticpagesRestHandler = new StaticPagesRestHandler();
            $staticpagesRestHandler->getAllStaticPages();
            break;


        }
        ?>