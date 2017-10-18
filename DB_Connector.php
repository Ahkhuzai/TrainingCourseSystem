<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB_Connector
 *
 * @author Ahlam Alkhuzai
 */

class DB_Connector {  
    private $DBUSERNAME="root";
    private $DBPASSWORD="";
    private $DBNAME="training_db";
    private $DBHOST="localhost";
    function __construct() {     
        require_once 'Assist/Config/RedBeanPHP4_3_4/rb.php';       
        $this->getConnect();  
    }
    function getConnect()
    {    
        try {
           if( !R::testConnection())
                R::setup( 'mysql:host=localhost;dbname='.$this->DBNAME, $this->DBUSERNAME, $this->DBPASSWORD);
        }catch (RedException $rd)
        {
            $rd->getMessage();
        }
    
    }
    function closeConnection() {
        R::close();
    }    
}


?>