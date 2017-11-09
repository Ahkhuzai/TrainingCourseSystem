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
class TrainingCourse {
    
    public function addTraining($usrID,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location)
    {
        $trMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();
        
        $tcId=$trMan->save(0, $Tname, $Tgoals, $Tabstract, $Tcapacity, $Tstatus, $Tavailable_seat, $handoutDir);
        $ttMan->save(0, $tcId, $usrID, $Tstart, $Tend, $Thours, $startAt, $location,$addDate);
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
            if($all_tt[$i]['tr_id']==$usrId && $all_tt[$i]['end_date']<=$today )
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
                'id'=>$all_userTt[$i]['tc_id'],
                'name'=>$all_userTc[$i]['name'],
                'start_date' => $all_userTt[$i]['start_date']
	);        
        }      
        return $tc;     
    }

    public function getTrainingRequestByUserID($usrId){
        
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
            $all_userSt[$i]=$sMan->fetchByID($all_userTc[$i]['status']);
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
                    'id'=>$all_userTt[$i]['tc_id'],
                    'name'=>$all_userTc[$i]['name'],
                    'sid' =>$all_userTc[$i]['status'] ,
                    'status' => $status,
                    'add_date' => $all_userTt[$i]['add_date']
	);        
        }      
    
        return $tc;
    }
    
    public function getSingleTrainingCourseInfo($tcid)
    {
        $trMan=new TrainingCourseRepo();
        $ttMan=new TimetableRepo();
        $rMan=new RateRepo();
        
        $tc=$trMan->fetchByID($tcid);
        $tt=$ttMan->fetchByID($tcid);
        
        $result=$rMan->fetchAll();
        $result= array_values($result);
        $j=0;
        for($i=0;$i<count($result);$i++)
        {
            if($result[$i]['tc_id']==$tcid)
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
}
