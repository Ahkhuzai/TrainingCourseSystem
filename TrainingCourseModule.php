<?php
/**
 * Description of TrainingCourseModule
 *
 * @author ahkhuzai
 */
require_once '../DAL/TrainingCourseRepo.php';
require_once '../DAL/TimetableRepo.php';
require_once '../DAL/PersonaRepo.php';
require_once '../DAL/HandoutTcRepo.php';
require_once '../DAL/HandoutReqRepo.php';
require_once '../DAL/RegistrationRepo.php';
require_once '../DAL/StatusRepo.php';
require_once '../DAL/ProgramRepo.php';
require_once '../DAL/RateDRepo.php';
require_once '../DAL/UserRepo.php';

require_once '../RegistrationModule.php';

class TrainingCourseModule {
    //done
    public function getSingleTrainingCourseInfo($tt_id)
    {
        
        $ttMan = new TimetableRepo();
        $result = $ttMan->fetchByID($tt_id);
        
        $tcMan = new TrainingCourseRepo();
        $tcRsult = $tcMan->fetchByID($result['tc_id']);
        
        $RMan = new RegistrationModule();
        $personaResult = $RMan->getUserInfo($result['tr_id']);

        $ho = new HandoutTcRepo();
        $hoResult = $ho->fetchByTt_id($tt_id);
        
        //create all result in one array 
        $result['tc_ar_name']=$tcRsult['name'];
        $result['tc_eng_name']=$tcRsult['eng_name'];
        $result['goals']=$tcRsult['goals'];
        $result['abstract']=$tcRsult['abstract'];
        $result['pid']=$tcRsult['pid'];       
        $result['tr_ar_name'] = $personaResult['ar_name'];
        $result['url'] = $hoResult[0]['ho_trainee_dir'];       
        return $result;    
    }

    //done
    public function getHandoutRequestInfo($ho_id)
    {
        $hrMan= new HandoutReqRepo();
        $result= $hrMan->fetchById($ho_id);       
        $rMan = new RegistrationModule();
        $personaResult = $rMan->getUserInfo($result['tr_id']);   
        $result['tr_ar_name'] = $personaResult['ar_name'];
        return $result;
    }

    //done
    public function addTrainingCourse($tt_id,$usrId,$pid,$Tname,$Teng_name,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg,$type)
    {
        if($tt_id==0)
        {
            $tcMan = new TrainingCourseRepo();
            $ttMan = new TimetableRepo();
            $hoMan = new HandoutTcRepo();
            $tc_Id = $tcMan->save(0, $Tname, $Teng_name, $Tgoals, $Tabstract, $pid);
            $tt_id=$ttMan->save($tt_id, $tc_Id, $usrId, $Tstart, $Tend, $Thours, $startAt, $location, $addDate, $Tcapacity, $Tstatus, $Tavailable_seat, $tc_avg, $type);
            $ho_id = $hoMan->save(0,$handoutDir,$tt_id);
            if($ho_id>0)
                return true; 
            else {return false;}
        }
        else {
            $tcMan = new TrainingCourseRepo();
            $hoMan = new HandoutTcRepo(); 
            $ttMan = new TimetableRepo();
            $result= $ttMan->fetchByID($tt_id);
            $tc_Id = $tcMan->save($result['tc_id'], $Tname, $Teng_name, $Tgoals, $Tabstract, $pid);
            $ttresult=$ttMan->save($tt_id, $result['tc_id'], $usrId, $Tstart, $Tend, $Thours, $startAt, $location, $addDate, $Tcapacity, $Tstatus, $Tavailable_seat, $tc_avg, $type);
            $result=$hoMan->fetchByTt_id($tt_id);
            $ho_id = $hoMan->save($result[0]['id'],  $result[0]['ho_trainee_dir'],$tt_id);
            if($ho_id>0)
                return true; 
            else{return false; 
            
            }
        }   
    } 
    
