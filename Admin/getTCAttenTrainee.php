<?php
session_start();
error_reporting(0);
require_once '../RegistrationModule.php';

$trMan= new RegistrationModule();

$tt_id = $_SESSION['tt_id'];

$result= $trMan->getTraineeAcceptedInTC($tt_id);


echo json_encode($result);

?>