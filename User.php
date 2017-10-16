<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author BASEM
 */
class User {
   private $id,$username,$email,$password; 
   
    function __construct() {
        require_once 'connect.php';
    }
    
    function AddUser($username,$email,$password)
    {        
        $isRbConnected=R::testConnection();       
        if($isRbConnected)
        {
            try {
            $user = R::dispense( 'user' );
            $user->username = $username;
            $user->password =$password;
            $user->email = $email;
            $this->id = R::store( $user );       
            return $this->id;
            } 
            catch (Exception $e ) {
                return  $e->getTraceAsString(); 
            }
        }
        else {
            return false;
        }
    }
    
    function validateUser($username,$email,$password)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $user = R::getrow( 'SELECT * FROM user WHERE username= :username', array(":username"=>$username));         
            if($user)
            {
                if($password==$user['password'])
                {
                    $this->email=$email;
                    $this->id=$user['id'];
                    $this->password=$password;
                    $this->username=$username;
                    return $user['id'];
                }
                else
                    return "كلمة المرور المدخلة غير صحيحة";
              
            } 
            else 
                return "اسم المستخدم المدخل غير صحيح";
        } 
        else{
            return false;
        }       
    }
    
    function neverUseUsername($username)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $user = R::getrow( 'SELECT username FROM user WHERE username= :username', array(":username"=>$username));         
            if($user)
            {
                return "اسم المستخدم موجود مسبقاً";              
            } 
            else 
                return true;
        } 
        else{
            return false;
        }   
    }
    
        function neverUseEmail($email)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $user = R::getrow( 'SELECT email FROM user WHERE email= :email', array(":email"=>$email));         
            if($user)
            {
                return "البريد الالكتروني موجود مسبقاً";              
            } 
            else 
                return true;
        } 
        else{
            return false;
        }   
    }
    
    function getUsername($id)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $user = R::getrow( 'SELECT username FROM user WHERE id= :id', array(":id"=>$id));         
            if($user)
            {
                    return $user['username'];              
            } 
            else 
                return -1;
        } 
        else{
            return false;
        }    
    }
    function getEmail($id)
    {
        $isRbConnected=R::testConnection();
        if($isRbConnected)
        {
            $user = R::getrow( 'SELECT email FROM user WHERE id= :id', array(":id"=>$id));         
            if ($user) {
                return $user['email'];
            } else {
                return -1;
            }
        } 
        else{
            return false;
        } 
    }
    function getId()
    {
        return $this->id;
    }
    
    function validEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    { 
        return "البريد الالكتروني غير صحيح";
    }
    else 
         return true; 
}
}
?>