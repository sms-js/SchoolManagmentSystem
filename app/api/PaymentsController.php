<?php
require_once("PaymentsRestHandler.php");
require_once("Payments.php");		


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
            $paymentsRestHandler = new PaymentsRestHandler();
            $paymentsRestHandler->getAllPayments($id);
            break;

        case "unpaid":
            // to handle REST Url /mobile/list/
            $paymentsRestHandler = new PaymentsRestHandler();
            $paymentsRestHandler->getUnpaidPayments($id);
            break;
        case "paid":
            $paymentsRestHandler = new PaymentsRestHandler();
            $paymentsRestHandler->getPaidPayments($id);
        break;

        }
        ?>