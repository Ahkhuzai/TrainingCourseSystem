<?php
session_start();
error_reporting(0);
require_once '../RegistrationModule.php';

$trMan= new RegistrationModule();

$tt_id = $_SESSION['tt_id'];
$sid=0;
$result= $trMan->getTraineeRegisteredInTC($tt_id);
if($result)
for($i=0;$i<count($result);$i++)
{
	if($result[$i]['sid']==2)
		$result[$i]['boolstatus']=1;
	else
		$result[$i]['boolstatus']=0;
}

echo json_encode($result);
?>