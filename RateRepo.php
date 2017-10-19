<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RateRepo
 *
 * @author ahkhuzai
 */
class RateRepo {
    
    function __construct() { 
        require_once 'DB_Connector.php';
        $this->connect = new DB_Connector();
        $isRbConnected=R::testConnection();
        if(!$isRbConnected)
            return FALSE;
    }
    
    function __deconstruct() {         
        $this->connect->closeConnection();
    }
    
    public function fetchByID($id)
    {
        $rate = R::load('ratedetails', $id);         
        if(!$rate->id)
            return false;
        else
            return $rate;  
        
    } 
              
    public function fetchAll()
    {
        
        $rate = R::findAll('ratedetails');  
        if(!$rate->id)
           return false;
        else
           return $rate; 
         
    }
    
    public function delete($id)
    {
        
        try{
            $rate= $this->fetchById($id);
            $result=R::trash($rate);       
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
    
    
    
    
    
    
}

?>
