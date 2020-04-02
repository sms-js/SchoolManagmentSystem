<?php
require_once("GradeLevelsRestHandler.php");
require_once("GradeLevels.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    


    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $gradelevelsRestHandler = new GradeLevelsRestHandler();
            $gradelevelsRestHandler->getGradeLevels();
            break;


        }
        ?>