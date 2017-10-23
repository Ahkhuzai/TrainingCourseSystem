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
        try {
            $timetable = R::load('timetable', $id);

            if (!$timetable->id)
                return false;
            else
                return $timetable;

        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            RETURN FALSE;
        }
    
    } 
              
    public function fetchAll()
    {   
        try {
            $timetable = R::findAll('timetable');

            if (!$timetable)
                return false;
            else
                return $timetable;
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            RETURN FALSE;
        }
    }
    
    public function delete($id)
    {   
        
        try {
            $result = R::exec('DELETE FROM timetable WHERE id = :id', array('id' => $id));
            if ($result) {
                return $result;
            } else {
                return false;
            }
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            RETURN FALSE;
        }
              
    }
    
    public function save($id,$tcId,$trId,$startDate, $endDate, $duration, $startAt, $location)
    {
        
        
        if($id>0)
        {
            try {
                $timetable = R::findOne('timetable', 'id = ?', array($id));
                $timetable->tc_id = $tcId;
                $timetable->tr_id = $trId;
                $timetable->start_date = $startDate;
                $timetable->end_date = $endDate;
                $timetable->location = $location;
                $timetable->duration = $duration;
                $timetable->start_at = $startAt;
                $result = R::store($timetable);
                if ($result)
                    return true;
                else

                    return false;
            } catch (Exception $exc) {
                echo $exc->getMessage();
                RETURN FALSE;
            }
                }
        else 
        {
            try {
                $timetable = R::dispense('timetable');
                $timetable->tc_id = $tcId;
                 $timetable->tr_id = $trId;
                $timetable->start_date = $startDate;
                $timetable->end_date = $endDate;
                $timetable->location = $location;
                $timetable->duration = $duration;
                $timetable->start_at = $startAt;

                $result = R::store($timetable);
                if ($result)
                    return TRUE;
                else

                    return false;
            } catch (Exception $exc) {
                echo $exc->getMessage();
                RETURN FALSE;
            }
                }
        
    }
}
?>