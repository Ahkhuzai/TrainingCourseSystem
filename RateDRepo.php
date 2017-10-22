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
    
    public function save($rdid,$rid,$usrId,$comment,$placeRate,$presenterRate,$presentationRate,$organizingRate,$trainingProgramRate)
    {
        try{
        
                $rate = R::findOne('ratedetails', 'id = ?', array($rdid));
                if($rate->id)
                {
                    $rate->rate_id=$rid;
                    $rate->trainee_id=$usrId;
                    $rate->comment=$comment;
                    $rate->place_rate=$placeRate;
                    $rate->presentation_rate=$presentationRate;
                    $rate->presenter_rate=$presenterRate;
                    $rate->organizing_rate=$organizingRate;
                    $rate->trainingProgram_rate=$trainingProgramRate;
                    $result=R::store($rate);
                    if($result)
                        return true;
                    else 
                        return false;
                }
                else 
                {
                    $rate=R::dispense('ratedetails');
                    $rate->rate_id=$rid;
                    $rate->trainee_id=$usrId;
                    $rate->comment=$comment;
                    $rate->place_rate=$placeRate;
                    $rate->presentation_rate=$presentationRate;
                    $rate->presenter_rate=$presenterRate;
                    $rate->organizing_rate=$organizingRate;
                    $rate->trainingProgram_rate=$trainingProgramRate;
                    $result=R::store($rate);
                    if($result)
                        return true;
                    else 
                        return false;
                }
            }catch(Exception $e){
                return $e->getTraceAsString();
            }
    }
    }

?>
