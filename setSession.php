<?php
session_start();
$page=$_GET['page'];
if($page=="SingleProgram")
    $_SESSION['program_id']=$_GET['program_id'];
else 
{
$tt_id=$_GET['ttid'];
$tstatus=$_GET['sid'];
$_SESSION['tt_id']=$tt_id;
$_SESSION['status']=$tstatus;
}

?>