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
require_once 'Assist/Config/RedBeanPHP4_3_4/rb.php';
require_once 'Assist/Config/config.php';

class RateRepo {
    

    public function __construct() { 
        try {
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function fetchByID($id)
    {
        try {
            $rate = R::load('rate', $id);

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
            $rate = R::findAll('rate');

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
            $result = R::exec('DELETE FROM rate WHERE id = :id', array('id' => $id));

            if ($result) {
                return $result;
            } else {
                return false;
            }
        } catch (Exception $exc) {
             return $exc->getTraceAsString();
        }
             
    }
    
    public function save($rId,$tcId,$trId,$tcAvg,$trAvg)
    {      
        
        if($rId>0)
        {
            try {
                $rate = R::findOne('rate', 'id = ?', array($rId));
                $rate->tc_id = $tcId;
                $rate->tr_id = $trId;
                $rate->tr_total_avg_rate = $trAvg;
                $rate->tc_total_avg_rate = $tcAvg;
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
                $rate = R::dispense('rate');
                $rate->tc_id = $tcId;
                $rate->tr_id = $trId;
                $rate->tr_total_avg_rate = $trAvg;
                $rate->tc_total_avg_rate = $tcAvg;
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
