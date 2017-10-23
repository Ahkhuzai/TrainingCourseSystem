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
class RegistrationRepo {
  
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
            $register = R::load('registration', $id);
            if (!$register->id)
                return false;
            else
                return $register;

        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            return false;
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
            //echo $exc->getTraceAsString();
            return false;
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
            //echo $exc->getTraceAsString();
            return false;
        }         
    }
    
    public function save($id,$UsrId,$tcId,$statusId)
    {    
        
        if($id)
        {
            try {
                $register = R::findOne('registration', 'id = ?', array($id));
                $register->usr_id = $UsrId;
                $register->tc_id = $tcId;
                $register->registration_status = $statusId;

                $result = R::store($register);
                if ($result)
                    return true;
                else
                    return false;
            } catch (Exception $exc) {
                //echo $exc->getTraceAsString();
                return false;
            }
                }
        else 
        {
            try {
                $register = R::dispense('registration');
                $register->usr_id = $UsrId;
                $register->tc_id = $tcId;
                $register->registration_status = $statusId;
                $result = R::store($register);
                if ($result)
                    return true;
                else
                    return false;
            } catch (Exception $exc) {
                //echo $exc->getTraceAsString();
                return false;
            }
        }
        
    }
}
?>