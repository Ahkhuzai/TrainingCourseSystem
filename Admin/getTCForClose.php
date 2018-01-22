<?php

session_start();
error_reporting(0);

require_once '../RegistrationModule.php';
require_once '../TrainingCourseModule.php';

$RM_Man = new RegistrationModule();
$tcMan = new TrainingCourseModule();
//only available/unavialble for registration tc
$result=array();
$sid=10;
$result=$RM_Man->getTCRegister($sid);
if($result)
{
for($i=0;$i<count($result);$i++)
{
	$count = $RM_Man->getTraineeRegisteredInTC($result[$i]['id']);
        
	$trainingInfo[$i]= $tcMan->getSingleTrainingCourseInfo($result[$i]['id']);
	if($count)
		$trainingInfo[$i]['counts']=count($count);
	else
		$trainingInfo[$i]['counts']=0;

        $trainingInfo[$i]['close']=0;

}
}
echo json_encode($trainingInfo);

if (isset($_GET['update']))
{
    $tt_id=$_GET['id'];
    $reg_status=$_GET['close'];
    
    if($reg_status==true)
        $reg_status=11;
    
    
    $result=$RM_Man->closeRegister($tt_id);
}

?>