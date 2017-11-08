<?php
include 'libs/smarty/libs/Smarty.class.php';

$smarty=new Smarty();

if(isset($_POST['agree']))
    header("Location:addTrainingDetails.php");

if(isset($_POST['notAgree']))
    header("Location:trainer.php");
$smarty->display("contract.tpl");
?>