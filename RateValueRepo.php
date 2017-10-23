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
        try {
            $rate = R::load('ratevalue', $id);

            if (!$rate->id)
                return false;
            else
                return $rate;
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            return false;
        }        
    }               
    public function fetchAll()
    {  
        try {
            $rate = R::findAll('ratevalue');
            if (!$rate)
                return false;
            else
                return $rate;
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            return false;
        }        
    }   
    public function delete($id)
    { 
        try {
            $result = R::exec('DELETE FROM ratevalue WHERE id = :id', array('id' => $id));

            if ($result) {
                return $result;
            } else {
                return false;
            }
        } catch (Exception $exc) {
           // echo $exc->getTraceAsString();
            return false;
        }            
    }    
    public function save($rId,$ans,$value)
    {      
        if($rId>0)
        {
            try {
                $rate = R::findOne('ratevalue', 'id = ?', array($rId));
                $rate->ans = $ans;
                $rate->value = $value;

                $result = R::store($rate);
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
                $rate = R::dispense('ratevalue');
                $rate->ans = $ans;
                $rate->value = $value;

                $result = R::store($rate);
                if ($result)
                    return $result;
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