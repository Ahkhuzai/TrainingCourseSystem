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
require_once 'PersonaRepo.php';
require_once 'HandoutTcRepo.php';
require_once 'HandoutReqRepo.php';
require_once 'RegistrationRepo.php';
require_once 'StatusRepo.php';

class TrainingCourse {
    
    public function getSingleTrainingCourseInfo($tt_id) {
        
        $ttMan = new TimetableRepo();
        $result = $ttMan->fetchByID($tt_id);
        
        $tcMan = new TrainingCourseRepo();
        $tcRsult = $tcMan->fetchByID($result['tc_id']);
        
        $pMan = new PersonaRepo();
        $personaResult = $pMan->fetchByUsr_id($result['tr_id']);
        
        $ho = new HandoutTcRepo();
        $hoResult = $ho->fetchByTt_id($tt_id);
        
        //create all result in one array 
        $result['tc_ar_name']=$tcRsult['name'];
        $result['tc_eng_name']=$tcRsult['eng_name'];
        $result['goals']=$tcRsult['goals'];
        $result['abstract']=$tcRsult['abstract'];
        $result['pid']=$tcRsult['pid'];       
        $result['tr_ar_name'] = $personaResult['ar_name'];
        $result['url'] = $hoResult['presentation_dir'];
        return $result;
        
    }
    
    public function getHandoutRequestInfo($ho_id)
    {
        $hrMan= new HandoutReqRepo();
        $result= $hrMan->fetchById($ho_id);       
        $pMan = new PersonaRepo();
        $personaResult = $pMan->fetchByUsr_id($result['tr_id']);   
        $result['tr_name'] = $personaResult['ar_name'];
        return $result;
    }
    
    public function getTraineeRegistredInTC($tt_id,$sid)
    {
        if($sid==0)
        {
            $regMan = new RegistrationRepo();
            
            $result = $regMan->fetchByTt_id($tt_id);
            $pMan = new PersonaRepo();
            //get trainee Information 
            
            for($i=0;$i<count($result);$i++)
            {
                $personaResult[$i] = $pMan->fetchByUsr_id($result[$i]['usr_id']);
                //get number of missed and appolgize;
                $personaResult[$i]['missed']=$this->gettotalMissed($result[$i]['usr_id']);
                $personaResult[$i]['excused']=$this->gettotalExcused($result[$i]['usr_id']);
                $personaResult[$i]['status']=$this->getStatus($result[$i]['registration_status']);
                $personaResult[$i]['sid']=$result[$i]['registration_status'];
                if($result[$i]['registration_status']==2)
                    $personaResult[$i]['boolstatus']=1;
                else
                    $personaResult[$i]['boolstatus']=0;
            }
            return $personaResult;
        }   
    }
    public function getStatus($sid)
    {
        $sMan = new StatusRepo();
        $result = $sMan->fetchByID($sid);
        switch($result['status'])
        {
            case 'Processing':{$status="تحت الدراسة" ;break;}
            case 'Accepted':{$status="مقبول" ;break;    } 
            case 'Rejected':{$status="مرفوض" ;break;}
            case 'Incomplete':{$status="غير مكتمل" ;break; }
            case 'Missed':{$status="غائب" ;break; }
            case 'Excused':{$status="معتذر" ;break; }
            case 'Blocked':{$status="محظور" ;break; }
            case 'Available':{$status="متاح" ;break; }
            case 'Complete':{$status="مكتمل" ;break; }
        }
        return $status;
    }
    
    public function gettotalMissed($usrId) {
        $regMan = new RegistrationRepo();
        $allRegister=$regMan->fetchByUsr_id($usrId);
        //get number of missed;
        $totalMiss=0;
        for($i=0;$i<count($allRegister);$i++)
        {
            if($allRegister[$i]['registration_status']==4)
                $totalMiss+=1;
        }
        return $totalMiss;
    }
    public function gettotalExcused($usrId) {
        $regMan = new RegistrationRepo();
        $allRegister=$regMan->fetchByUsr_id($usrId);
        //get number of appolgize;
        $totalAppo=0;
        for($i=0;$i<count($allRegister);$i++)
        {
            if($allRegister[$i]['registration_status']==5)
                $totalAppo+=1;
        }
        return $totalAppo;
    }
}
