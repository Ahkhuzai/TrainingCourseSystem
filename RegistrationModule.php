<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Ahlam Alkhuzai
 */
require_once '../DAL/AttendanceRepo.php';
require_once '../DAL/UserRepo.php';
require_once '../DAL/UserRoleRepo.php';
require_once '../DAL/SysRoleRepo.php';
require_once '../DAL/HandoutReqRepo.php';
require_once '../DAL/PersonaRepo.php';
require_once '../DAL/StatusRepo.php';
require_once '../DAL/TimetableRepo.php';
require_once '../DAL/TrainingCourseRepo.php';
require_once '../DAL/RegistrationRepo.php';
require_once '../DAL/BlockedUserRepo.php';
require_once '../TrainingCourseModule.php';
require_once '../DAL/TimetableRepo.php';

class RegistrationModule {    

    //done
    public function getUserInfo($id)
    {
        $user = new UserRepo();
        $persona = new PersonaRepo();
        $result=$user->fetchById($id);
        $personaResult = $persona->fetchById($result['persona_id']);
        if($personaResult)
        {
            $personaResult['username']=$result['username'];
            $personaResult['email']=$result['email'];
            $personaResult['usr_id']=$result['id'];
            return $personaResult;
        }
        else 
            return false;
    }

    //done
    public function validateUser($usrName,$usrPass)
    {      
       $user = new UserRepo();
       $result=$user->fetchByUsername($usrName);    
        if ($result['password'] == $usrPass) {
            return $result;
        }
        else
            return false;
    }

    //done
    public function isAdmin($id)
    {
        $user = new UserRoleRepo();
        $role = new SysRoleRepo();
        $result = $user->fetchByUser_id($id);
        for($i=0;$i<count($result);$i++)
        {
            $roleResult= $role->fetchById($result[$i]['role_id']);
            if($roleResult['role_code']=='AD')
                return true;
        }
        
        return false;
    }
    
    //done
    public function getHandoutRequests($sid)
    {
        $ho = new HandoutReqRepo();
        $result = $ho->fetchBystatus_id($sid);   
        //get tr name 
        if($result)
        {
            for($i=0;$i<count($result);$i++)
            {
                $user = $this->getUserInfo($result[$i]['tr_id']);
                $result[$i]['ar_name']=$user['ar_name'];       
            }

            return $result;
        }
        else
            return false;
    }
    //done
    public function getHandouts()
    {
        $ho = new HandoutReqRepo();
        $result = $ho->fetchAll();  
        $result= array_values($result);
        //get tr name 
        if($result)
        {
            for($i=0;$i<count($result);$i++)
            {
                $user = $this->getUserInfo($result[$i]['tr_id']);
                $result[$i]['ar_name']=$user['ar_name'];       
            }

            return $result;
        }
        else
            return false;
    }
    
    //done
    public function getTCRequests($sid)
    {
        $timetable = new TimetableRepo();
        $timetable_result= $timetable->fetchBystatus_id($sid);
        if($timetable_result)
        {
            return $timetable_result;
        }
        else {
            return false;
        }
        
    }

    //done
    public function getTCRegister($sid)
    {
        $timetable = new TimetableRepo();
        
        $query="select timetable.id from timetable join trainingcourse  where timetable.start_date>=CURDATE() and timetable.status=$sid and timetable.tc_id = trainingcourse.id";

        $timeTableResult = $timetable->fetchByQuery($query);
        if($timeTableResult)
        {
            return $timeTableResult;
        }
        else 
            return false;   
    }

