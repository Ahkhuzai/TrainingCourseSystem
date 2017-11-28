<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainingCourse
 *
 * @author ahkhuzai
 */
require_once 'TrainingCourseRepo.php';
require_once 'TimetableRepo.php';
require_once 'HandoutTcRepo.php';
require_once 'StatusRepo.php';
require_once 'RateDRepo.php';
require_once 'RegistrationRepo.php';
require_once 'PersonaRepo.php';
require_once 'ProgramRepo.php';
require_once 'HandoutReqRepo.php';

class TrainingCourse {
    
    public function addTraining($tt_id,$usrID,$pid,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg,$tr_avg)
    {
        $trMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();
        $hoMan=new HandoutTcRepo();
        if ($tt_id > 0) {
            $result = $ttMan->fetchByID($tt_id);
            $trMan->save($result['tc_id'], $Tname, $Tgoals, $Tabstract,$pid);
            $result= $ttMan->save($tt_id, $result['tc_id'], $usrID, $Tstart, $Tend, $Thours, $startAt, $location,$addDate,$Tcapacity, $Tstatus, $Tavailable_seat,$tr_avg,$tc_avg);
            $allhout=$hoMan->fetchAll();
            $allhout= array_values($allhout);   
            //try to get handout ids
            for($i=0;$i<count($allhout);$i++)
            {
                if($allhout[$i]['tt_id']==$tt_id)
                    $ho_id=$allhout[$i]['id'];
            }
            
            $re=$hoMan->save($ho_id, null, null, $handoutDir, null, $tt_id);
        }
        else 
        {
            $tcId=$trMan->save(0, $Tname, $Tgoals, $Tabstract,$pid);
            $result= $ttMan->save(0, $tcId, $usrID, $Tstart, $Tend, $Thours, $startAt, $location,$addDate,$Tcapacity, $Tstatus, $Tavailable_seat,$tr_avg,$tc_avg);
            $re=$hoMan->save(0, null, null, $handoutDir, null, $result);
        }
        
        if($re)     
            return true;
        else 
            return false;
        
    }
    
    public function getOldTrainingByUserID($usrId)
    {   
        try{
            $trMan=new TrainingCourseRepo();
            $ttMan=new TimetableRepo();
            $j=0;
            $today=date("Y-m-d");
            $all_tt= $ttMan->fetchAll();
            $all_tt= array_values($all_tt);   
            //find tc for this user 
            $j=0;
            for($i=0;$i<count($all_tt);$i++)
            {
                if($all_tt[$i]['tr_id']==$usrId && $all_tt[$i]['end_date']<=$today && $all_tt[$i]['status']==2)
                {
                    $all_userTt[$j]=$all_tt[$i];
                    $j++;
                }
            }

            //get tc details

            for($i=0;$i<count($all_userTt);$i++)
            {
                $all_userTc[$i]=$trMan->fetchByID($all_userTt[$i]['tc_id']);
            }
            for($i=0;$i<count($all_userTt);$i++)
            {

              $tc[] = array(
                    'id'=>$all_userTt[$i]['id'],
                    'name'=>$all_userTc[$i]['name'],
                    'start_date' => $all_userTt[$i]['start_date']        
            );        
            }      
            return $tc;
        }catch(Exception $e){
        return $e->getTraceAsString();
        }
    }

    public function getTrainingRequestByUserID($usrId)
    {
        try{
            $trMan=new TrainingCourseRepo();
            $ttMan=new TimetableRepo();
            $sMan=new StatusRepo();

            $all_tt= $ttMan->fetchAll();
            $all_tt= array_values($all_tt);
            //find tc for this user 
            $j=0;

            for($i=0;$i<count($all_tt);$i++)
            {
                if($all_tt[$i]['tr_id']==$usrId)
                {
                    $all_userTt[$j]=$all_tt[$i];
                    $j++;
                }
            }
            //get tc details
            for($i=0;$i<count($all_userTt);$i++)
            {
                $all_userTc[$i]=$trMan->fetchByID($all_userTt[$i]['tc_id']);
            }
            //get status value; 
            for($i=0;$i<count($all_userTt);$i++)
            {
                $all_userSt[$i]=$sMan->fetchByID($all_userTt[$i]['status']);
            }

            //create the array for all required information;

            for($i=0;$i<count($all_userTt);$i++)
            {
                switch($all_userSt[$i]['status'])
                {
                    case 'Processing':{$status="تحت الدراسة" ;break;}
                    case 'Accepted':{$status="مقبول" ;break;    } 
                    case 'Rejected':{$status="مرفوض" ;break;}
                    case 'Incomplete':{$status="غير مكتمل" ;break; }
                }

                $tc[] = array(
                        'id'=>$all_userTt[$i]['id'],
                        'name'=>$all_userTc[$i]['name'],
                        'sid' =>$all_userTt[$i]['status'] ,
                        'status' => $status,
                        'add_date' => $all_userTt[$i]['add_date']
            );        
            }      

            return $tc;
        }catch(Exception $e)
        {
            return $e->getTraceAsString();
        }
    }
    
