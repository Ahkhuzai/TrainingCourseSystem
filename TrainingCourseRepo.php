<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainingCourseRepo
 *
 * @author ahkhuzai
 */
class TrainingCourseRepo {
    
    private $connect;
    public function __construct() { 
        require_once 'DB_Connector.php';
        $this->connect = new DB_Connector();
        $isRbConnected=R::testConnection();
        if(!$isRbConnected)
            return FALSE;
    }
    
    public function __deconstruct() {         
        $this->connect->closeConnection();
    }
    
    public function fetchByID($id)
    {
        $trainingCourse = R::load('trainingcourse', $id);         
        if(!$trainingCourse->id)
            return false;
        else
            return $trainingCourse;       
    } 
              
    public function fetchAll()
    {   
        $trainingCourse = R::findAll('trainingcourse');  
        if(!$trainingCourse->id)
           return false;
        else
           return $trainingCourse;        
    }
    
    public function delete($id)
    {
        
        try{
            $trainingCourse= $this->fetchById($id);
            $result=R::trash($trainingCourse);       
            if($result){
                return $result;
            } else {
                return false;
            }
        }
        catch(Exception $e){
            return $e->getTraceAsString();
        }  
    }
    
    public function save($tcId,$name,$goal,$abstract,$capacity,$status,$available_seat,$handoutDir)
    {
        try{

            $trainingCourse = R::findOne('trainingcourse', 'id = ?', array($tcId));
            if($trainingCourse->id)
            {
                $trainingCourse->name=$name;
                $trainingCourse->goal=$goal;
                $trainingCourse->abstract=$abstract;
                $trainingCourse->capacity=$capacity;
                $trainingCourse->status=$status;
                $trainingCourse->available_seat=$available_seat;
                $trainingCourse->handoutDir=$handoutDir;           
                $result=R::store($trainingCourse);
                if($result)
                    return true;
                else 
                    return false;
            }
            else 
            {
                $trainingCourse=R::dispense('trainingcourse');
                $trainingCourse->name=$name;
                $trainingCourse->goal=$goal;
                $trainingCourse->abstract=$abstract;
                $trainingCourse->capacity=$capacity;
                $trainingCourse->status=$status;
                $trainingCourse->available_seat=$available_seat;
                $trainingCourse->handoutDir=$handoutDir;
                $result=R::store($trainingCourse);
                if($result)
                    return $result;
                else 
                    return false;
            }
        }catch(Exception $e){
            return $e->getTraceAsString();
        }
    }
}
?>