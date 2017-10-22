<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StatusRepo
 *
 * @author ahkhuzai
 */
class StatusRepo {
    
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
        $status = R::load('registerstatus', $id);         
        if(!$status->id)
            return false;
        else
            return $status;  
        
    } 
              
    public function fetchAll()
    {   
        $status = R::findAll('registerstatus');  
        if(!$status->id)
           return false;
        else
           return $status;        
    }
    
    public function delete($id)
    {    
        try{
            $status= $this->fetchById($id);
            $result=R::trash($status);       
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
    
    public function save($id,$statusValue)
    {
        try{

            $status = R::findOne('registerstatus', 'id = ?', array($id));
            if($status->id)
            {
                $status->status=$statusValue;
                $result=R::store($status);
                if($result)
                    return true;
                else 
                    return false;
            }
            else 
            {
                $status=R::dispense('registerstatus');
                $status->status=$statusValue;
                $result=R::store($status);
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