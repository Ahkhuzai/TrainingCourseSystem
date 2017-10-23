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
class StatusRepo {
    
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
        try {
            $status = R::load('registerstatus', $id);

            if (!$status->id)
                return false;
            else
                return $status;
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            return false;
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
            //echo $exc->getTraceAsString();
            return false;
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
            //echo $exc->getTraceAsString();
            return false;
        }
             
    }
    
    public function save($id,$statusValue)
    {
        
        
        if($id>0)
        {
            try {
                $status = R::findOne('registerstatus', 'id = ?', array($id));
                $status->status = $statusValue;
                $result = R::store($status);
                if ($result)
                    return true;
                else
                    return false;
            } catch (Exception $exc) {
                echo $exc->getMessage();
                return false;
            }
                }
        else 
        {
            try {
                $status = R::dispense('registerstatus');
                $status->status = $statusValue;
                $result = R::store($status);
                if ($result)
                    return True;
                else

                    return false;
            } catch (Exception $exc) {
                //echo $exc->getTraceAsString();
                return false;
            }
                }
        
    }
}
?>