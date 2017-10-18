<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author Ahlam Alkhuzai
 */

require_once 'User.php';

class Persona extends User {
    
    private $ArName;
    private $EnName;
    private $uquId;
    private $isUQU;
    private $isTrainer;
    private $special;
    private $major;
    private $resumeDir;
    private $signDir;
    private $gualification; 
    private $phone; 
    
    function __construct() { 
        require_once 'DB_Connector.php';
        $this->connect = new DB_Connector();
    }
    
    function __deconstruct() {    
        $this->connect->closeConnection();
    }
    
    function setArName($arName)
    {
        $this->ArName=$arName;
    }
    
    function setEnName($EnName)
    {
        $this->EnName=$EnName;
    }
    
    function setIsUQU($isUQU)
    {
        $this->isUQU=$isUQU;
    }
    
    function setUQU($UQU)
    {
        $this->uquId=$UQU;
    }
    
    function setIsTrainer($isTrainer)
    {
        $this->isTrainer=$isTrainer;
    }
    
    function setPhone($Phone)
    {
        $this->phone=$Phone;
    }
    
    function setResume($Resume)
    {
        $this->resumeDir=$Resume;
    }
    
    function setSig($signeture)
    {
        $this->signDir=$signeture;
    }
    
    function setSpecial($special)
    {
        $this->special=$special;
    }
    
    function setMajor($major)
    {
        $this->major=$major;
    }
    
    function setQualification($gualification)
    {
        $this->gualification=$gualification;
    }
    
    // get func
    
        function getArName()
    {
        return $this->ArName;
    }
    
    function getEnName()
    {
        return $this->EnName;
    }
    
    function getIsUQU()
    {
        return $this->isUQU;
    }
    
    function getUQU()
    {
        return $this->uquId;
    }
    
    function getIsTrainer()
    {
        return $this->isTrainer;
    }
    
    function getPhone()
    {
        return $this->phone;
    }
    
    function getResume()
    {
        return $this->resumeDir;
    }
    
    function getSig()
    {
        return $this->signDir;
    }
    
    function getSpecial()
    {
        return $this->special;
    }
    
    function getMajor()
    {
        return $this->major;
    }
    
    function getQualification()
    {
        return $this->gualification;
    }
    
    // DB Related fun
    
    //Server related function 
     
    
}

?>