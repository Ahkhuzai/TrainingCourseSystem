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
require_once 'libs/RedBeanPHP4_3_4/rb.php';

        
class AttendanceRepo {
 
    public function __construct() { 
       
        try {
            include 'config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }        
    }
    
    public function fetchByID($id)
    {
        try {
            $timeattend = R::load('attendance', $id);
            if (!$timeattend['id'])
                return false;
            else
                return $timeattend;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    } 
              
    public function fetchAll()
    {   
        try {
            $timeattend = R::findAll('attendance');
            if (!$timeattend)
                return false;
            else
                return $timeattend;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();       
        }  
    }
    
    public function delete($id)
    {      
        try {
            $result = R::exec('DELETE FROM attendance WHERE id = :id', array('id' => $id));
            if ($result) {
                return $result;
            } else {
                return false;
            }
        } catch (Exception $exc) {
            return $exc->getTraceAsString();

        }
    
    }
    
    public function save($id,$UsrId,$ttId,$Date,$certificate_approved)
    {      
        if($id>0)
        {
            try {
                $timeattend = R::findOne('attendance', 'id = ?', array($id));
                $timeattend['usr_id'] = $UsrId;
                $timeattend['timetable_id'] = $ttId;
                $timeattend['date'] = $Date;
                $timeattend['certificate_approved'] = $certificate_approved;
                
                $result = R::store($timeattend);
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
                $timeattend = R::dispense('attendance');
                $timeattend['usr_id'] = $UsrId;
                $timeattend['timetable_id'] = $ttId;
                $timeattend['date'] = $Date;
                $timeattend['certificate_approved'] = $certificate_approved;
                $result = R::store($timeattend);
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