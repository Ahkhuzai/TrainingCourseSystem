<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRoleRepo
 *
 * @author ahkhuzai
 */
require_once '../libs/RedBeanPHP4_3_4/rb.php';


class UserRoleRepo {

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
            $user = R::load('userrole', $id);
            if (!$user['id'])
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByUser_id($userid)
    {       
        try {
            $user = R::getAll( 'select * from userrole where user_id = '.$userid );
            if (!$user)
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByRole_id($id)
    {       
        try {
            $user = R::getAll( 'select * from userrole where role_id ='.$id );
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
    
    public function fetchAll()
    {
        try {
            $user = R::findAll('userrole');
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
            $result = R::exec('DELETE FROM userrole WHERE id = :id', array('id' => $id));
            if ($result)
                return $result;
            else
                return false;
        } catch (Exception $exc) {
           return $exc->getTraceAsString();
        }          
    }  
    
    public function save($id,$userid,$roleid)
    {      
        if($id>0)
        { 
            try {
                $user = R::findOne('userrole', 'id = ?', array($id));
                $user['user_id'] = $userid;
                $user['role_id'] = $roleid;

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
                $user = R::dispense('userrole');
                $user['user_id'] = $userid;
                $user['role_id'] = $roleid;

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
