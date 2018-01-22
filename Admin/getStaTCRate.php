<?php
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
session_start();
error_reporting(0);
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();
$ids=array();
$ids=$_SESSION['ids'];
$result=array();
$totalResult = array(
            array('score'=>0,
                  'criteria'=>'مكان الدورة'),
            array('score'=>0,
                  'criteria'=>'وسائل العرض'),
            array('score'=>0,
                  'criteria'=>'تنظيم الدورة'),
            array('score'=>0,
                  'criteria'=>'مقدم الدورة التدريبية'),
            array('score'=>0,
                  'criteria'=>'البرنامج التدريبي')
        );
for($i=0;$i<count($ids);$i++)
{
    $rateResult=$tcMan->getTrainingCourseRate($ids[$i]);
    
    if($rateResult)
    {
        $result[$i]=$rateResult;
    }
}

$result= array_values($result);
$total=0;
for($i=0;$i<5;$i++)
{
   for($j=0;$j<count($result);$j++)
   {
       $total+=$result[$j][$i]['score']; 
   }
  $totalResult[$i]['score']=$total/count($result);
  $total=0;
}
echo json_encode($totalResult);

?>