    //done 
    public function rePresentTrainingCourse($tt_id,$usrId,$tc_id,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg,$type)
    {
        $ttMan = new TimetableRepo();
        $hoMan = new HandoutTcRepo();
        $tt=$ttMan->save($tt_id, $tc_id, $usrId, $Tstart, $Tend, $Thours, $startAt, $location, $addDate, $Tcapacity, $Tstatus, $Tavailable_seat, $tc_avg, $type);
        $ho_id = $hoMan->save(0,$handoutDir,$tt);
        if($ho_id>0)
            return true; 
        else 
        {
            return false;  
        }  
    }
    //done
    public function getTcBySid($sid)
    {
        $ttMan = new TimetableRepo();
        if($sid>0)
        {
            $query='select timetable.id from timetable  where status='.$sid;
            $result = $ttMan->fetchByQuery($query); 
            if($result)
            {
                for($i=0;$i<count($result);$i++)
                {
                    $tc[$i]=$this->getSingleTrainingCourseInfo($result[$i]['id']);
                }
                return $tc; 
            }  
        }
        else
        {
           $query='select timetable.id from timetable';
            $result = $ttMan->fetchByQuery($query);

            for($i=0;$i<count($result);$i++)
            {
                $tc[$i]=$this->getSingleTrainingCourseInfo($result[$i]['id']);
            }
            return $tc; 
        }     
    }

    //done
    public function AddProgram($name,$engname,$abstract,$goals,$hours)
    {
        $program=new ProgramRepo();
        $result= $program->save(0, $name, $engname, $goals, $abstract, $hours);
        
        if($result)
        {
            return true;
        }
        else 
        {
            return false;   
        }  
    }
    //done
    public function getProgramInfo($pid)
    {
        $pMan = new ProgramRepo();
        $result=$pMan->fetchById($pid);
        return $result;
    }
    
    public function getTcInProgram($pid)
    {
        $tcMan = new TrainingCourseRepo();
        $result = $tcMan->fetchByProgramId($pid);
        if($result)
            return $result;
        else 
            return false;
    }

    //done
    public function getProgram()
    {
        $pMan = new ProgramRepo();
        $result=$pMan->fetchAll();
        $result=array_values($result);
        return $result;
    }
    
    public function getProgramVersionByYear($pid)
    {
        $ttMan = new TimetableRepo();
        $qr = "SELECT year(start_date) as year FROM timetable join trainingcourse WHERE trainingcourse.id= timetable.tc_id and trainingcourse.pid = $pid group by year(start_date)";
        $result = $ttMan->fetchByQuery($qr);
        
        if($result)
        {    
            $result= array_values($result);
            return $result;}
        else 
            return false;
    }
    
    public function getSingleProgramByYear($year,$pid)
    {
        
        $ttMan = new TimetableRepo();
        $qr = "select timetable.id,timetable.start_date,timetable.end_date,timetable.type,timetable.status FROM timetable join trainingcourse WHERE trainingcourse.pid = $pid and trainingcourse.id= timetable.tc_id and year(start_date) like ". $year['year'];
        $result = $ttMan->fetchByQuery($qr);
        if($result)
        {      
            return $result;
        }
        else 
            return false;
    }
    
    //to remove when finish
    public function getSingleProgram($pid,$sid)
    {
        if($sid==0)
        {
        $ttMan = new TimetableRepo();
        $qr = "SELECT timetable.id,timetable.start_date,timetable.end_date,timetable.type,timetable.status FROM timetable join trainingcourse  WHERE trainingcourse.id= timetable.tc_id and trainingcourse.pid = ".$pid." order by start_date";
        $result = $ttMan->fetchByQuery($qr);
       
        if($result)
            return $result;
        else 
            return false;
        }
        else
        {
            $ttMan = new TimetableRepo();
            $qr = "SELECT timetable.id,timetable.start_date,timetable.end_date,timetable.type,timetable.status FROM timetable join trainingcourse  WHERE trainingcourse.id= timetable.tc_id and trainingcourse.status = ".$sid." and trainingcourse.pid = ".$pid." order by start_date";
            $result = $ttMan->fetchByQuery($qr);
           
            if($result)
                return $result;
            else 
                return false;
        }
    }

