<?php

/**
 * Description of UserRepo
 *
 * @author ahkhuzai
 */
require_once '../libs/RedBeanPHP4_3_4/rb.php';


class UserRepo {

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
            $user = R::load('user', $id);
            if (!$user['id'])
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByUsername($username)
    {       
        try {
            $user = R::getRow( 'select * from user where username = "'.$username.'"' );
            if (!$user['id'])
                return false;
            else
                return $user;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    
    public function fetchByPersona_id($id)
    {       
        try {
            $user = R::getAll( 'select * from user where persona_id ='.$id );
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
    
    public function save($id,$username,$password,$email,$persona_id)
    {      
        if($id>0)
        { 
            try {
                $user = R::findOne('user', 'id = ?', array($id));
                $user['username'] = $username;
                $user['password'] = $password;
                $user['email'] = $email;
                $user['persona_id']=$persona_id;
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
                $user['username'] = $username;
                $user['password'] = $password;
                $user['email'] = $email;
                $user['persona_id']=$persona_id;
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
