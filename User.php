<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Ahlam Alkhuzai
 */

class User {
    private $id;
    private $username;
    private $email;
    private $password;
    private $connect;
    function __construct() { 
        require_once 'DB_Connector.php';
        $this->connect = new DB_Connector();
    }
    
    function __deconstruct() { 
       
        $this->connect->closeConnection();
    }
    
    function setID($id)
    {
        $this->id=$id;
    }
    function setUsername($username)
    {
        $this->username=$username;
    }
    function setPassword($password)
    {
        $this->password=$password;
    }
    
    function setEmail($email)
    {
        $this->email=$email;
    }
    
    function getID()
    {
        return $this->id;
    }
    
    function getEmail()
    {
        return $this->email;
    }
    function getPassword()
    {
        return $this->password;
    }
    function getUsername()
    {
        return $this->username;
    }
    
    function getUser($id)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $user = R::load('user', $id);         
            if(!$user->id)
               return false;
           else
               return $user; 
        } 
        else{
            return false;
        } 
    }
    
    function getUserByUsername($username)
    {
       $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $user = R::getrow( 'SELECT * FROM user WHERE username= :usrname', array(":usrname"=>$username));          
            if ($user['id']) {
                return $user;
            } else {
                return false;
            }
        } 
        else{
            return false;
        } 
    }
    
    function deleteUser($id)
    {
        $isConnected = R::testConnection();
        if($isConnected)
        {
            try{
                $r=R::exec('delete from user WHERE id =:id',array(":id"=>$id));
                if($r)
                    return $r;   
                else 
                    return false;
            }catch(Exception $e){
                return $e->getTraceAsString();
            }
        }
         else
        {     
            return false;
        }
    }
    
    function AddOrUpdateUser($username,$password,$email)
    {
        $isConnected = R::testConnection();
        if($isConnected)
        {
            try{
        
                $user = R::findOne('user', 'username = ?', array($username));
                if($user->id)
                {
                    $user->username=$username;
                    $user->password=$password;
                    $user->email=$email;
                    $result=R::store($user);
                    if($result)
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
            }catch(Exception $e){
                return $e->getTraceAsString();
            }
        }
         else
        {     
            return false;
        }
    }
    
    }
?>
