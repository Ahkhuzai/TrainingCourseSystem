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
require_once 'StatusRepo.php';
require_once 'RateRepo.php';
require_once 'RateDRepo.php';
require_once 'RegistrationRepo.php';
require_once 'PersonaRepo.php';
class TrainingCourse {
    
    public function addTraining($usrID,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location)
    {
        $trMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();
        
        $tcId=$trMan->save(0, $Tname, $Tgoals, $Tabstract);
        $ttMan->save(0, $tcId, $usrID, $Tstart, $Tend, $Thours, $startAt, $location,$addDate,$Tcapacity, $Tstatus, $Tavailable_seat, $handoutDir);
    }
    public function getOldTrainingByUserID($usrId)
    {
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
    }

    public function getTrainingRequestByUserID($usrId)
    {
        
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
    }
    
    public function getSingleTrainingCourseInfo($tt_id)
    {
        $tcMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();
        $rMan=new RateRepo();
        $tt=$ttMan->fetchByID($tt_id);
        
        $tc=$tcMan->fetchByID($tt['tc_id']);
        
        
        $result=$rMan->fetchAll();
        $result= array_values($result);
        
        $j=0;
        for($i=0;$i<count($result);$i++)
        {
            if($result[$i]['tt_id']==$tt_id)
            {
                $rate[$j]=$result[$i];
                break;
            }
                
        }       
        $result=array(
            'name'=>$tc['name'],
            'start_date'=>$tt['start_date'],
            'duration'=>$tt['duration'],
            'tr_total_avg_rate'=>$rate[0]['tr_total_avg_rate'],
            'tc_total_avg_rate'=>$rate[0]['tc_total_avg_rate']
      
        );        
        return $result;
    }
    
    public function getSingleTrainingCourseRate($tt_id)
    {
        $rMan=new RateRepo();
        $rdMan=new RateDRepo();
        
        $Allrid=$rMan->fetchAll();
        $Allrid= array_values($Allrid);
        for($i=0;$i<count($Allrid);$i++)
        {
            if($Allrid[$i]['tt_id']==$tt_id)
                $rid=$Allrid[$i]['id'];
        }
        
   
        $rateD=$rdMan->fetchAll();
        $rateD = array_values($rateD);
        
        //get rateD for rid
        
        $j=0;
        for($i=0;$i<count($rateD);$i++)
        {
            if ($rateD[$i]['rate_id'] == $rid) {
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
            'name'=>$trainee[$i]['ar_name'],
            'certificateApprove' => $tcRegister[$i]['certificate_approved']       
	); 
        }
        
        return $tr;
        
    }
    
}