    //done
    public function getTraineeRegisteredInTC($tt_id)
    {
        $registration = new RegistrationRepo();
        
        $resultReg=$registration->fetchByTt_id($tt_id);
       
        if($resultReg)
        {
            for($i=0;$i<count($resultReg);$i++)
            {
                $Trainee[$i] = $this->getUserInfo($resultReg[$i]['usr_id']);
                $Trainee[$i]['missed']=$this->gettotalMissed($resultReg[$i]['usr_id']);
                $Trainee[$i]['excused']=$this->gettotalExcused($resultReg[$i]['usr_id']);
                $Trainee[$i]['certificate']=$resultReg[$i]['certificate_approved'];
                $status = $this->getStatus($resultReg[$i]['registration_status']);
                $Trainee[$i]['status']=$status['status_arabic'];
                $Trainee[$i]['sid']=$resultReg[$i]['registration_status'];

                $status = $this->getStatus($resultReg[$i]['attendance_status']);
                $Trainee[$i]['attendance_status']=$status['status_arabic'];
                $Trainee[$i]['asid']=$resultReg[$i]['attendance_status'];

                $Trainee[$i]['rid']=$resultReg[$i]['id'];
            }
            return $Trainee;
        }
        else
        {
            return false;
        }
    }

    //done
    public function getTraineeAcceptedInTC($tt_id)
    {
        $registration = new RegistrationRepo();
        
        $resultReg=$registration->fetchByTt_id($tt_id);
        if($resultReg)
        {
            for($i=0;$i<count($resultReg);$i++)
            {
                if($resultReg[$i]['registration_status']==2)
                {
                    $Trainee[$i] = $this->getUserInfo($resultReg[$i]['usr_id']);
                    $Trainee[$i]['missed']=$this->gettotalMissed($resultReg[$i]['usr_id']);
                    $Trainee[$i]['excused']=$this->gettotalExcused($resultReg[$i]['usr_id']);
                    $Trainee[$i]['certificate']=$resultReg[$i]['certificate_approved'];
                    $status = $this->getStatus($resultReg[$i]['attendance_status']);
                    $Trainee[$i]['status']=$status['status_arabic'];
                    $Trainee[$i]['sid']=$resultReg[$i]['attendance_status'];
                    $Trainee[$i]['rid']=$resultReg[$i]['id'];
                }
            }
            return $Trainee;
        }
        else
        {
            return false;
        }
    }

    //done
    public function getStatus($sid)
    {
        $sMan = new StatusRepo();
        
        $status =$sMan->fetchById($sid);

        return $status;
    }

    //done
    public function gettotalMissed($usrId)
    {
        $regMan = new RegistrationRepo();
        $allRegister=$regMan->fetchByUsr_id($usrId);
        //get number of missed;
        $totalMiss=0;
        for($i=0;$i<count($allRegister);$i++)
        {
            if($allRegister[$i]['attendance_status']==4)
                $totalMiss+=1;
        }
        return $totalMiss;
    }

    //done
    public function gettotalAttend($usrId)
    {
        $regMan = new RegistrationRepo();
        $allRegister=$regMan->fetchByUsr_id($usrId);
        //get number of missed;
        $totalAttend=0;
        for($i=0;$i<count($allRegister);$i++)
        {
            if($allRegister[$i]['attendance_status']==12)
                $totalAttend+=1;
        }
        return $totalAttend;
    }

    //done
    public function gettotalUnderProcessing($usrId)
    {
        $regMan = new RegistrationRepo();
        $allRegister=$regMan->fetchByUsr_id($usrId);
        //get number of missed;
        $totalUp=0;
        for($i=0;$i<count($allRegister);$i++)
        {
            if($allRegister[$i]['registration_status']==1)
                $totalUp+=1;
        }
        return $totalUp;
    }

    //done
    public function gettotalAccepted($usrId)
    {
        $regMan = new RegistrationRepo();
        $allRegister=$regMan->fetchByUsr_id($usrId);
        //get number of missed;
        $totalAccepted=0;
        for($i=0;$i<count($allRegister);$i++)
        {
            if($allRegister[$i]['registration_status']==2)
                $totalAccepted+=1;
        }
        return $totalAccepted;
    }

    //done
    public function gettotalExcused($usrId)
    {
        $regMan = new RegistrationRepo();
        $allRegister=$regMan->fetchByUsr_id($usrId);
        //get number of appolgize;
        $totalAppo=0;
        for($i=0;$i<count($allRegister);$i++)
        {
            if($allRegister[$i]['attendance_status']==5)
                $totalAppo+=1;
        }
        return $totalAppo;
    }   

