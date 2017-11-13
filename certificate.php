<?php
include 'libs/smarty/libs/Smarty.class.php';
//error_reporting(0);
$smarty=new Smarty();
if(isset($_POST['back']))
    header('location:approveCertificate.php');
$smarty->display("certificate.tpl");
?>