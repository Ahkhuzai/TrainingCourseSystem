<?php

/**
 * Description of UserRepo
 *
 * @author ahkhuzai
 */
require_once 'Assist/Config/RedBeanPHP4_3_4/rb.php';
require_once 'Assist/Config/config.php';

class UserRepo {

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
            $user = R::load('user', $id);
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
            $user = R::findAll('user');
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
            $result = R::exec('DELETE FROM user WHERE id = :id', array('id' => $id));
            if ($result)
                return $result;
            else
                return false;
        } catch (Exception $exc) {
           return $exc->getTraceAsString();
        }          
    }  
    
    public function save($id,$username,$password,$email)
    {      
        if($id>0)
        { 
            try {
                $user = R::findOne('user', 'id = ?', array($id));
                $user->username = $username;
                $user->password = $password;
                $user->email = $email;
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
                $user = R::dispense('user');
                $user->username = $username;
                $user->password = $password;
                $user->email = $email;
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
