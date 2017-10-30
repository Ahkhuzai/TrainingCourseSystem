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

require_once 'UserRepo.php';
require_once 'PersonaRepo.php';
class User {    
    
    private $id;
    private $username;
    private $email;
    private $password;
    
    
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    public function validateUser($usrName,$usrPass)
    {
        
       $user = new UserRepo();
       $result=$user->fetchAll();
     
       for ($i = 1; $i <= count($result); $i++) {
        if ($result[$i]['username'] === $usrName) {
            if ($result[$i]['password'] === $usrPass) {
                $this->setId($result[$i]['id']);
                $this->setUsername($result[$i]['username']);
                $this->setPassword($result[$i]['password']);
                $this->setEmail($result[$i]['email']);
                return true;
                }
            }
        }
        return false;
    }
    
    public function isTrainer($id)
    {   
       $user = new PersonaRepo();
       $result=$user->fetchAll();
       for ($i = 1; $i <= count($result); $i++) {
        if ($result[$i]['user_id'] === $id)
            $Id=$i;   
       }      
        if($result[$Id]['is_trainer']==1)
           return true;
        else 
           return false;
    }
}
?>
