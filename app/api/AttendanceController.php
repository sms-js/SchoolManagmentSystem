<?php
require_once("AttendanceRestHandler.php");
require_once("Attendance.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    
{///////student id
	$id = "";
if(isset($_GET["id"]) ){
	$id = $_GET["id"];
    }}

{///////date
	$date = "";
if(isset($_GET["date"]) ){
	$date = $_GET["date"];
    }}

    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $attendanceRestHandler = new AttendanceRestHandler();
            $attendanceRestHandler->getAllAttendances($id);
            break;

            case "get":
                // to handle REST Url /mobile/list/
                $attendanceRestHandler = new AttendanceRestHandler();
                $attendanceRestHandler->getAttendanceByDate($id,$date);
                break;


        }
        ?>