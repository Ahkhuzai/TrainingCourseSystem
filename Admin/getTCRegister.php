<?php
session_start();
require_once 'RegistrationModule.php';
$RM_Man = new RegistrationModule();
$sid=2;
$result=$RM_Man->getTCRegister($sid);
echo json_encode($result);
?>