    public function getTraineeRegisteredProgram($ids)
    {
        $RMan= new RegistrationRepo();
        $trMan= new RegistrationModule();
        $qr = "select usr_id from registration where registration_status=2 and tt_id=".$ids[0];
        $result = $RMan->fetchByQuery($qr);

        if($result)
        {
            for($i=0;$i<count($result);$i++)
                $userIds[$i]=$result[$i]['usr_id'];

            for($i=1;$i<count($ids);$i++)
            {
                $qr = "select usr_id from registration where registration_status=2 and tt_id=".$ids[$i];
                $Newresult = $RMan->fetchByQuery($qr);
                if($Newresult)
                {
                    for($i=0;$i<count($Newresult);$i++)
                        $NewUserIds[$i]=$Newresult[$i]['usr_id'];
                    $userIds=array_intersect($userIds, $NewUserIds);
                }
                else 
                    return false;
            }

            for($i=0;$i<count($userIds);$i++)
                $Trainees[$i]=$trMan->getTraineeInfo($userIds[$i]);

            return $Trainees;
        }
        else
            return false;   
    }

    public function getTraineeAttendProgram($ids)
    {
                $RMan= new RegistrationRepo();
        $trMan= new RegistrationModule();
        $qr = "select usr_id from registration where attendance_status=12 and tt_id=".$ids[0];
        $result = $RMan->fetchByQuery($qr);

        if($result)
        {
            for($i=0;$i<count($result);$i++)
                $userIds[$i]=$result[$i]['usr_id'];

            for($i=1;$i<count($ids);$i++)
            {
                $qr = "select usr_id from registration where attendance_status=12 and tt_id=".$ids[$i];
                $Newresult = $RMan->fetchByQuery($qr);
                if($Newresult)
                {
                    for($i=0;$i<count($Newresult);$i++)
                        $NewUserIds[$i]=$Newresult[$i]['usr_id'];
                    $userIds=array_intersect($userIds, $NewUserIds);
                }
                else 
                    return false;
            }
            if($userIds)
            { for($i=0;$i<count($userIds);$i++)
                $Trainees[$i]=$trMan->getTraineeInfo($userIds[$i]);

            return $Trainees;}
        }
        else
            return false; 
    }
    
    //done
    public function getTotalTrainerTC($tr_id)
    {
       $ttMan = new TimetableRepo();
       $result = $ttMan->fetchByQuery("select * from timetable where tr_id = $tr_id and status = 9");
       if($result)
           return $result;
       else
           return false;
    }

    
    //done
    public function getTotalTrainerRate($totalTc)
    {
        
        $alltotal=0;
        $allvoter=0;
        for($i=0;$i<count($totalTc);$i++)
        {
            $result=$this->getSingleTCRate($totalTc[$i]['id']);
            $alltotal+=$result['presenter_total_rate'];
            $allvoter+=$result['voter_count'];
        }
        if($allvoter>0)
            return round($alltotal/$allvoter, 2);
        else
            return 0;
    }

    //done
    public function getSingleTCRate($tt_id)
    {
        $rMan= new RateDRepo();
        $result=$rMan->fetchByTt_id($tt_id);
        $totalPresenter=0;
        $totalProgram=0;
        $totalPlace=0;
        $totalorgnization=0;
        $totalPresentation=0;
        if($result)
        {
            for($j=0;$j<count($result);$j++)
            {
                $totalPresenter+=$result[$j]['presenter_rate'];
                $totalProgram+=$result[$j]['training_program_rate'];
                $totalPlace+=$result[$j]['place_rate'];
                $totalPresentation+=$result[$j]['presentation_rate'];
                $totalorgnization+=$result[$j]['organizing_rate'];
                $comments[$j]=$result[$j]['comments'];
            }
            $singleAvg['comments']=$comments;
            $singleAvg['presenter_rate']=$totalPresenter/count($result);
            $singleAvg['presenter_total_rate']=$totalPresenter;
            $singleAvg['voter_count']=count($result);
            $singleAvg['training_program_rate']=$totalProgram/count($result);
            $singleAvg['place_rate']=$totalPlace/count($result);
            $singleAvg['presentation_rate']=$totalPresentation/count($result);
            $singleAvg['organizing_rate']=$totalorgnization/count($result);
            $singleAvg['totalRate']=( $singleAvg['organizing_rate']+$singleAvg['presentation_rate']+$singleAvg['place_rate']+$singleAvg['training_program_rate']+$singleAvg['presenter_rate'])/5; 
            return $singleAvg;
        }
        else
            return 0;
    }


 

