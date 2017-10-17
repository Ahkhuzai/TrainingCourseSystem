<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Trainee
 *
 * @author BASEM
 */
class Trainee extends User {
    //put your code here
    private $uqu_id, $name_arabic, $name_eng , $major , $spical, $department , $phone, $is_trainer;
    
    function __construct() {
        require_once 'connect.php';
    }
    
    function isRegistred($id,$tc_id)
    {
        $isRbConnected=R::testConnection();       
        if($isRbConnected)
        {   
            $query='select * from registerstatus where usr_id='.$id.' and tc_id='.$tc_id;
            $result= R::getRow($query); 
            if($result)
                return true;
            else 
                return false;        
        }
        else {
            return false;
        }  
    }
    
    function registerForCourse($id,$tc_id)
    {
        $isRbConnected=R::testConnection();       
        if($isRbConnected)
        {
            if($this->isRegistred($id,$tc_id)=="")
            {
                try {
                $user = R::dispense( 'registerstatus' );
                $user->tc_id = $tc_id;
                $user->usr_id =$id;
                $user->registration_status = 1;
                $result= R::store( $user );       
                return $result;
                } 
                catch (Exception $e ) {
                    return  $e->getMessage(); 
                }
            }
            else
            {
                return -1;
            }
        }
        else {
            return false;
        }
    }
    
    function ExcusedForCourse($id)
    {
        $isRbConnected=R::testConnection();       
        if($isRbConnected)
        {
            try {                         
                $bean = R::exec( 'UPDATE registerstatus SET registration_status=5 WHERE id='.$id );               
                return $bean;
            } 
            catch (Exception $e ) {
                    return  $e->getMessage(); 
            }
        }
        else {
            return false;
        }
    }
    
    function addAttendance($userId,$tt_id,$tc_id)
    {
         $isRbConnected=R::testConnection();       
        if($isRbConnected)
        {
            if($this->isRegistred($userId,$tc_id)=="")
            {
                try {
                $user = R::dispense('tcattendance');
                $user->timetable_id = $tt_id;
                $user->usr_id =$userId;
                $user->date = R::isoDateTime();
                $result= R::store( $user );       
                return $result;
                } 
                catch (Exception $e ) {
                    return  $e->getMessage(); 
                }
            }
            else
            {
                return -1;
            }
        }
        else {
            return false;
        }
    }
    
}

?>