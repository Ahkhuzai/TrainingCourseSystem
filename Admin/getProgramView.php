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
                
                $coun_unavi=0;
                $coun_complete=0;
                for($v=0;$v<$total;$v++)
                {	
                    if($ttProgram[$j][$v]['status']==2)
                    {
                            $psid=2;
                            break;
                    }
                    if($ttProgram[$j][$v]['status']==9)
                            $coun_complete++;
                    if($ttProgram[$j][$v]['status']==10 || $ttProgram[$j][$v]['status']==11 )
                            $coun_unavi++;
                }

                if($coun_unavi && $psid!=2)
                        $psid=10;
                if ($coun_complete==$total)
                        $psid=9;
                $program[$x]['name']= $result[$i]['name'];
                $program[$x]['id']= $result[$i]['id'];
                $program[$x]['start_date'] = $ttProgram[$j][0]['start_date'];
                $program[$x]['end_date'] = $ttProgram[$j][$total-1]['end_date'];;
                $program[$x]['hours'] = $result[$i]['hours'];
                $program[$x]['ttids'] = $ttids;
                $program[$x]['psid'] = $psid;
                $status=$trMan->getStatus($psid);
                $program[$x]['status'] = $status['status_arabic'];
                $x++;
                $psid=0;
                $ttids='';
            }
        }
    }
    
    
    
}
echo json_encode($program);
?>