<?php
require_once("PollsRestHandler.php");
require_once("Polls.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    
    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $pollsRestHandler = new PollsRestHandler();
            $pollsRestHandler->getAllPolls();
            break;

            case "students":
                // to handle REST Url /mobile/list/
                $pollsRestHandler = new PollsRestHandler();
                $pollsRestHandler->getStudentsPolls();
                break;

                case "teachers":
                    // to handle REST Url /mobile/list/
                    $pollsRestHandler = new PollsRestHandler();
                    $pollsRestHandler->getTeachersPolls();
                    break;

                    case "parents":
                        // to handle REST Url /mobile/list/
                        $pollsRestHandler = new PollsRestHandler();
                        $pollsRestHandler->getParentsPolls();
                        break;


        }
        ?>