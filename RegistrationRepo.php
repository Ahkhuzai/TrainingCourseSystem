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
        $register = R::load('registration', $id);         
        if(!$register->id)
            return false;
        else
            return $register;     
    } 
              
    public function fetchAll()
    {   
        $register = R::findAll('registration');  
        if(!$register->id)
           return false;
        else
           return $register;        
    }
    
    public function delete($id)
    {   
        try{
            $register= $this->fetchById($id);
            $result=R::trash($register);       
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
    
    public function save($id,$UsrId,$tcId,$statusId)
    {
        try{

            $register = R::findOne('registration', 'id = ?', array($id));
            if($register->id)
            {
                $register->usr_id=$UsrId;
                $register->tc_id=$tcId;
                $register->registration_status=$statusId;      
                $result=R::store($register);
                if($result)
                    return $result;
                else 
                    return false;
            }
            else 
            {
                $register=R::dispense('registration');                    
                $register->usr_id=$UsrId;
                $register->tc_id=$tcId;
                $register->registration_status=$statusId;      
                $result=R::store($register);
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