<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of RegistrationRepo
 *
 * @author ahkhuzai
 */
require_once '../libs/RedBeanPHP4_3_4/rb.php';


class RegistrationRepo {
  

    public function __construct() { 
        try {
            include '../config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function fetchByID($id)
    {
        try {
            $register = R::load('registration', $id);
            if (!$register['id'])
                return false;
            else
                return $register;

        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function fetchByQuery($query)
    {       
        try {
            $register = R::getAll( $query );
            if (!$register)
                return false;
            else
                return $register;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByTt_id($tt_id)
    {       
        try {
            $register = R::getAll( 'select * from registration where tt_id ='.$tt_id );
            if (!$register)
                return false;
            else
                return $register;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByUsr_id($usr_id)
    {       
        try {
            $register = R::getAll( 'select * from registration where usr_id ='.$usr_id );
            if (!$register)
                return false;
            else
                return $register;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByRegStatus($registration_status)
    {       
        try {
            $register = R::getAll( 'select * from registration where registration_status ='.$registration_status );
            if (!$register)
                return false;
            else
                return $register;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByAttendStatus($attend_status)
    {       
        try {
            $register = R::getAll( 'select * from registration where attendance_status ='.$attend_status );
            if (!$register)
                return false;
            else
                return $register;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByCertificate_approve($certificate_approved)
    {       
        try {
            $register = R::getAll( 'select * from registration where certificate_approved ='.$certificate_approved );
            if (!$register)
                return false;
            else
                return $register;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    

              
    public function fetchAll()
    {   
        try {
            $register = R::findAll('registration');
            if (!$register)
                return false;
            else
                return $register;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function delete($id)
    {        
        try {
            $result = R::exec('DELETE FROM registration WHERE id = :id', array('id' => $id));
            if ($result) {
                return $result;
            } else {
                return false;
            }
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }         
    }
    
    public function save($id,$UsrId,$ttId,$regstatusId,$attstatusId,$certificate_approved,$rate_flag)
    {    
        
        if($id)
        {
            try {
                $register = R::findOne('registration', 'id = ?', array($id));
                $register['usr_id'] = $UsrId;
                $register['tt_id'] = $ttId;
                $register['certificate_approved'] = $certificate_approved;
                $register['registration_status'] = $regstatusId;
                $register['attendance_status'] = $attstatusId;
                $register['rate_flag'] = $rate_flag;
                $result = R::store($register);
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
                $register = R::dispense('registration');
                $register['usr_id'] = $UsrId;
                $register['tt_id'] = $ttId;
                $register['certificate_approved'] = $certificate_approved;
                $register['registration_status'] = $regstatusId;
                $register['attendance_status'] = $attstatusId;
                $register['rate_flag'] = $rate_flag;
                $result = R::store($register);
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