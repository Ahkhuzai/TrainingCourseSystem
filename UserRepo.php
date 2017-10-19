<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRepo
 *
 * @author ahkhuzai
 */
class UserRepo {
    
    private $connect;
    
    function __construct() { 
        require_once 'DB_Connector.php';
        $this->connect = new DB_Connector();
        $isRbConnected=R::testConnection();
        if(!$isRbConnected)
            return FALSE;
    }
    
    public function fetchById($id)
    {
        $user = R::load('user', $id);         
        if(!$user->id)
            return false;
        else
            return $user;        
    }
    

    public function fetchAll()
    {
        $user = R::findAll('user');  
        if(!$user->id)
           return false;
        else
           return $user;  
    }
    
    public function delete($id)
    {
        try{
            $user = $this->fetchById($id);
            $result=R::trash($user);           
            if($resrult)
                return $r;   
            else 
                return false;
        }
        catch(Exception $e){
            return $e->getTraceAsString();
        }
    }        
    public function save($id,$username,$password,$email)
    {
        try{        
            if($id>0)
            {
                $user = R::findOne('user', 'id = ?', array($id));
                $user->username=$username;
                $user->password=$password;
                $user->email=$email;
                $id=R::store($user);
                if($id)
                    return true;
                else 
                    return false;
            }
            else 
            {
                $user=R::dispense('user');
                $user->username=$username;
                $user->password=$password;
                $user->email=$email;
                $result=R::store($user);
                if($result)
                    return true;
                else 
                    return false;
            }
        }
        catch(Exception $e){
        return $e->getTraceAsString();
        }       
    }
}
