<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SysRole
 * @author ahkhuzai
 */
require_once '../libs/RedBeanPHP4_3_4/rb.php';


class SysRoleRepo {

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
            $user = R::load('sysrole', $id);
            if (!$user['id'])
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByRoleCode($code)
    {       
        try {
            $user = R::getRow( 'select * from sysrole where sysrole = "'.$code.'"' );
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
            $user = R::findAll('sysrole');
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
            $result = R::exec('DELETE FROM sysrole WHERE id = :id', array('id' => $id));
            if ($result)
                return $result;
            else
                return false;
        } catch (Exception $exc) {
           return $exc->getTraceAsString();
        }          
    }  
    
    public function save($id,$name,$code,$url)
    {      
        if($id>0)
        { 
            try {
                $user = R::findOne('sysrole', 'id = ?', array($id));
                $user['role_name'] = $name;
                $user['role_code'] = $code;
                $user['url'] = $url;
               
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
                $user = R::dispense('sysrole');
                $user['role_name'] = $name;
                $user['role_code'] = $code;
                $user['url'] = $url;
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
