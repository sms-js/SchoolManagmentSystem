<?php
require_once("ExamsRestHandler.php");
require_once("Exams.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    


    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $examsRestHandler = new ExamsRestHandler();
            $examsRestHandler->getAllExams();
            break;


        }
        ?>