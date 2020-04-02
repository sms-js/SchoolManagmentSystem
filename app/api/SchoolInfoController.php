<?php
require_once("SchoolInfoRestHandler.php");
require_once("SchoolInfo.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    
    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $schoolinfoRestHandler = new SchoolInfoRestHandler();
            $schoolinfoRestHandler->getAllSchoolInfo();
            break;


        }
        ?>