    //done
    public function getTrainingCourseRate($tt_id)
    {
        $rdMan=new RateDRepo();
        $rateD=$rdMan->fetchByTt_id($tt_id);
        $rateD = array_values($rateD);
        if($rateD)
        {
        //Create array for chart 
        $total_voter= count($rateD);
        $total_place=0;
        $total_presentation=0;
        $total_orgnization=0;
        $total_trainer=0;
        $total_program=0;
               
        
        //calculate avg for all voters value
        for($i=0;$i<$total_voter;$i++)
        {
            $total_place+=$rateD[$i]['place_rate'];
            $total_presentation+=$rateD[$i]['presentation_rate'];
            $total_orgnization+=$rateD[$i]['organizing_rate'];
            $total_trainer+=$rateD[$i]['presenter_rate'];
            $total_program+=$rateD[$i]['training_program_rate']; 
        }
        
        $rate=array(
            array('score'=>$total_place/$total_voter,
                  'criteria'=>'مكان الدورة'),
            array('score'=>$total_presentation/$total_voter,
                  'criteria'=>'وسائل العرض'),
            array('score'=>$total_orgnization/$total_voter,
                  'criteria'=>'تنظيم الدورة'),
            array('score'=>$total_trainer/$total_voter,
                  'criteria'=>'مقدم الدورة التدريبية'),
            array('score'=>$total_program/$total_voter,
                  'criteria'=>'البرنامج التدريبي')
        );
       
        return $rate;
        }
        else 
            return false;
    }
    
    //done but need more look
    public function getTrainingCourseAvailableForTrainee($traineeID)
    {
        $resultAvailable = $this->getTcBySid(10);
        $resultClosed = $this->getTcBySid(11);
        $result=array();
        if($resultAvailable)
        $result= array_merge($result,$resultAvailable);
        if($resultClosed)
        $result= array_merge($result,$resultClosed);
        
        $TraineeTC=$this->getTraineeRegister($traineeID,0);
        
        for($i=0;$i<count($TraineeTC);$i++)
           $Trainee_TC_ID[$i]=$TraineeTC[$i]['tt_id'];

        for($i=0;$i<count($result);$i++)
           $result_TC_ID[$i]=$result[$i]['id'];

        $resultID = array_values(array_diff($result_TC_ID, $Trainee_TC_ID));
        $j=0;
        for($i=0;$i<count($resultID);$i++)
        {
            $res=$this->getSingleTrainingCourseInfo($resultID[$i]);
            if($res['start_date'] >= date('Y-m-d'))
            {
                $resultTC[$j]=$res;
                $j++;
                
            }
        }
        
        return $resultTC;
    }
    //done but need more look
    public function getTraineeRegister($te_id,$sid)
    {
        if($sid>0)
            $qr='SELECT * FROM `registration` WHERE `usr_id`='.$te_id.' AND `registration_status`='.$sid;
        else {
            $qr='SELECT * FROM `registration` WHERE `usr_id`='.$te_id;
        }
        $tReg=new RegistrationRepo();
        $result=$tReg->fetchByQuery($qr);
        return $result;
    }
    //done
    public function getTraineeAttended($te_id,$sid)
    {
        $tReg=new RegistrationRepo();
        $result=$tReg->fetchByQuery('SELECT * FROM `registration` WHERE `usr_id`='.$te_id.' AND `attendance_status`='.$sid);
        return $result;
    }
    
