<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blockeduser
 *
  * @author ahkhuzai
 */

require_once '../libs/RedBeanPHP4_3_4/rb.php';


class BlockedUserRepo {

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
            $user = R::load('blockeduser', $id);
            if (!$user['id'])
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByUserId($userID)
    {       
        try {
            $user = R::getAll( 'select * from blockeduser where user_id = '.$userID );
            if (!$user['id'])
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
    
    public function fetchAll()
    {
        try {
            $user = R::findAll('blockeduser');
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
            $result = R::exec('DELETE FROM blockeduser WHERE id = :id', array('id' => $id));
            if ($result)
                return $result;
            else
                return false;
        } catch (Exception $exc) {
           return $exc->getTraceAsString();
        }          
    }  
    
    public function save($id,$userid,$startDate,$endDate,$sid)
    {      
        if($id>0)
        { 
            try {
                $user = R::findOne('blockeduser', 'id = ?', array($id));
                $user['user_id'] = $userid;
                $user['start_date'] = $startDate;
                $user['end_date'] = $endDate;
                $user['status']=$sid;
                $id = R::store($user);
                if ($id){
                    return true;
                }             
                else 
                {
                return false;
                }
            } catch (Exception $exc) {
                return $exc->getTraceAsString();
            }  
        }
        else 
        {         
            try {
                $user = R::dispense('blockeduser');
                $user['user_id'] = $userid;
                $user['start_date'] = $startDate;
                $user['end_date'] = $endDate;
                $user['status']=$sid;
                $result = R::store($user);
                if ($result){
                    return $result;
                }             
                else 
                {
                    return false;
                }
            } catch (Exception $exc) {
               return $exc->getTraceAsString();
            }
        }         
    }
}
