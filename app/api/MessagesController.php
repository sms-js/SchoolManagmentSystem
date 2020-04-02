<?php
require_once("MessagesRestHandler.php");
require_once("Messages.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}

   { $id = "";
if(isset($_GET["id"]) ){
	$id = $_GET["id"];
    }}
    
    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $messagesRestHandler = new MessagesRestHandler();
            $messagesRestHandler->getAllMessages($id);
            break;

        case "sent":
            // to handle REST Url /mobile/list/
            $messagesRestHandler = new MessagesRestHandler();
            $messagesRestHandler->getSentMessages($id);
            break;
        case "recieved":
            $messagesRestHandler = new MessagesRestHandler();
            $messagesRestHandler->getReceivedMessages($id);
        break;

        }
        ?>