    //done
       public function HandleTCRequest($tt_id,$type)
    {
        $ttMan=new TimetableRepo();
        $result = $ttMan->fetchByID($tt_id);
        if ($type == 1) {
           
            $resultSave = $ttMan->save($tt_id, $result['tc_id'], $result['tr_id'], $result['start_date'], $result['end_date'], $result['duration'], $result['start_at'], $result['location'], $result['add_date'], $result['capacity'],3, $result['available_seat'], $result['tc_total_avg_rate'],$result['type']);
            if($resultSave)
                return true;
            else 
                return false;
        }
        if ($type == 2) {
            $resultSave = $ttMan->save($tt_id, $result['tc_id'], $result['tr_id'], $result['start_date'], $result['end_date'], $result['duration'], $result['start_at'], $result['location'], $result['add_date'], $result['capacity'],2, $result['available_seat'], $result['tc_total_avg_rate'],$result['type']);
            if($resultSave)
                return true;
            else 
                return false;
        }
    }   

    //done
    public function HandleHORequest($ho_id,$type)
    {   
        
        $hoMan =new HandoutReqRepo();
        $result= $hoMan->fetchById($ho_id);
        
        if ($type == 1) {
            $resultSave = $hoMan->save($ho_id, $result['name'], $result['ho_trainer_dir'], $result['ho_trainee_dir'], $result['presentation_dir'], $result['scientific_chapter'], $result['add_date'], 3, $result['tr_id']);
            if($resultSave)
                return true;
            else 
                return false;
        }
        if ($type == 2) {
            $resultSave = $hoMan->save($ho_id, $result['name'], $result['ho_trainer_dir'], $result['ho_trainee_dir'], $result['presentation_dir'], $result['scientific_chapter'], $result['add_date'],2, $result['tr_id']);
            if($resultSave)
                return true;
            else 
                return false;
        }
    }   

    //done
    public function HandleTraineeRegister($reg_id,$reg_status)
    {
        $rgMan= new RegistrationRepo();
        $result=$rgMan->fetchByID($reg_id);
        $resultSave = $rgMan->save($reg_id, $result['usr_id'], $result['tt_id'], $reg_status,$result['attendance_status'],$result['certificate_approved'], $result['rate_flag']);
        if($resultSave)
            return true;
        else 
            return false;
    }   

    //done
    public function closeRegister($tt_id)
    {
        $ttMan = new TimetableRepo();
        $result = $ttMan->fetchByID($tt_id);        
        $resultSave = $ttMan->save($tt_id, $result['tc_id'], $result['tr_id'], $result['start_date'], $result['end_date'], $result['duration'], $result['start_at'], $result['location'], $result['add_date'], $result['capacity'], 11 , $result['available_seat'], $result['tc_total_avg_rate'],$result['type']);
        if($resultSave)
            return true;
        else
            return false;
    }  

