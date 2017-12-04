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

require_once 'UserRepo.php';
require_once 'HandoutReqRepo.php';
require_once 'PersonaRepo.php';
require_once 'TimetableRepo.php';
require_once 'TrainingCourseRepo.php';
require_once 'RegistrationRepo.php';
class RegistrationModule {    

    public function getUserInfo($id)
    {
        $user = new UserRepo();
        $result=$user->fetchById($id);
        if($result)
            return $result;
        else 
            return false;
    }
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
    
    public function getHandoutRequests($sid)
    {
        $ho = new HandoutReqRepo();
        $tr = new PersonaRepo();
        $result = $ho->fetchBystatus_id($sid);   
        //get tr name 
        for($i=0;$i<count($result);$i++)
        {
            $user = $tr->fetchByUsr_id($result[$i]['tr_id']);
            $result[$i]['tr_name']=$user['ar_name'];       
        }
        if($result)
            return $result;
        else
            return false;
    }
    
    public function getTCRequests($sid)
    {
        $timetable = new TimetableRepo();
        $persona = new PersonaRepo();
        $trainingCourse = new TrainingCourseRepo();
        $timetable_result= $timetable->fetchBystatus_id($sid);
        
        for($i=0;$i<count($timetable_result);$i++)
        {
            $name=$persona->fetchByUsr_id($timetable_result[$i]['tr_id']);
            $tcname=$trainingCourse->fetchByID($timetable_result[$i]['tc_id']);
             
            $timetable_result[$i]['tr_name'] = $name['ar_name'];
            $timetable_result[$i]['tc_name'] = $tcname['name'];
        }
        return $timetable_result;
        
    }
    
    public function getTCRegister($sid)
    {
        $timetable = new TimetableRepo();
        $registration = new RegistrationRepo();
        $query="select timetable.id,trainingcourse.name,timetable.start_date  from timetable join trainingcourse  where timetable.start_date>=CURDATE() and timetable.tc_id = trainingcourse.id";
        $timeTableResult = $timetable->fetchByQuery($query);
        
        for ($i=0;$i<count($timeTableResult);$i++)
        {
            
            $timeTableResult[$i]['counts'] = count($registration->fetchByTt_id( $timeTableResult[$i]['id']));
        }
        if($timeTableResult)
           return $timeTableResult;
        else 
             return false;
        
    }
}
?>
