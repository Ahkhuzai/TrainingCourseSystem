<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonaReop
 *
 * @author ahkhuzai
 */
require_once '../libs/RedBeanPHP4_3_4/rb.php';

class PersonaRepo {
   
    public function __construct() { 
        try {
            include '../config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function fetchById($id)
    {
        try {
            $user = R::load('persona', $id);
            if (!$user['id'])
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    
    }
      
    public function fetchByUqu_id($uqu_id)
    {       
        try {
            $user = R::getRow( 'select * from persona where uqu_id ="'.$uqu_id.'"' );
            if (!$user)
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByGender($gender)
    {       
        try {
            $user = R::getAll( 'select * from persona where gender ="'.$gender.'"' );
            if (!$user)
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByNationality($nationality)
    {       
        try {
            $user = R::getAll( 'select * from persona where nationality ="'.$nationality.'"' );
            if (!$user)
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByQuery($qr)
    {       
        try {
            $user = R::getAll( $qr );
            if (!$user)
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByIsTrainer($is_trainer)
    {       
        try {
            $user = R::getAll( 'select * from persona where is_trainer ='.$is_trainer );
            if (!$user)
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }

    public function fetchAll()
    {
        try {
            $user = R::findAll('persona');

            if (!$user)
                return false;
            else
                return $user;

        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function delete($id)
    { 
        try {
            $result = R::exec('DELETE FROM persona WHERE id = :id', array('id' => $id));
            if ($result)
                return $result;
            else
                return false;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
            
    }        
    public function save($id,$uquId,$arName,$enName,$phone,$department,$resumeDir,$signDir,$qualification,$major,$special,$rank,$gender,$nationality)
    {             
        if($id>0)
        {
            try {
                $user = R::findOne('persona', 'id = ?', array($id));
                $user['uqu_id'] = $uquId;
                $user['nationality'] = $nationality;
                $user['ar_name'] = $arName;
                $user['eng_name'] = $enName;
                $user['rank'] = $rank;
                $user['contact_phone'] = $phone;
                $user['department'] = $department;
                $user['resume'] = $resumeDir;
                $user['qualification'] = $qualification;
                $user['major'] = $major;
                $user['special'] = $special;              
                $user['signature'] = $signDir;
                $user['gender'] = $gender;
                $id = R::store($user);
                if($id)
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
            $user = R::dispense('persona');
            $user['uqu_id'] = $uquId;
            $user['nationality'] = $nationality;
            $user['ar_name'] = $arName;
            $user['eng_name'] = $enName;
            $user['rank'] = $rank;
            $user['contact_phone'] = $phone;
            $user['department'] = $department;
            $user['resume'] = $resumeDir;
            $user['qualification'] = $qualification;
            $user['major'] = $major;
            $user['special'] = $special;
            $user['signature'] = $signDir;
            $user['gender'] = $gender;
            $result = R::store($user);
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