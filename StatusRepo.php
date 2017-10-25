<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StatusRepo
 *
 * @author ahkhuzai
 */
require_once 'Assist/Config/RedBeanPHP4_3_4/rb.php';


class StatusRepo {
    
  
    public function __construct() { 
        try {
            require_once 'Assist/Config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }

    
    public function fetchByID($id)
    {
        try {
            $status = R::load('registerstatus', $id);

            if (!$status['id'])
                return false;
            else
                return $status;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }   
    } 
              
    public function fetchAll()
    {   
        try {
            $status = R::findAll('registerstatus');
            if (!$status)
                return false;
            else
                return $status;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    
    }
    
    public function delete($id)
    {    
        try {
            $result = R::exec('DELETE FROM registerstatus WHERE id = :id', array('id' => $id));

            if ($result) {
                return $result;
            } else {
                return false;
            }
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
             
    }
    
    public function save($id,$statusValue)
    {
        
        
        if($id>0)
        {
            try {
                $status = R::findOne('registerstatus', 'id = ?', array($id));
                $status['status'] = $statusValue;
                $result = R::store($status);
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
                $status = R::dispense('registerstatus');
                $status['status'] = $statusValue;
                $result = R::store($status);
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