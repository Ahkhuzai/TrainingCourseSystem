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
require_once 'ProgramRepo.php';

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
        $result['url'] = $hoResult[0]['presentation_dir'];
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
                $personaResult[$i]['rid']=$result[$i]['id'];
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
            case 'Cleared':{$status="مسموح" ;break; }
            case 'Available':{$status="متاح" ;break; }
            case 'Complete':{$status="مكتمل" ;break; }
            case 'Approved':{$status="معتمد" ;break; }
            case 'Unavailable':{$status="غير متاح" ;break; }
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
    
    public function HandleTCRequest($tt_id,$type)
    {
        $ttMan=new TimetableRepo();
        $result = $ttMan->fetchByID($tt_id);
        if ($type == 1) {
            $resultSave = $ttMan->save($tt_id, $result['tc_id'], $result['tr_id'], $result['start_date'], $result['end_date'], $result['duration'], $result['start_at'], $result['location'], $result['add_date'], $result['capacity'],3, $result['available_seat'], $result['tc_total_avg_rate']);
            if($resultSave)
                return true;
            else 
                return false;
        }
        if ($type == 2) {
            $resultSave = $ttMan->save($tt_id, $result['tc_id'], $result['tr_id'], $result['start_date'], $result['end_date'], $result['duration'], $result['start_at'], $result['location'], $result['add_date'], $result['capacity'],2, $result['available_seat'], $result['tc_total_avg_rate']);
            if($resultSave)
                return true;
            else 
                return false;
        }
    }
    
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
    
    public function HandleTraineeRegister($reg_id,$reg_status)
    {
        $rgMan= new RegistrationRepo();
        $result=$rgMan->fetchByID($reg_id);
        $resultSave = $rgMan->save($reg_id, $result['usr_id'], $result['tt_id'], $reg_status,$result['certificate_approved'], $result['rate_flag']);
        if($resultSave)
            return true;
        else 
            return false;
        
    }
    
    public function closeRegister($tt_id)
    {
        $ttMan = new TimetableRepo();
        $result = $ttMan->fetchByID($tt_id);
        $resultSave = $ttMan->save($tt_id, $result['tc_id'], $result['tr_id'], $result['start_date'], $result['end_date'], $result['duration'], $result['start_at'], $result['location'], $result['add_date'], $result['capacity'], 12 , $result['available_seat'], $result['tc_total_avg_rate']);
        if($resultSave)
            return true;
        else
            return false;
    }
    
    public function getTrainer()
    {
        $personaMan =new PersonaRepo();
        $result = $personaMan->fetchByIsTrainer(1);
        return $result;
    }
    public function addTrainingCourse($tt_id,$usrId,$pid,$Tname,$Teng_name,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg,$type)
    {
        if($tt_id==0)
        {
            $tcMan = new TrainingCourseRepo();
            $ttMan = new TimetableRepo();
            $hoMan = new HandoutTcRepo();
            $tc_Id = $tcMan->save(0, $Tname, $Teng_name, $Tgoals, $Tabstract, $pid);
            $tt_id=$ttMan->save($tt_id, $tc_Id, $usrId, $Tstart, $Tend, $Thours, $startAt, $location, $addDate, $Tcapacity, $Tstatus, $Tavailable_seat, $tc_avg, $type);
            $ho_id = $hoMan->save(0, null, null, $handoutDir, null, $tt_id);
            if($ho_id>0)
                return true; 
            else 
                return false;
        }
        else {
            $tcMan = new TrainingCourseRepo();
            $hoMan = new HandoutTcRepo(); 
            //get tc_id,AND INFORMATION 
            $ttMan = new TimetableRepo();
            $result= $ttMan->fetchByID($tt_id);
            $tc_Id = $tcMan->save($result['tc_id'], $Tname, $Teng_name, $Tgoals, $Tabstract, $pid);
            $ttresult=$ttMan->save($tt_id, $result['tc_id'], $usrId, $Tstart, $Tend, $Thours, $startAt, $location, $addDate, $Tcapacity, $Tstatus, $Tavailable_seat, $tc_avg, $type);
            $result=$hoMan->fetchByTt_id($tt_id);
            $ho_id = $hoMan->save($result[0]['id'], $result[0]['ho_trainer_dir'], $result[0]['ho_trainee_dir'], $handoutDir, $result[0]['scientific_chapter_dir'], $tt_id);
            if($ho_id>0)
                return true; 
            else 
                return false; 
        }
        
    }
    
    public function getTcBySid($sid)
    {
        $ttMan = new TimetableRepo();
        $query='select timetable.id from timetable join trainingcourse where status='.$sid.' and start_date>=CURDATE() and timetable.tc_id=trainingcourse.id';
        $result = $ttMan->fetchByQuery($query);
        
        for($i=0;$i<count($result);$i++)
        {
            $tc[$i]=$this->getSingleTrainingCourseInfo($result[$i]['id']);
        }
        return $tc;
    }
    public function addTcToProgram($pid,$tc_id)
    {
        $tcMan=new TrainingCourseRepo();
        $result=$tcMan->fetchByID($tc_id);
        $saveResult=$tcMan->save($result['id'], $result['name'], $result['eng_name'], $result['goals'], $result['abstract'], $pid);
        return $saveResult;
    }
    public function AddProgram($name,$engname,$abstract,$goals,$hours,$tcId,$sid)
    {
        $ttMan=new TimetableRepo();
        $program=new ProgramRepo();
        $result= $program->save(0, $name, $engname, $goals, $abstract, $hours, $sid);
        $tc_id_array=explode('-', $tcId);
       
        if($result)
        {
            if(count($tc_id_array)>0)
                for ($i = 0; $i < count($tc_id_array); $i++) {
                    $tt=$ttMan->fetchByID($tc_id_array[$i]);
                    $tc_id=$tt['tc_id'];
                    $this->addTcToProgram($result,$tc_id);
                }
            return true;
        }
        else 
        {
            return false;   
        }  
    }
}
