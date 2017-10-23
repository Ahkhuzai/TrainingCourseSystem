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
class RateDRepo {
    
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
            $rate = R::load('ratedetails', $id);

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
            $rate = R::findAll('ratedetails');

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
            $result = R::exec('DELETE FROM ratedetails WHERE id = :id', array('id' => $id));

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
    
    public function save($rdid,$rid,$usrId,$comment,$placeRate,$presenterRate,$presentationRate,$organizingRate,$trainingProgramRate)
    {
        
        if($rdid>0)
        {
            try {
                $rate = R::findOne('ratedetails', 'id = ?', array($rdid));
                $rate->rate_id = $rid;
                $rate->trainee_id = $usrId;
                $rate->comment = $comment;
                $rate->place_rate = $placeRate;
                $rate->presentation_rate = $presentationRate;
                $rate->presenter_rate = $presenterRate;
                $rate->organizing_rate = $organizingRate;
                $rate->trainingProgram_rate = $trainingProgramRate;
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
                $rate = R::dispense('ratedetails');
                $rate->rate_id = $rid;
                $rate->trainee_id = $usrId;
                $rate->comment = $comment;
                $rate->place_rate = $placeRate;
                $rate->presentation_rate = $presentationRate;
                $rate->presenter_rate = $presenterRate;
                $rate->organizing_rate = $organizingRate;
                $rate->trainingProgram_rate = $trainingProgramRate;
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
            
    }
}

?>
