<?php
error_reporting(0);
session_start();
require_once '../TrainingCourseModule.php';
$tc_Man = new TrainingCourseModule();
require_once '../RegistrationModule.php';
$trMan = new RegistrationModule();
$result=$tc_Man->getProgram();
$x=0;
$y=0;
$psid=0;
$ttids='';
if($result)
{
    for($i=0;$i<count($result);$i++)
    {
        $res=$tc_Man->getProgramVersionByYear($result[$i]['id']);
        if($res)
        {
            for($j=0;$j<count($res);$j++)
            {
                //get tt info 
                $ttProgram[$j] = $tc_Man->getSingleProgramByYear($res[$j],$result[$i]['id']);
                $total = count($ttProgram[$j]);
                for($v=0;$v<$total;$v++)
                {
                    $ttids = $ttids.$ttProgram[$j][$v]['id'].'-';
                }
                
                $ids = explode("-", $ttids);
                $ids = array_filter($ids);
                
                if($ids)
                {
                    $trainee=$tc_Man->getTraineeAttendProgram($ids);
                    if($trainee)
                    {
                        for($b=0;$b<count($trainee);$b++)
                        {
                            if($trainee[$b]['user_id']==$_SESSION['user_id'])
                            {
                                $program[$x]['name']= $result[$i]['name'];
                                $program[$x]['id']= $result[$i]['id'];
                                $program[$x]['start_date'] = $ttProgram[$j][0]['start_date'];
                                $program[$x]['end_date'] = $ttProgram[$j][$total-1]['end_date'];;
                                $program[$x]['hours'] = $result[$i]['hours'];
                                $program[$x]['ttids'] = $ttids;
                                $psid=9;
                                $program[$x]['psid'] = $psid;
                                $status=$trMan->getStatus($psid);
                                $program[$x]['status'] = $status['status_arabic'];
                                $x++;
                                
                                
                            }
                        }
                    }
                
                }
                 $ttids='';
                
            }
        }
    }
}
echo json_encode($program);
?>