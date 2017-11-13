<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author ahkhuzai
 */
require_once 'UserRepo.php';
require_once 'PersonaRepo.php';

class Persona {
    private $id;
    private $user_id;
    private $uqu_id;
    private $ar_name;
    private $eng_name;
    private $is_trainer;
    private $contact_phone;
    private $department;
    private $resume;
    private $qualification;
    private $major;
    private $special;
    private $signture;
    
    function getId() {
        return $this->id;
    }

    function getUser_id() {
        return $this->user_id;
    }

    function getUqu_id() {
        return $this->uqu_id;
    }

    function getAr_name() {
        return $this->ar_name;
    }

    function getEng_name() {
        return $this->eng_name;
    }

    function getIs_trainer() {
        return $this->is_trainer;
    }

    function getContact_phone() {
        return $this->contact_phone;
    }

    function getDepartment() {
        return $this->department;
    }

    function getResume() {
        return $this->resume;
    }

    function getQualification() {
        return $this->qualification;
    }

    function getMajor() {
        return $this->major;
    }

    function getSpecial() {
        return $this->special;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setUqu_id($uqu_id) {
        $this->uqu_id = $uqu_id;
    }

    function setAr_name($ar_name) {
        $this->ar_name = $ar_name;
    }

    function setEng_name($eng_name) {
        $this->eng_name = $eng_name;
    }

    function setIs_trainer($is_trainer) {
        $this->is_trainer = $is_trainer;
    }

    function setContact_phone($contact_phone) {
        $this->contact_phone = $contact_phone;
    }

    function setDepartment($department) {
        $this->department = $department;
    }

    function setResume($resume) {
        $this->resume = $resume;
    }

    function setQualification($qualification) {
        $this->qualification = $qualification;
    }

    function setMajor($major) {
        $this->major = $major;
    }

    function setSpecial($special) {
        $this->special = $special;
    }
    function setSignture($signture) {
        $this->signture = $signture;
    }

    function addTrainer($userId,$major,$special,$qualification,$resumeDir,$signtureDir)
    {
       $persona = new PersonaRepo();
       $result=$persona->fetchAll();
       
       for ($i = 1; $i <= count($result); $i++) {        
        if ($result[$i]['user_id'] == $userId) {              
            $this->setId($result[$i]['id']);
            $this->setUser_id($result[$i]['user_id']);
            $this->setUqu_id($result[$i]['uqu_id']);
            $this->setAr_name($result[$i]['ar_name']);
            $this->setEng_name($result[$i]['eng_name']);
            $this->setContact_phone($result[$i]['contact_phone']);
            $this->setDepartment($result[$i]['department']);
            $this->setDepartment($result[$i]['rank']);
            $this->setResume($resumeDir);
            $this->setQualification($qualification);
            $this->setMajor($major);
            $this->setSpecial($special);
            $this->setIs_trainer(1);
            $this->setSignture($signtureDir);
            $result=$persona->save($this->id,$this->user_id,$this->uqu_id,$this->ar_name,$this->eng_name,$this->rank,$this->contact_phone,$this->department,$this->resume,$this->signture
                    ,$this->qualification,$this->major,$this->special,$this->is_trainer);  
            if($result)
                return $result;   
            else
                return false;
            }
        }
        return false;
    }
    
    
}