    //done
    public function getTraineeAccepted($te_id,$sid)
    {
        $tReg=new RegistrationRepo();
        $result=$tReg->fetchByQuery('SELECT * FROM `registration` WHERE `usr_id`='.$te_id.' AND `registration_status`='.$sid);
        return $result;
    }
    public function appolgizeFromAttending($rid)
    {
        $trMan= new RegistrationRepo();
        $result = $trMan->fetchByID($rid);
        if ($result) {
            $saveResult = $trMan->save($rid, $result['usr_id'], $result['tt_id'], $result['registration_status'], 5, $result['certificate_approved'], $result['rate_flag']);
            return $saveResult;
        }
        else
            return false;
    }
    //done
    public function getTrainingCourseForRateByUserID($usrID)
    {
        $result=$this->getTraineeAttended($usrID,12);
        $x=0;
        for ($i = 0; $i < count($result); $i++) {
            if ($result[$i]['rate_flag'] == 0) {
                $tc[$x] = $this->getSingleTrainingCourseInfo($result[$i]['tt_id']);
                $tc[$x]['rid']=$result[$i]['id'];
                $x++;
            }
        }
        return $tc;
    }
    
   
    
    //done
    public function insertRate($tt_id,$usrId,$place,$program,$orgnization,$presentation,$presenter,$comment,$rid)
    {
        $regMan = new RegistrationRepo();
        $rateMan = new RateDRepo();
        $rateMan->save(0, $tt_id, $usrId, $comment, $place, $presenter, $presentation, $orgnization, $program);
        $reg=$regMan->fetchByID($rid);
        $result=$regMan->save($rid, $usrId, $tt_id, $reg['registration_status'],$reg['attendance_status'], $reg['certificate_approved'], 1);
        //CALCULATE AVG AFTER ADDING NEW RATE; 
        $this->updateAvgForOneTC($tt_id);
        
        if($result)
            return true;
        else 
            return false;
        
    }
    
    //done
    public function updateAvgForOneTC($tt_id)
    {
        $rateMan = new RateDRepo();
        $tbMan = new TimetableRepo();
        $rat_tc = $rateMan->fetchByTt_id($tt_id);
        
        $total=0;
        for($i=0;$i<count($rat_tc);$i++) 
        {
            $total+=$rat_tc[$i]['place_rate']+$rat_tc[$i]['presentation_rate']+$rat_tc[$i]['organizing_rate']+$rat_tc[$i]['presenter_rate']+$rat_tc[$i]['training_program_rate'];
        }
        $totalRate=$total/5;
        $timetable=$tbMan->fetchByID($tt_id);
        $result=$tbMan->save($tt_id, $timetable['tc_id'],  $timetable['tr_id'],  $timetable['start_date'],  $timetable['end_date'],  $timetable['duration'],  $timetable['start_at'],  $timetable['location'],  $timetable['add_date'],  $timetable['capacity'],  $timetable['status'],  $timetable['available_seat'],$totalRate,$timetable['type']);
        if($result)
            return true;
        else 
            return false;
        
    }
    
    //done
    public function getTrainingCourse()
    {
        $tcMan = new TrainingCourseRepo();
        $result = $tcMan->fetchAll();
        $result=array_values($result);
        if($result)
            return $result;
        else 
            return false;
    }
    
    public function getTrainingCourseTorePresent()
    {
        $ttMan = new TimetableRepo();
        $result = $ttMan->fetchByQuery('SELECT DISTINCT trainingcourse.id , trainingcourse.name ,trainingcourse.pid,trainingcourse.abstract,trainingcourse.goals FROM `timetable`join trainingcourse WHERE trainingcourse.id= timetable.tc_id and(`status`=9 or `status`=2 or `status`=11 or `status`=10 )');
        $result=array_values($result);
        if($result)
            return $result;
        else 
            return false;
    }


    //done
    public function getTotalTCPresent($tc_id)
    {
        $ttMan = new TimetableRepo();
        $qr="SELECT * FROM timetable where tc_id = ".$tc_id." and status = 9";
        $result = $ttMan->fetchByQuery($qr);
        
        if($result)
            return count($result);
        else 
            return 0; 
    }
    
    //////////////////////////////////////////
}
            