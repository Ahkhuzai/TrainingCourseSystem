<?php
include 'libs/smarty/libs/Smarty.class.php';
$smarty=new Smarty();
//error_reporting(0);
if (isset($_POST['submit'])) {
    $_POST = array();
    $smarty->display("contract.tpl");
} else if (isset($_POST['agree'])) {
    $_POST = array();
    $smarty->display("addTraining.tpl");
} else if (isset($_POST['notAgree'])) {
    $_POST = array();
    header("Location:index.php");
} else if (isset($_POST['addTraining'])) {
    $_POST = array();    
    header("Location:index.php");
} else {
    $smarty->display("becomeTrainer.tpl");
}
?>