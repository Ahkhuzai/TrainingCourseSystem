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
require_once 'libs/RedBeanPHP4_3_4/rb.php';


class RateDRepo {
    
   
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
            $rate = R::load('ratedetails', $id);

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
            $rate = R::findAll('ratedetails');

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
            $result = R::exec('DELETE FROM ratedetails WHERE id = :id', array('id' => $id));

            if ($result) {
                return $result;
            } else {
                return false;
            }
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function save($rdid,$tid,$usrId,$comment,$placeRate,$presenterRate,$presentationRate,$organizingRate,$trainingProgramRate)
    {
        
        if($rdid>0)
        {
            try {
                $rate = R::findOne('ratedetails', 'id = ?', array($rdid));
                $rate['tt_id'] = $tid;
                $rate['trainee_id'] = $usrId;
                $rate['comments'] = $comment;
                $rate['place_rate'] = $placeRate;
                $rate['presentation_rate'] = $presentationRate;
                $rate['presenter_rate'] = $presenterRate;
                $rate['organizing_rate'] = $organizingRate;
                $rate['training_program_rate'] = $trainingProgramRate;
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
                $rate = R::dispense('ratedetails');
                $rate['tt_id'] = $tid;
                $rate['trainee_id'] = $usrId;
                $rate['comments'] = $comment;
                $rate['place_rate'] = $placeRate;
                $rate['presentation_rate'] = $presentationRate;
                $rate['presenter_rate'] = $presenterRate;
                $rate['organizing_rate'] = $organizingRate;
                $rate['training_program_rate'] = $trainingProgramRate;
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
