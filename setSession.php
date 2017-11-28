<?php
session_start();
$page=$_GET['page'];
if($page=="SingleProgram")
    $_SESSION['program_id']=$_GET['program_id'];
else if($page=="SingleTC")
    $_SESSION['tt_id']=$_GET['tt_id'];
else if ($page == "oldRegister") {
    $_SESSION['tt_id'] = $_GET['tt_id'];
    $tcerApp = $_GET['cer_app'];
    $_SESSION['cer_app'] = $tcerApp;
} else if ($page == "SingleRegister") {
    $tt_id = $_GET['ttid'];
    $tstatus = $_GET['sid'];
    $rid = $_GET['rid'];
    $_SESSION['tt_id'] = $tt_id;
    $_SESSION['status'] = $tstatus;
    $_SESSION['rid'] = $rid;
 
} else {
    $tt_id = $_GET['ttid'];
    $tstatus = $_GET['sid'];
    $_SESSION['tt_id'] = $tt_id;
    $_SESSION['status'] = $tstatus;
}
?>