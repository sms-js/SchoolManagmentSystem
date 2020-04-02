<?php
require_once("ClassesScheduleRestHandler.php");
require_once("ClassesSchedule.php");		


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
            $classesscheduleRestHandler = new ClassesScheduleRestHandler();
            $classesscheduleRestHandler->getClassSchedule($id);
            break;


        }
        ?>