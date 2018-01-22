<?php
session_start();
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
require_once '../DAL/TimetableRepo.php';
error_reporting(0);
$tcMan= new TrainingCourseModule();
$trMan= new RegistrationModule();
$ttMan= new TimetableRepo();

$resultTT=$ttMan->fetchByQuery("SELECT * FROM timetable WHERE (status=10 or status = 11) AND end_date <=CURDATE()");

if($resultTT)
{    
    for($i=0;$i<count($resultTT);$i++)
    {
        $result[$i]=$tcMan->getSingleTrainingCourseInfo($resultTT[$i]['id']);
        $result[$i]['close'] = 0;

        if ($result[$i]['pid'] == NULL) {
            $result[$i]['pname'] = 'لا تتبع برنامج محدد';
            $result[$i]['sid'] = $result[$i]['status'];
            $status=$trMan->getStatus($result[$i]['sid']);
            $result[$i]['status'] = $status['status_arabic'];
            $trainee=$trMan->getTraineeRegisteredInTC($result[$i]['id']);

            if( isset($trainee[0]['id']))
            $result[$i]['counts'] = count($trainee);
            else
                $result[$i]['counts']=0;

        } else {

            $Presult = $tcMan->getProgramInfo($result[$i]['pid']);
            $result[$i]['pname'] = $Presult['name'];
            $result[$i]['sid'] = $result[$i]['status'];
            $status=$trMan->getStatus($result[$i]['sid']);
            $result[$i]['status'] = $status['status_arabic'];
            $trainee=$trMan->getTraineeRegisteredInTC($result[$i]['id']);
            if( isset($trainee[0]['id']))
            $result[$i]['counts'] = count($trainee);
            else
                $result[$i]['counts']=0;
        }   
    }
}

echo json_encode($result);

if (isset($_GET['update']))
{
    $tt_id=$_GET['id'];
    $close=$_GET['close'];
    if($close==1)
        $result = $trMan->closeTC($tt_id);
    if($result)
        $calcMissed=$trMan->TCFinalAttendance($tt_id);
    if($calcMissed)
        $res = $trMan->calcBlocked($tt_id);
}
?>