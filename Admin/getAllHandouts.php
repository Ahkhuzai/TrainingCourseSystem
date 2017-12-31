<?php
//error_reporting(0);
session_start();
require_once '../RegistrationModule.php';
$RM_Man = new RegistrationModule();
$result=$RM_Man->getHandouts();

for($i=0;$i<count($result);$i++)
{
    $status = $RM_Man->getStatus ($result[$i]['sid']);
    $result[$i]['status'] = $status['status_arabic'];
}
echo json_encode($result);
?>