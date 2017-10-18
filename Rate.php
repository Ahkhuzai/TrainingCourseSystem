<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rate
 *
 * @author Ahlam Alkhuzai
 */
class Rate {
    private $RID; 
    private $trAvg;
    private $tcAvg;
    private $traineeID;
    private $comments;
    private $placeRate;
    private $presentationRate;
    private $orgnizingRate;
    private $presenterRate; 
    private $trainingProgramRate;
    private $connect; 
   
    function __construct() { 
        require_once 'DB_Connector.php';
        $this->connect = new DB_Connector();
    }
    function __deconstruct() {         
        $this->connect->closeConnection();
    }
    
    function setRID ($id)
    {
        $this->RID=$id;
    }
    function setTcAvg ($avg)
    {
        $this->tcAvg=$avg;
    }
    function setTrAvg ($avg)
    {
        $this->trAvg=$avg;
    }
    function setTraineeId($id)
    {
        $this->traineeID=$id;
    }
    function setComment($comment)
    {
        $this->comments=$comment;;
    }
    function setPlaceRate($placeRate)
    {
        $value=$this->getValueOfRate($placeRate);
        $this->placeRate=$value;
    }
    function setPresentationRate($presentationRate)
    {
        $value=$this->getValueOfRate($presentationRate);
        $this->presentationRate=$value;
    }
    function setOrgnizingRate ($orgnizingRate)
    {
        $value=$this->getValueOfRate($orgnizingRate);
        $this->orgnizingRate=$value;
    }
    function setPresenterRate($presenterRate)
    {
        $value=$this->getValueOfRate($presenterRate);
        $this->presenterRate=$value;
    }
    function setTrainingProgramRate($trainingProgramRate)
    {
        $value=$this->getValueOfRate($trainingProgramRate);
        $this->trainingProgramRate=$value;
    }
    //
    
    function getRID()
    {
        return $this->RID;
    }
    function getTcAvg()
    {
        $this->tcAvg;
    }
    function getTrAvg()
    {
        return $this->trAvg;
    }
    function getTraineeId()
    {
        return $this->traineeID;
    }
    function getComment()
    {
        return $this->comments;
    }
    function getPlaceRate()
    {
        return $this->placeRate;
    }
    function getPresentationRate()
    {
        return $this->presentationRate;
    }
    function getOrgnizingRate()
    {
        return $this->orgnizingRate;
    }
    function getPresenterRate()
    {
        return $this->presenterRate;
    }
    function getTrainingProgramRate()
    {
        return $this->trainingProgramRate;
    }
    //DB staff 
    function getRateDetailsByRID($rid)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $rate = R::getrow( 'SELECT * FROM ratedetails WHERE rate_id= :rid', array(":rid"=>$rid));          
            if ($rate['id']) {
                return $rate;
            } else {
                return false;
            }
        } 
        else{
            return false;
        }  
    }
    
    function getUserRate($uid)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $rate = R::getrow( 'SELECT * FROM ratedetails WHERE trainee_id= :uid', array(":uid"=>$uid));          
            if ($rate['id']) {
                return $rate;
            } else {
                return false;
            }
        } 
        else{
            return false;
        }  
    }
    
    function getValueOfRate($rate)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $rate = R::getrow( 'SELECT value FROM ratevalue WHERE ans= :rate', array(":rate"=>$rate));          
            if ($rate['value']) {
                return $rate['value'];
            } else {
                return -1;
            }
        } 
        else{
            return false;
        } 
    }
    
    function deleteRate($id)
    {
        $isConnected = R::testConnection();
        if($isConnected)
        {
            try{
                $r=R::exec('delete from ratedetails WHERE rate_id =:rid',array(":rid"=>$id));
                if($r){
                    return $r;
                } else {
                    return false;
                }
            }catch(Exception $e){
                return $e->getTraceAsString();
            }
        }
         else
        {     
            return false;
        }
    }
    
    function getRateIDByTc($tc_id)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $rate = R::getrow( 'SELECT * FROM ratetotal WHERE tc_id= :tcid', array(":tcid"=>$tc_id));          
            if ($rate['id']) {
                return $rate['id'];
            } else {
                return false;
            }
        } 
        else{
            return false;
        } 
    }
    
    function getRateAvgForTrainer($rid)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $rate = R::getrow( 'SELECT tr_total_avg_rate FROM ratetotal WHERE id= :id', array(":id"=>$rid));          
            if ($rate['id']) {
                return $rate['tr_total_avg_rate'];
            } else {
                return false;
            }
        } 
        else{
            return false;
        } 
    }
    
    function getRateAvgForTrainingCourse($rid)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $rate = R::getrow( 'SELECT tc_total_avg_rate FROM ratetotal WHERE id= :id', array(":id"=>$rid));          
            if ($rate['id']) {
                return $rate['tc_total_avg_rate'];
            } else {
                return false;
            }
        } 
        else{
            return false;
        } 
    }
    
    function getAllRateByID($rid)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $rate = R::getAll( 'SELECT * FROM ratedetails WHERE rate_id= :rid', array(":rid"=>$rid));          
            if ($rate['id']) {
                return $rate;
            } else {
                return false;
            }
        } 
        else{
            return false;
        }  
    }
    
    function AddOrUpdateMainRate($tc_id,$tr_id,$tc_avg,$tr_avg)
    {
        $isConnected = R::testConnection();
        if($isConnected)
        {
            try{
        
                $rate = R::findOne('ratetotal', 'tc_id = ?', array($tc_id));
                if($rate->id)
                {
                    $rate->tc_id=$tc_id;
                    $rate->tr_id=$tr_id;
                    $rate->tr_total_avg_rate=$tr_Avg;
                    $rate->tc_total_avg_rate=$tc_avg;
                    $result=R::store($rate);
                    if($result)
                        return true;
                    else 
                        return false;
                }
                else 
                {
                    $rate=R::dispense('ratetotal');
                    $rate->tc_id=$tc_id;
                    $rate->tr_id=$tr_id;
                    $rate->tr_total_avg_rate=$tr_Avg;
                    $rate->tc_total_avg_rate=$tc_avg;
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
         else
        {     
            return false;
        }
    }
    
    function AddOrUpdateUserRate($rid,$usr_id,$comment,$placeRate,$presenterRate,$presentationRate,$organizingRate,$trainingProgramRate)
    {
        $isConnected = R::testConnection();
        if($isConnected)
        {
            try{
        
                $rate = R::findOne('ratedetails', 'trainee_id = ?', array($usr_id));
                if($rate->id)
                {
                    $rate->comment=$comment;
                    $rate->place_rate=$this->getValueOfRate($placeRate);
                    $rate->presentation_rate=$this->getValueOfRate($presentationRate);
                    $rate->presenter_rate=$this->getValueOfRate($presenterRate);
                    $rate->organizing_rate=$this->getValueOfRate($organizingRate);
                    $rate->trainingProgram_rate=$this->getValueOfRate($trainingProgramRate);
                    $result=R::store($rate);
                    if($result)
                        return true;
                    else 
                        return false;
                }
                else 
                {
                    $rate=R::dispense('ratedetails');
                    $rate->tc_id=$tc_id;
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
         else
        {     
            return false;
        }
    }
    
}


?>