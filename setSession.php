<?php
session_start();

$tt_id=$_GET['ttid'];
$tstatus=$_GET['sid'];
$_SESSION['tt_id']=$tt_id;
$_SESSION['status']=$tstatus;

?>