<?php
//error_reporting(0);
session_start();
require_once '../RegistrationModule.php';
$RM_Man = new RegistrationModule();
$result=$RM_Man->getHandoutRequestsOfTrainer($_SESSION['user_id']);
echo json_encode($result);
?>