<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TimetableRepo
 *
 * @author ahkhuzai
 */
class TimetableRepo {
    
    private $connect;
    public function __construct() { 
        require_once 'DB_Connector.php';
        $this->connect = new DB_Connector();
        $isRbConnected=R::testConnection();
        if(!$isRbConnected)
            return FALSE;
    }
    
    public function __deconstruct() {         
        $this->connect->closeConnection();
    }
    
    public function fetchByID($id)
    {
        $timetable = R::load('timetable', $id);         
        if(!$timetable->id)
            return false;
        else
            return $timetable;     
    } 
              
    public function fetchAll()
    {   
        $timetable = R::findAll('timetable');  
        if(!$timetable->id)
           return false;
        else
           return $timetable;        
    }
    
    public function delete($id)
    {   
        try{
            $timetable= $this->fetchById($id);
            $result=R::trash($timetable);       
            if($result){
                return $result;
            } else {
                return false;
            }
        }
        catch(Exception $e){
            return $e->getTraceAsString();
        }  
    }
    
    public function save($id,$tcId,$trId,$startDate, $endDate, $duration, $startAt, $location)
    {
        try{

            $timetable = R::findOne('timetable', 'id = ?', array($id));
            if($timetable->id)
            {
                $timetable->tc_id=$tcId;
                $timetable->tr_id=$trId;
                $timetable->start_date=$trAvg;
                $timetable->end_date=$tcAvg;
                $timetable->location=$tcAvg;
                $timetable->duration=$tcAvg;
                $timetable->start_at=$tcAvg;
                $result=R::store($timetable);
                if($result)
                    return true;
                else 
                    return false;
            }
            else 
            {
                $timetable=R::dispense('timetable');
                
                $timetable->tc_id=$tcId;
                $timetable->tr_id=$trId;
                $timetable->start_date=$trAvg;
                $timetable->end_date=$tcAvg;
                $timetable->location=$tcAvg;
                $timetable->duration=$tcAvg;
                $timetable->start_at=$tcAvg;
                
                $result=R::store($timetable);
                if($result)
                    return $result;
                else 
                    return false;
            }
        }catch(Exception $e){
            return $e->getTraceAsString();
        }
    }
}
?>