     //done
    public function closeTC($tt_id)
    {
        $ttMan = new TimetableRepo();
        $result = $ttMan->fetchByID($tt_id);   

        $resultSave = $ttMan->save($tt_id, $result['tc_id'], $result['tr_id'], $result['start_date'], $result['end_date'], $result['duration'], $result['start_at'], $result['location'], $result['add_date'], $result['capacity'], 9 , $result['available_seat'], $result['tc_total_avg_rate'],$result['type']);
        if($resultSave)
            return true;
        else
            return false;
    }
    public function getTcTotalDays($tt_id)
    {
        $ttMan = new TimetableRepo();
        $result= $ttMan->fetchByID($tt_id);
        if($result)
        {
            $date2= date('Y-m-d', strtotime($result['end_date']. " +1 Days"));
            $datetime1 = date_create($result['start_date']);
            $datetime2 = date_create($date2);
            $differenceFormat = '%a';

            $interval = date_diff($datetime1, $datetime2);

            return $interval->format($differenceFormat);
        }
        else 
            return false;
    }
    //done
    public function TCFinalAttendance($tt_id)
    {
        $attMan = new AttendanceRepo();
        $regMan = new RegistrationRepo();
        $result=$this->getTraineeRegisteredInTC($tt_id);
        $tcDates = $this->getTcTotalDays($tt_id);
        if($result)
        {
            for($i=0;$i<count($result);$i++)
            {
               $user_id=$result[$i]['usr_id'];
               $resultAtt = $attMan->fetchByQuery("SELECT * FROM attendance WHERE usr_id=$user_id and timetable_id=$tt_id");
               
               if(!$resultAtt[0])
               {
                    $regResult= $regMan->fetchByID($result[$i]['rid']);
                       if($regResult['attendance_status']!=5)
                            $res=$regMan->save($regResult['id'], $regResult['usr_id'], $regResult['tt_id'], $regResult['registration_status'],4, $regResult['certificate_approved'], $regResult['rate_flag']);  
               }
               else{ 
                 
                   if (count($resultAtt)==1 && $tcDates==1)
                   {
                       $regResult= $regMan->fetchByID($result[$i]['rid']);
                       $res=$regMan->save($regResult['id'], $regResult['usr_id'], $regResult['tt_id'], $regResult['registration_status'],12, $regResult['certificate_approved'], $regResult['rate_flag']);  
                   }
                   else if(count($resultAtt)>=1&& $tcDates>1) 
                   {
                       echo $tcDates;
                       echo ($tcDates/2);
                       echo count($resultAtt);
                       if(count($resultAtt)>=($tcDates/2))
                       {
                           $regResult= $regMan->fetchByID($result[$i]['rid']);
                           $res=$regMan->save($regResult['id'], $regResult['usr_id'], $regResult['tt_id'], $regResult['registration_status'],12, $regResult['certificate_approved'], $regResult['rate_flag']);  
                       }
                       else 
                        {
                           $regResult= $regMan->fetchByID($result[$i]['rid']);
                           if($regResult['attendance_status']!=5)
                                $res=$regMan->save($regResult['id'], $regResult['usr_id'], $regResult['tt_id'], $regResult['registration_status'],4, $regResult['certificate_approved'], $regResult['rate_flag']);  
                        }
                   }
                }
            }
            return true;
        }
        else 
           return false;
    }
    
    //done
    public function calcBlocked($tt_id)
    {
        $blcMan = new BlockedUserRepo();
        $result=$this->getTraineeRegisteredInTC($tt_id);
  
        if($result)
        {
            for($i=0;$i<count($result);$i++)
            {
                $user_id=$result[$i]['usr_id'];
    
                $totalMissed= $this->gettotalMissed($user_id);
                
                //get total blocked time 
                $blocked = $blcMan->fetchByUserId($user_id);
                if($blocked)
                    $total = count($blocked);
                else 
                    $total =0;
                if($total==floor($totalMissed/3))
                    ;
                else if($total<floor($totalMissed/3)) 
                    $res=$blcMan->save (0, $user_id, date('Y-m-d'), date('Y-m-d', strtotime("+16 week")), 7);  
            } 
            return true;
        }
        else 
            return false;
    }
    
    //done 
    public function getTrainer()
    {
        $userMan =new UserRoleRepo();
        $result = $userMan->fetchByRole_id(3);
        if($result)
        {for($i=0;$i<count($result);$i++)
        {    
            $userInfo[$i] = $this->getUserInfo($result[$i]['user_id']);
            $userInfo[$i]['user_id']=$result[$i]['user_id'];
            
        }
        return $userInfo;
        }
        else
            return false;
    }

    //done
        public function ApproveCertificate($reg_id,$cer_status)
    {
        $regMan=new RegistrationRepo();
        $result = $regMan->fetchByID($reg_id);
        $app=$regMan->save($reg_id, $result['usr_id'], $result['tt_id'], $result['registration_status'],$result['attendance_status'], $cer_status, $result['rate_flag']);  
        if($app)
            return true;
        else
            return false;
    }
    