    public function getSingleTrainingCourseInfo($tt_id)
    {
        $tcMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();
        $sMan=new StatusRepo();
        $tt=$ttMan->fetchByID($tt_id);       
        $tc=$tcMan->fetchByID($tt['tc_id']);  
        $status=$sMan->fetchByID($tt['status']);
         switch($status['status'])
        {
            case 'Processing':{$status['status']="تحت الدراسة" ;break;}
            case 'Accepted':{$status['status']="مقبول" ;break;    } 
            case 'Rejected':{$status['status']="مرفوض" ;break;}
            case 'Missed':{$status['status']="غائب" ;break;}
            case 'Excused':{$status['status']="معتذر" ;break;}
            case 'Incomplete':{$status['status']="غير مكتمل" ;break; }
        }
        $result=array(
            'name'=>$tc['name'],
            'abstract'=>$tc['abstract'],
            'sid'=>$tt['status'],
            'goals'=>$tc['goals'],
            'start_date'=>$tt['start_date'],
            'end_date'=>$tt['end_date'],
            'add_date'=>$tt['add_date'],
            'status'=>$status['status'],
            'duration'=>$tt['duration'],
            'tr_total_avg_rate'=>$tt['tr_total_avg_rate'],
            'tc_total_avg_rate'=>$tt['tc_total_avg_rate']
        );        
        return $result;
    }
    
