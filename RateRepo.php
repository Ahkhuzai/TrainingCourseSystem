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
            $rate = R::load('rate', $id);

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
            $rate = R::findAll('rate');

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
            $result = R::exec('DELETE FROM rate WHERE id = :id', array('id' => $id));

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
                //echo $exc->getTraceAsString();
                return false;
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
                //echo $exc->getTraceAsString();
                return false;
            }
        }
        
    }
    }

?>
