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
require_once 'Assist/Config/RedBeanPHP4_3_4/rb.php';
require_once 'Assist/Config/config.php';
class PersonaRepo {
   
    public function __construct() { 
        try {
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
    public function save($id,$usrId,$uquId,$arName,$enName,$phone,$department,$resumeDir,$signDir,$qualification,$major,$special,$isTrainer,$isUqu)
    {             
        if($id>0)
        {
            try {
                $user = R::findOne('persona', 'id = ?', array($id));
                $user->uqu_id = $uquId;
                $user->ar_name = $arName;
                $user->eng_name = $enName;
                $user->contact_phone = $phone;
                $user->department = $department;
                $user->resume = $resumeDir;
                $user->qualification = $qualification;
                $user->major = $major;
                $user->special = $special;
                $user->is_trainer = $isTrainer;
                $user->is_uqu = $isUqu;
                $user->signature = $signDir;
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
            $user->user_id = $usrId;
            $user->uqu_id = $uquId;
            $user->ar_name = $arName;
            $user->eng_name = $enName;
            $user->contact_phone = $phone;
            $user->department = $department;
            $user->resume = $resumeDir;
            $user->qualification = $qualification;
            $user->major = $major;
            $user->special = $special;
            $user->is_trainer = $isTrainer;
            $user->is_uqu = $isUqu;
            $user->signature = $signDir;
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