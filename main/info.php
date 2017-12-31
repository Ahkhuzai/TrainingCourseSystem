<?php
include '../libs/smarty/libs/Smarty.class.php';
error_reporting(0);
$smarty=new Smarty();
$smarty->display("info.tpl");
?>