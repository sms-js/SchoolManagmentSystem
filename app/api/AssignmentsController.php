<?php
require_once("AssignmentsRestHandler.php");
require_once("Assignments.php");		


{///////view
	$view = "";
if(isset($_GET["view"]) ){
	$view = $_GET["view"];
    }}
    
    /// insert assignment
     $c_id="";
     $s_id="";
     $t_id="";
     $a_t="";
     $a_ds="";
     $a_dt="";
     $a_f="";
     if(isset($_GET["c_id"]) && isset($_GET["s_id"]) && isset($_GET["t_id"]) &&
     isset($_GET["a_t"]) && isset($_GET["a_ds"]) && isset($_GET["a_f"])  && isset($_GET["a_d"]) )
        $c_id=$_GET["c_id"];$c_id=$_GET["c_id"];
        $s_id=$_GET["s_id"];
        $t_id=$_GET["t_id"];
        $a_t=$_GET["a_t"];
        $a_ds=$_GET["a_ds"];
        $a_f=$_GET["a_f"];
        $a_dt=$_GET["a_dt"];
        
     
    
    

    switch($view){

        case "all":
            // to handle REST Url /mobile/list/
            $assignmentsRestHandler = new AssignmentsRestHandler();
            $assignmentsRestHandler->getAllAssignments();
            break;

            case "insert":
                // to handle REST Url /mobile/list/
                $assignmentsRestHandler = new AssignmentsRestHandler();
                $assignmentsRestHandler->InsertAssignment($c_id,$s_id,$t_id,$a_t,$a_ds,$a_f,$a_dt);
                break;

        }
        ?>