    public function getSingleTrainingCourseRate($tt_id)
    {
        $rdMan=new RateDRepo();
        $rateD=$rdMan->fetchAll();
        $rateD = array_values($rateD);
        
        //get rateD for ttid
        
        $j=0;
        for($i=0;$i<count($rateD);$i++)
        {
            if ($rateD[$i]['tt_id'] == $tt_id) {
                $tcRate[$j] = $rateD[$i];
                $j++;
            }
        }
        
        //Create array for chart 
        $total_voter= count($tcRate);
        $total_place=0;
        $total_presentation=0;
        $total_orgnization=0;
        $total_trainer=0;
        $total_program=0;
               
        
        //calculate avg for all voters value
        for($i=0;$i<$total_voter;$i++)
        {
            $total_place+=$tcRate[$i]['place_rate'];
            $total_presentation+=$tcRate[$i]['presentation_rate'];
            $total_orgnization+=$tcRate[$i]['organizing_rate'];
            $total_trainer+=$tcRate[$i]['presenter_rate'];
            $total_program+=$tcRate[$i]['training_program_rate']; 
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
    
    public function getTrainingWaitingForCertificate($usrId)
    {
        $trMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();
        $j=0;
        $weekFromToday=date("Y-m-d", strtotime("+1 week"));
        
        $all_tt= $ttMan->fetchAll();
        $all_tt= array_values($all_tt);
      
        //find tc for this user 
        $j=0;
        
        for($i=0;$i<count($all_tt);$i++)
        {
            if($all_tt[$i]['tr_id']==$usrId && $all_tt[$i]['end_date']<=$weekFromToday && $all_tt[$i]['status']==2)
            {
                $all_userTt[$j]=$all_tt[$i];
                $j++;
            }
        }
       
        //get tc details
      
        for($i=0;$i<count($all_userTt);$i++)
        {
            $all_userTc[$i]=$trMan->fetchByID($all_userTt[$i]['tc_id']);
        }
        for($i=0;$i<count($all_userTt);$i++)
        {
            
          $tc[] = array(
                'id'=>$all_userTt[$i]['id'],
                'name'=>$all_userTc[$i]['name'],
                'start_date' => $all_userTt[$i]['start_date']        
	);        
        }      
        return $tc;
    }
    
    public function getRegisterTrainee($tt_id)
    {
        $personaMan=new PersonaRepo();
        $registerMan=new RegistrationRepo();
        
        $allPersona=$personaMan->fetchAll();
        $allRegister=$registerMan->fetchAll();
        
        $allRegister= array_values($allRegister);
        $allPersona= array_values($allPersona);
        //get users id's
        $j=0;
        for($i=0;$i<count($allRegister);$i++)
        {
            if($allRegister[$i]['tt_id']==$tt_id && $allRegister[$i]['registration_status']==2)
            {
                $tcRegister[$j]=$allRegister[$i];
                $j++;
            }
        }
       
        //get trainee information
        $x=0;
        for($i=0;$i<count($tcRegister);$i++)
        {
            for($j=0;$j<count($allPersona);$j++)
            {
                if($tcRegister[$i]['usr_id']==$allPersona[$j]['user_id'])
                {
                    $trainee[$x]=$allPersona[$j];
                    $x++;
                }
            }
        }
        $trainee= array_values($trainee);
        for($i=0;$i<count($trainee);$i++)
        {
        $tr[$i] = array(
            'id'=>$tcRegister[$i]['id'],
            'tt_id'=>$tcRegister[$i]['tt_id'],
            'usr_id'=>$tcRegister[$i]['usr_id'],
            'registration_status'=>$tcRegister[$i]['registration_status'],
            'name'=>$trainee[$i]['ar_name'],
            'certificateApprove' => $tcRegister[$i]['certificate_approved'],
            'rank'=>$trainee[$i]['rank'],
            'major'=>$trainee[$i]['major'],
            'department'=>$trainee[$i]['department'],
	); 
        }    
        return $tr; 
    }
    
    public function approveCertificate($reg_id,$cerApprove)
    {
        $registerMan=new RegistrationRepo();
        $record=$registerMan->fetchByID($reg_id);    
        $result=$registerMan->save($reg_id, $record['usr_id'], $record['tt_id'], $record['registration_status'], $cerApprove);  
        return $result;
    }
    
    public function deleteCourse($tt_id)
    {
        $tcMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();
        $tt=$ttMan->fetchByID($tt_id);       
        $tc=$tcMan->fetchByID($tt['tc_id']);  
        $result=$tcMan->delete($tc['id']);
        return $result;
    }
    
    public function addHandoutOnly($tname,$tr_ho,$te_ho,$pres,$sci_ch,$add_date,$sid,$tr_id)
    {
        $ho_req = new HandoutReqRepo();        
        $ho_result=$ho_req->save(0,$tname ,$tr_ho, $te_ho, $pres, $sci_ch,$add_date,$sid,$tr_id);
        if($ho_result)
            return $ho_result;
        else 
            return false;
    }
    
      public function getHORequestByUserID($usrId)
    {
        
        $hoMan=new HandoutReqRepo();
        $sMan=new StatusRepo();
        
        $all_ho= $hoMan->fetchAll();
        $all_ho= array_values($all_ho);
        //find tc for this user 
        $j=0;
        for($i=0;$i<count($all_ho);$i++)
        {
            if($all_ho[$i]['tr_id']==$usrId)
            {
                $all_userho[$j]=$all_ho[$i];
                $j++;
            }
        }
       
        //get status value; 
        for($i=0;$i<count($all_userho);$i++)
        {
            $all_userSt[$i]=$sMan->fetchByID($all_userho[$i]['sid']);
        }
        
        //create the array for all required information;
        
        for($i=0;$i<count($all_userho);$i++)
        {
            switch($all_userSt[$i]['status'])
            {
                case 'Processing':{$status="تحت الدراسة" ;break;}
                case 'Accepted':{$status="مقبول" ;break; } 
                case 'Rejected':{$status="مرفوض" ;break;}
                
            }

            $tc[] = array(
                    'id'=>$all_userho[$i]['id'],
                    'name'=>$all_userho[$i]['name'],
                    'sid' =>$all_userho[$i]['sid'] ,
                    'status' => $status,
                    'add_date' => $all_userho[$i]['add_date']
	);        
        }      
    
        return $tc;
    }
    
    
    public function getAvailableProgram()
    {
        $program = new ProgramRepo();
        
        $result= $program->fetchAll();
        $result= array_values($result);
        for($i=0;$i<count($result);$i++)
        {
        $programArray[] = array(
                    'id'=>$result[$i]['id'],
                    'name'=>$result[$i]['name'],
                    'hours' =>$result[$i]['hours'] ,
	);  
        }
        
        return $programArray;
    }
    
    
    public function getSingleProgram($pid)
    {
        $program = new ProgramRepo();
        $result= $program->fetchById($pid);
        return $result;
    }
    
    Public function getProgramTrainingCourse($pid)
    {
        $tcMan = new TrainingCourseRepo();
        $personaMan = new PersonaRepo();
        $allTc = $tcMan->fetchAll();
        $allTc= array_values($allTc);
        for($i=0;$i<count($allTc);$i++)
        {
            if($allTc[$i]['pid'] == $pid)
                $program_tc[$i]= $allTc[$i];      
        }
        
        $ttMan=new TimetableRepo();
        $all_tt=$ttMan->fetchAll();
        $all_tt= array_values($all_tt);
      
        for($i=0;$i<count($program_tc);$i++)
            if($program_tc[$i]['id'] == $all_tt[$i]['tc_id'])
                $time_Table[$i]=$all_tt[$i];
        $time_Table= array_values($time_Table);
        
        for ($i = 0; $i < count($time_Table); $i++) {
            if ($time_Table[$i]['start_date'] >= date('y-m-d'))
                $currentTt[$i] = $time_Table[$i];
        }

        
        $currentTt= array_values($currentTt);
        
        $allPersona = $personaMan->fetchAll();
        $allPersona= array_values($allPersona);
        
        $x=0;
        for($i=0;$i<count($currentTt);$i++)
        {
            for($j=0;$j<count($allPersona);$j++)
            {
                if($currentTt[$i]['tr_id']==$allPersona[$j]['user_id'])
                {
                    $trainer[$x]=$allPersona[$j];
                    $x++;
                }
            }
        }
        $trainer= array_values($trainer);
        
        for($i=0;$i<count($currentTt);$i++)
        {  
            $programTrainingCourse [$i] = array(
                'id'=>$currentTt[$i]['id'],
                'name'=>$program_tc[$i]['name'],
                'start_date' => $currentTt[$i]['start_date'],
                'presenter'=> $trainer[$i]['rank'].'/'.$trainer[$i]['ar_name'],
                'time'=> $currentTt[$i]['start_at'],
                'duration'=> $currentTt[$i]['duration'],
                'location'=>$currentTt[$i]['location'],
                'capacity'=>$currentTt[$i]['capacity'],
            );
        }       
        return $programTrainingCourse;
   
    }
    
    public function registerForProgram($userId,$pid)
    {
        $result=$this->getProgramTrainingCourse($pid);
        $regMan = new RegistrationRepo();
        $allRegestration=$regMan->fetchAll();
        
        //check if already register
        for($i=0;$i<count($result);$i++)
            if($result[$i]['id']==$allRegestration[$i]['tt_id'] && $allRegestration[$i]['usr_id']==$userId)
                return "-1";
        for($i=0;$i<count($result);$i++)
            $done[$i]=$regMan->save(0, $userId, $result[$i]['id'], 1, 0);
        if($done)
            return 'true';
        else
            return 'false';
    }
    
    public function getTrainingCourse()
    {
        $tcMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();  
        $personaMan = new PersonaRepo();
        $result=$ttMan->fetchAll();
        $result= array_values($result);
        for($i=0;$i<count($result);$i++)
        {   
            if($result[$i]['start_date'] >= date('Y-mm-d'))
                $available_tt[$i]=$result[$i];
        }   
        
        $available_tt= array_values($available_tt);
        
        //get tc information 
        for($i=0;$i<count($available_tt);$i++)
        {
            $available_tc[$i]= $tcMan->fetchByID($available_tt[$i]['tc_id']);
        }
        $available_tc= array_values($available_tc);

        //get trainer info 
        $allPersona = $personaMan->fetchAll();
        $allPersona= array_values($allPersona);
        
        $x=0;
        for($i=0;$i<count($available_tt);$i++)
        {
            for($j=0;$j<count($allPersona);$j++)
            {
                if($available_tt[$i]['tr_id']==$allPersona[$j]['user_id'])
                {
                    $trainer[$x]=$allPersona[$j];
                    $x++;
                }
            }
        }
        $trainer= array_values($trainer);
        //create the array
        for($i=0;$i<count($available_tt);$i++)
        {
            $TrainingCourse [$i] = array(
                'id'=>$available_tt[$i]['id'],
                'name'=>$available_tc[$i]['name'],
                'start_date' => $available_tt[$i]['start_date'],
                'presenter'=> $trainer[$i]['rank'].'/'.$trainer[$i]['ar_name'],
                'time'=> $available_tt[$i]['start_at'],
                'duration'=> $available_tt[$i]['duration'],
                'location'=>$available_tt[$i]['location'],
                'capacity'=>$available_tt[$i]['capacity'],
            );
        }
        return $TrainingCourse;
    } 
    
    public function registerForTC($userId,$tt_id,$rid)
    {
        $regMan = new RegistrationRepo();
        $allRegestration=$regMan->fetchAll();
        $allRegestration= array_values($allRegestration);
        //check if already register
        for ($i = 0; $i < count($allRegestration); $i++) {
            if ($tt_id == $allRegestration[$i]['tt_id'] && $allRegestration[$i]['usr_id'] == $userId && $allRegestration[$i]['registration_status'] != 5)
                return "-1";
        }
        $done=$regMan->save($rid, $userId, $tt_id, 1, 0);
        if($done)
            return 'true';
        else
            return 'false';
    }
    
    public function getTrainingRegisteredByUserID($usrID)
    {
        $regMan = new RegistrationRepo();
        $sMan=new StatusRepo();
        $allRegestration=$regMan->fetchAll();
        $allRegestration= array_values($allRegestration);
        //check if already register
        for ($i = 0; $i < count($allRegestration); $i++) {
            if ($allRegestration[$i]['usr_id'] == $usrID) {
                $reg_user[$i] = $allRegestration[$i];           
            }
        }
        
        //get course information bu tt_id
        for($i=0;$i<count($reg_user);$i++)
        {
            $req_tc[$i]=$this->getSingleTrainingCourseInfo($reg_user[$i]['tt_id']);
            $status=$sMan->fetchByID($reg_user[$i]['registration_status']);
            switch($status['status'])
            {
                case 'Processing':{$status['status']="تحت الدراسة" ;break;}
                case 'Accepted':{$status['status']="مقبول" ;break;    } 
                case 'Rejected':{$status['status']="مرفوض" ;break;}
                case 'Missed':{$status['status']="غائب" ;break;}
                case 'Excused':{$status['status']="معتذر" ;break;}
                case 'Incomplete':{$status['status']="غير مكتمل" ;break; }
            }
            $req_tc[$i]['registration_status']=$status['status'];
            $req_tc[$i]['sid']=$reg_user[$i]['registration_status'];
            $req_tc[$i]['id']=$reg_user[$i]['tt_id'];
            $req_tc[$i]['rid']=$reg_user[$i]['id'];
            $req_tc[$i]['cer_app']=$reg_user[$i]['certificate_approved'];
        }
    
        return $req_tc;
    }
    
    public function getHandOutForTc($tt_id)
    {
        $hoMan=new HandoutTcRepo();
        $all_ho=$hoMan->fetchAll();
        $all_ho= array_values($all_ho);
        
        for($i=0;$i<count($all_ho);$i++)
            if($all_ho[$i]['tt_id']==$tt_id)
                return "http://localhost:81/rtp_Design/".$all_ho[$i]['presentation_dir'];
        
    }
    
    public function apologizeForTc($usrId,$tt_id)
    {
        $regMan = new RegistrationRepo();
        $allRegestration=$regMan->fetchAll();
        $allRegestration= array_values($allRegestration);
        //check if already register
        for ($i = 0; $i < count($allRegestration); $i++) {
            if ($tt_id == $allRegestration[$i]['tt_id'] && $allRegestration[$i]['usr_id'] == $usrId)
                $r_id=$allRegestration[$i]['id'];
        } 
        $result=$regMan->save($r_id, $usrId, $tt_id, 5, 0);
        return $result;
    }
    
    public function deleteReg($rid)
    {
        $regMan = new RegistrationRepo();
        $result= $regMan->delete($rid);
        return $result;
    }
    
    public function getOldReqTrainingByUserID($usrID)
    {
        $result = $this->getTrainingRegisteredByUserID($usrID);
        $x=0;
        for ($i = 0; $i < count($result); $i++) 
            if ($result[$i]['sid'] == 2 && $result[$i]['end_date'] <= date('Y-mm-d')){  
                $oldTc[$x] = $result[$i];
                $oldTc[$x]['cer_app']=$result[$i]['cer_app'];    
                $x++;
        }
        return $oldTc;
    }
}