    //done 
    public function getTraineeInfo($user_id)
    {
        $personaResult =$this->getUserInfo($user_id);
        $isUserBlock = $this->isBlock($user_id);
        if($isUserBlock)
        {
            $st= $this->getStatus(7);
            $personaResult['reg_status']= $st['status_arabic'];
        }
        else
        {
            $st= $this->getStatus(8);
            $personaResult['reg_status']= $st['status_arabic'];
        }
        $personaResult['missed']= $this->gettotalMissed($user_id);
        $personaResult['excused']= $this->gettotalExcused($user_id);
        $personaResult['attend']= $this->gettotalAttend($user_id);
        $personaResult['request']= $this->gettotalUnderProcessing($user_id);
        $personaResult['user_id']=$user_id;
        return $personaResult;
    } 

    //done 
    public function isBlock($user_id)
    {
        $bMan = new BlockedUserRepo();
        $qr = "SELECT * FROM blockeduser where user_id = $user_id and end_date > CURDATE()";
        $result = $bMan->fetchByQuery($qr);

        if($result)
            return $result;
        else 
            return false;
    }
    
    //done 
    public function getUserInfoByUqu($uqu)
    {
        $personaMan= new PersonaRepo();
        $user = new UserRepo();
    
        $persona = $personaMan->fetchByUqu_id($uqu);
        if($persona)
        {
            $result = $user->fetchByPersona_id($persona['id']);
            if($result)
            {
                if(count($result)==1)
                {
                    $result = $this->getUserInfo($result[0]['id']);
                    return $result;
                }
                else
                {
                   for($i=0;$i<count($result);$i++)
                   {
                       if($this->isTrainee($result[$i]['id']))
                       {
                            $result = $this->getUserInfo($result[$i]['id']);
                            return $result;
                       }
                   }
                }
            }
        }
        else 
            return false;
    }
    //done 
    public function RegisterTraineeInTC($userId,$tt_id,$sid)
    {
        $regMan=new RegistrationRepo();
        $isRegistered=$this->IsTraineeRegistered($userId, $tt_id);
        if(!$isRegistered)
        {    $result=$regMan->save(0, $userId, $tt_id, $sid,2, 0, 0);
        if($result)
            return true;
        else 
            return false;
        }
        else {
            return "-1";
        }
    }
    //done
    public function IsTraineeRegistered($te_id,$tt_id)
    {
        $tReg=new RegistrationRepo();
        $result=$tReg->fetchByQuery('SELECT * FROM `registration` WHERE `usr_id`='.$te_id.' AND `tt_id`='.$tt_id);
        if($result)
            return $result;
        else
            return false;
    }
    
    //done
    public function addTrainer($usrID,$resumeDir,$signtureDir)
    {
        $user = new UserRepo();
        $userRole = new UserRoleRepo();
        $userResult= $user->fetchById($usrID);
        $personaMan= new PersonaRepo();
        $result=$personaMan->fetchById($userResult['persona_id']);
        $saveResult=$personaMan->save($result['id'], $result['uqu_id'], $result['ar_name'], $result['eng_name'], $result['contact_phone'], $result['department'], $resumeDir, $signtureDir, $result['qualification'], $result['major'], $result['special'], $result['rank'],$result['gender'],$result['nationality']);
        if($saveResult)
        {
            $isTrainer = $this->isTrainer($usrID);
            if(!$isTrainer)
                $resultRole= $userRole->save(0, $usrID, 3);
            return true;
        }
        else 
            return false;
    }
    
    //done
    public function isTrainer($user_id)
    {
        $user = new UserRoleRepo();
        $role = new SysRoleRepo();
        $result = $user->fetchByUser_id($user_id);
     
        for($i=0;$i<count($result);$i++)
        {
            $roleResult= $role->fetchById($result[$i]['role_id']);
            if($roleResult['role_code']=='TR')
                return true;
        }
        return false;
    }
    
    //done
    public function isTrainee($user_id)
    {
        $user = new UserRoleRepo();
        $role = new SysRoleRepo();
        $result = $user->fetchByUser_id($user_id);
      
        for($i=0;$i<count($result);$i++)
        {
            $roleResult= $role->fetchById($result[$i]['role_id']);
            if($roleResult['role_code']=='TE')
                return true;
        }
        return false;
    }
    
