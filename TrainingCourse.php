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
        
        $tt=$ttMan->fetchByID($tt_id);       
        $tc=$tcMan->fetchByID($tt['tc_id']);  
        
        $result=array(
            'name'=>$tc['name'],
            'abstract'=>$tc['abstract'],
            'goals'=>$tc['goals'],
            'start_date'=>$tt['start_date'],
            'end_date'=>$tt['end_date'],
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
    
}
