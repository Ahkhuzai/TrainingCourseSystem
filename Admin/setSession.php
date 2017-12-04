<?php
session_start();
$page=$_GET['page'];
if($page=="Admin_hoRequest")
    $_SESSION['ho_id']=$_GET['ho_Req_id'];
else if($page=="Admin_tcRequest")
    $_SESSION['tt_id']=$_GET['tt_id'];
else if ($page=="Admin_tcRegister")
    $_SESSION['tt_id']=$_GET['tt_id'];
?>