<?php
require_once("TermsRestHandler.php");
require_once("Terms.php");		


/*{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}*/

    $json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);
	 
	 // name store into $name.
	$view = $obj['view'];
    
    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $termsRestHandler = new TermsRestHandler();
            $termsRestHandler->getAllTerms();
            break;


        }
        ?>