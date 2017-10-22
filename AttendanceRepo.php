<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AttendanceRepo
 *
 * @author ahkhuzai
 */
class AttendanceRepo {
   
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
        $timeattend = R::load('attendance', $id);         
        if(!$timeattend->id)
            return false;
        else
            return $timeattend;     
    } 
              
    public function fetchAll()
    {   
        $timeattend = R::findAll('attendance');  
        if(!$timeattend->id)
           return false;
        else
           return $timeattend;        
    }
    
    public function delete($id)
    {   
        try{
            $timeattend= $this->fetchById($id);
            $result=R::trash($timeattend);       
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
    
    public function save($id,$UsrId,$ttId,$Date)
    {
        try{

            $timeattend = R::findOne('attendance', 'id = ?', array($id));
            if($timeattend->id)
            {
                $timeattend->usr_id=$UsrId;
                $timeattend->timetable_id=$ttId;
                $timeattend->date=$Date;      
                $result=R::store($timeattend);
                if($result)
                    return $result;
                else 
                    return false;
            }
            else 
            {
                $timetable=R::dispense('attendance');    
                $timeattend->usr_id=$UsrId;
                $timeattend->timetable_id=$ttId;
                $timeattend->date=$Date;      
                $result=R::store($timeattend);
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