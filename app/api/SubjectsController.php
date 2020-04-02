<?php
require_once("SubjectsRestHandler.php");
require_once("Subjects.php");		


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
            $subjectsRestHandler = new SubjectsRestHandler();
            $subjectsRestHandler->getSubject($id);
            break;

            case "class":
                $subjectsRestHandler = new SubjectsRestHandler();
                $subjectsRestHandler->getClassSubjects($id);
            break;


        }
        ?>