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
    
}
?>
