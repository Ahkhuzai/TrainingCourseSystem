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
require_once '../libs/RedBeanPHP4_3_4/rb.php';


class StatusRepo {
    
  
    public function __construct() { 
        try {
            include '../config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }

    
    public function fetchByID($id)
    {
        try {
            $status = R::load('statusdictionary', $id);

            if (!$status['id'])
                return false;
            else
                return $status;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }   
    } 
    
    public function fetchByStatusCode($code)
    {       
        try {
            $status = R::getRow( 'select * from statusdictionary where status_code = "'.$code.'"' );
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
            $status = R::findAll('statusdictionary');
            if (!$status)
                return false;
            else
                return $status;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    
    }
    
    public function fetchByQuery($qr)
    {       
        try {
            $status = R::getAll( $qr );
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
            $result = R::exec('DELETE FROM statusdictionary WHERE id = :id', array('id' => $id));

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
                $status = R::findOne('statusdictionary', 'id = ?', array($id));
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
                $status = R::dispense('statusdictionary');
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