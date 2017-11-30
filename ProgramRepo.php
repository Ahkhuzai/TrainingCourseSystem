<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgramRepo
 *
 * @author ahkhuzai
 */
require_once 'libs/RedBeanPHP4_3_4/rb.php';

class ProgramRepo {
 public function __construct() { 
        try {
            include 'config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function fetchById($id)
    {
        try {
            $program = R::load('program', $id);
            if (!$program['id'])
                return false;
            else
                return $program;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    
    }
    

    public function fetchAll()
    {
        try {
            $program = R::findAll('program');

            if (!$program)
                return false;
            else
                return $program;

        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function delete($id)
    { 
        try {
            $result = R::exec('DELETE FROM program WHERE id = :id', array('id' => $id));
            if ($result)
                return $result;
            else
                return false;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
            
    }        
    public function save($id,$name,$goals,$abstract,$hour,$status)
    {             
        if($id>0)
        {
            try {
                $program = R::findOne('program', 'id = ?', array($id));
                $program['name'] = $name;
                $program['goals'] = $goals;
                $program['abstract'] = $abstract;
                $program['hour'] = $hour;
                $program['status'] = $status;
                
                $id = R::store($program);
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
            $program = R::dispense('program');
            $program['name'] = $name;
            $program['goals'] = $goals;
            $program['abstract'] = $abstract;
            $program['hour'] = $hour;
            $program['status'] = $status;
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