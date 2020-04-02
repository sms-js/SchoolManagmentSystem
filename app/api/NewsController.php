<?php
require_once("NewsRestHandler.php");
require_once("News.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    
    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $newsRestHandler = new NewsRestHandler();
            $newsRestHandler->getAllNews();
            break;

            case "students":
                // to handle REST Url /mobile/list/
                $newsRestHandler = new NewsRestHandler();
                $newsRestHandler->getStudentsNews();
                break;

                case "teachers":
                    // to handle REST Url /mobile/list/
                    $newsRestHandler = new NewsRestHandler();
                    $newsRestHandler->getTeachersNews();
                    break;

                    case "parents":
                        // to handle REST Url /mobile/list/
                        $newsRestHandler = new NewsRestHandler();
                        $newsRestHandler->getParentsNews();
                        break;


        }
        ?>