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
require_once 'libs/RedBeanPHP4_3_4/rb.php';


class RegistrationRepo {
  

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
            $register = R::load('registration', $id);
            if (!$register['id'])
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
    
    public function save($id,$UsrId,$ttId,$statusId)
    {    
        
        if($id)
        {
            try {
                $register = R::findOne('registration', 'id = ?', array($id));
                $register['usr_id'] = $UsrId;
                $register['tt_id'] = $ttId;
                $register['registration_status'] = $statusId;

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
                $register['registration_status'] = $statusId;
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