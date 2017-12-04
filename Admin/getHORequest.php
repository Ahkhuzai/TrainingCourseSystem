<?php
session_start();
require_once 'RegistrationModule.php';
$RM_Man = new RegistrationModule();
$sid=1;
$result=$RM_Man->getHandoutRequests($sid);
echo json_encode($result);
?>