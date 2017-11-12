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
require_once 'libs/RedBeanPHP4_3_4/rb.php';


class RateValueRepo {  
   
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
            $rate = R::load('ratevalue', $id);

            if (!$rate['id'])
                return false;
            else
                return $rate;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
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
            return $exc->getTraceAsString();
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
           return $exc->getTraceAsString();
        }            
    }    
    public function save($rId,$ans,$value)
    {      
        if($rId>0)
        {
            try {
                $rate = R::findOne('ratevalue', 'id = ?', array($rId));
                $rate['ans'] = $ans;
                $rate['value'] = $value;

                $result = R::store($rate);
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
                $rate = R::dispense('ratevalue');
                $rate['ans'] = $ans;
                $rate['value'] = $value;

                $result = R::store($rate);
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