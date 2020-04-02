<?php
require_once("EventsRestHandler.php");
require_once("Events.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    
    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $NewsRestHandler = new EventsRestHandler();
            $NewsRestHandler->getAllEvents();
            break;

            case "students":
                // to handle REST Url /mobile/list/
                $NewsRestHandler = new EventsRestHandler();
                $NewsRestHandler->getStudentsEvents();
                break;

                case "teachers":
                    // to handle REST Url /mobile/list/
                    $NewsRestHandler = new EventsRestHandler();
                    $NewsRestHandler->getTeachersEvents();
                    break;

                    case "parents":
                        // to handle REST Url /mobile/list/
                        $NewsRestHandler = new EventsRestHandler();
                        $NewsRestHandler->getParentsEvents();
                        break;


        }
        ?>