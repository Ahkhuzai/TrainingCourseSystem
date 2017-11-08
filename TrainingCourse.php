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
require 'TrainingCourseRepo.php';
require 'TimetableRepo.php';
class TrainingCourse {
    
    public function addTraining($usrID,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location)
    {
        $trMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();
        
        $tcId=$trMan->save(0, $Tname, $Tgoals, $Tabstract, $Tcapacity, $Tstatus, $Tavailable_seat, $handoutDir);
        $ttMan->save(0, $tcId, $usrID, $Tstart, $Tend, $Thours, $startAt, $location,$addDate);
    }
    
}