    //done
    public function addHandoutOnly($tname,$tr_ho,$te_ho,$pres,$sci_ch,$addDate,$sid,$userId)
    {
        $ho_req = new HandoutReqRepo();        
        $ho_result=$ho_req->save(0,$tname ,$tr_ho, $te_ho, $pres, $sci_ch,$addDate,$sid,$userId);
        if($ho_result)
            return $ho_result;
        else 
            return false;
    }
    
    //done 
    public function getTCRequestsOfTrainer($user_id)
    {
        $ttMan= new TimetableRepo();
        $tcMan = new TrainingCourseModule();
        $result=$ttMan->fetchByQuery("select id from timetable where tr_id=".$user_id);
   
        $x=0;
        if($result)
            for($i=0;$i<count($result);$i++)
            {
                $tcResult[$i]=$tcMan->getSingleTrainingCourseInfo($result[$i]['id']); 
                if($tcResult[$i]['status']==9)
                    ;
                else
                {
                    $tc[$x]=$tcResult[$i];
                    $tc[$x]['sid']=$tcResult[$i]['status'];
                    $status = $this->getStatus($tcResult[$i]['sid']);
                    $tc[$x]['status']= $status['status_arabic'];
                    $x++;
                }
            }
        return $tc;
    }
    
    //DONE
    public function getHandoutRequestsOfTrainer($user_id)
    {
        $hoMan= new HandoutReqRepo();
        $result=$hoMan->fetchByTr_id($user_id);
        if($result)
        for($i=0;$i<count($result);$i++)
        {
            $status = $this->getStatus($result[$i]['sid']);
            $result[$i]['status']= $status['status_arabic'];
        }
        return $result;
    }
    
    //DONE 
    public function isTCAttendanceOpen($tt_id)
    {
        $ttMan= new TimetableRepo($tt_id);
        $result = $ttMan->fetchByQuery("SELECT * FROM timetable WHERE id=$tt_id and (`status`=10 or `status` = 11)");
      
        if($result)
        {   
            if( $result[0]['start_date']<=date("Y-m-d") && $result[0]['end_date']>=date("Y-m-d"))
            {   
                $start_at = $result[0]['start_at'];
                $duration = $result[0]['duration'];

                $start_at = date('H:i:s', strtotime($start_at));
                $endAt = date('H:i:s', strtotime($start_at . " +$duration hours")); 
                
                $today=date('Y-m-d H:i:s');
                $now =date('H:i:s', strtotime($today. " +3 hours"));
            
                if ($now > $start_at && $now <$endAt)
                    return "open"; 
                else if ($now > $endAt)
                    return "done"; 
                else if ($now <$start_at) 
                    return "notYet"; 
            }
            else 
                return "التحضير لهذه الدورة غير متاح";
        }
        else 
            return "التحضير لهذه الدورة غير متاح";
    }
    
    //done 
    public function takeAttendance($UsrId, $ttId, $attend_time)
    {
        require_once '../DAL/AttendanceRepo.php';
        $attMan = new AttendanceRepo();
        //check if already attended 
        $qr="SELECT * FROM attendance where attend_time = '$attend_time' and usr_id = $UsrId and timetable_id= $ttId";
        $result = $attMan->fetchByQuery($qr);
        if ($result) {
            return 1;
        } else {
            $result = $attMan->save(0, $UsrId, $ttId, $attend_time);
            if($result)
                return 0;
            else 
                return -1;
        }
    }
    
    //done 
    public function removeBlock($te_id)
    {
        $user = new BlockedUserRepo();
        $blockedResult = $this->isBlock($te_id);
        
        if($blockedResult)
            $result = $user->save($blockedResult[0]['id'], $blockedResult[0]['user_id'], $blockedResult[0]['start_date'], date('Y-m-d'));
        if($result)
            return true;
        else 
            return false;
    }
}
?>