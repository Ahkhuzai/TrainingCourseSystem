<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RateValueRepo
 *
 * @author ahkhuzai
 */
class RateValueRepo {
    
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
        $rate = R::load('ratevalue', $id);         
        if(!$rate->id)
            return false;
        else
            return $rate;  
        
    } 
              
    public function fetchAll()
    {
        
        $rate = R::findAll('ratevalue');  
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
    
    public function save($rId,$ans,$value)
    {
        try{

            $rate = R::findOne('ratevalue', 'id = ?', array($rId));
            if($rate->id)
            {
                $rate->ans=$ans;
                $rate->value=$value;                
                $result=R::store($rate);
                if($result)
                    return true;
                else 
                    return false;
            }
            else 
            {
                $rate=R::dispense('ratevalue');
                $rate->ans=$ans;
                $rate->value=$value;                
                $result=R::store($rate);
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