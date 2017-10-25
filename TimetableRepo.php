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
require_once 'Assist/Config/RedBeanPHP4_3_4/rb.php';


class TimetableRepo {
    
    
    public function __construct() { 
        try {
            require_once 'Assist/Config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function fetchByID($id)
    {
        try {
            $timetable = R::load('timetable', $id);

            if (!$timetable['id'])
                return false;
            else
                return $timetable;

        } catch (Exception $exc) {
            return $exc->getTraceAsString();
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
            return $exc->getTraceAsString();
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
            return $exc->getTraceAsString();
        }             
    }
    
    public function save($id,$tcId,$trId,$startDate, $endDate, $duration, $startAt, $location)
    {   
        if($id>0)
        {
            try {
                $timetable = R::findOne('timetable', 'id = ?', array($id));
                $timetable['tc_id'] = $tcId;
                $timetable['tr_id'] = $trId;
                $timetable['start_date'] = $startDate;
                $timetable['end_date'] = $endDate;
                $timetable['location'] = $location;
                $timetable['duration'] = $duration;
                $timetable['start_at'] = $startAt;
                $result = R::store($timetable);
                if ($result)
                    return true;
                else

                    return false;
            } catch (Exception $exc) {
                return $exc->getTraceAsString();
            }
                }
        else 
        {
            try {
                $timetable = R::dispense('timetable');
                
                $timetable['tc_id'] = $tcId;
                $timetable['tr_id'] = $trId;
                $timetable['start_date'] = $startDate;
                $timetable['end_date'] = $endDate;
                $timetable['location'] = $location;
                $timetable['duration'] = $duration;
                $timetable['start_at'] = $startAt;

                $result = R::store($timetable);
                if ($result)
                    return $result;
                else
                    return false;
            } catch (Exception $exc) {
                return $exc->getTraceAsString();
            }
                }
        
    }
}
?>