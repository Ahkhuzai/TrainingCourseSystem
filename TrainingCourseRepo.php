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
        try {
            $trainingCourse = R::load('trainingcourse', $id);

            if (!$trainingCourse->id)
                return false;
            else
                return $trainingCourse;
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            return false;
        }
    } 
              
    public function fetchAll()
    {   
        try {
            $trainingCourse = R::findAll('trainingcourse');

            if (!$trainingCourse)
                return false;
            else
                return $trainingCourse;
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            return false;
        }
    }
    
    public function delete($id)
    {
        try {
            $result = R::exec('DELETE FROM trainingcourse WHERE id = :id', array('id' => $id));
            if ($result) {
                return $result;
            } else {
                return false;
            }
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            return false;
        }
    
    }
    
    public function save($tcId,$name,$goal,$abstract,$capacity,$status,$available_seat,$handoutDir)
    {
        
        if($tcId>0)
        {
            try {
                $trainingCourse = R::findOne('trainingcourse', 'id = ?', array($tcId));
                $trainingCourse->name = $name;
                $trainingCourse->goal = $goal;
                $trainingCourse->abstract = $abstract;
                $trainingCourse->capacity = $capacity;
                $trainingCourse->status = $status;
                $trainingCourse->available_seat = $available_seat;
                $trainingCourse->handoutDir = $handoutDir;
                $result = R::store($trainingCourse);
                if ($result)
                    return true;
                else
                    return false;
            } catch (Exception $exc) {
                //echo $exc->getTraceAsString();
                return false;
            }
                }
        else 
        {
            try {
                $trainingCourse = R::dispense('trainingcourse');
                $trainingCourse->name = $name;
                $trainingCourse->goal = $goal;
                $trainingCourse->abstract = $abstract;
                $trainingCourse->capacity = $capacity;
                $trainingCourse->status = $status;
                $trainingCourse->available_seat = $available_seat;
                $trainingCourse->handoutDir = $handoutDir;
                $result = R::store($trainingCourse);
                if ($result)
                    return $result;
                else
                    return false;
            } catch (Exception $exc) {
                //echo $exc->getMessage();
                return false;
            }
                }        
    }
}
?>