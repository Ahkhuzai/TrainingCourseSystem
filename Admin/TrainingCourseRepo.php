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
require_once 'libs/RedBeanPHP4_3_4/rb.php';


class TrainingCourseRepo {
    

    public function __construct() { 
        try {
            include'config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
        
    public function fetchByID($id)
    {
        try {
            $trainingCourse = R::load('trainingcourse', $id);

            if (!$trainingCourse['id'])
                return false;
            else
                return $trainingCourse;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    } 
    
    public function fetchByProgramId($pid)
    {       
        try {
            $trainingCourse = R::getAll('select * from trainingcourse where pid ='.$pid );
            if (!$trainingCourse)
                return false;
            else
                return $trainingCourse;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
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
            return $exc->getTraceAsString();
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
            return $exc->getTraceAsString();
        }
    
    }
    
    public function save($tcId,$name,$eng_name,$goal,$abstract,$pid)
    {
        
        if($tcId>0)
        {
            try {
                $trainingCourse = R::findOne('trainingcourse', 'id = ?', array($tcId));
                $trainingCourse['name'] = $name;
                $trainingCourse['eng_name'] = $eng_name;
                $trainingCourse['goals'] = $goal;
                $trainingCourse['abstract'] = $abstract;
                $trainingCourse['pid'] = $pid;
                $result = R::store($trainingCourse);
                if ($result)
                    return true;
                else
                    return false;
            } catch (Exception $exc) {
                return $exc->getTraceAsString();
            }
                }
        else 
        {
            try {
                $trainingCourse = R::dispense('trainingcourse');
                $trainingCourse['name'] = $name;
                $trainingCourse['eng_name'] = $eng_name;
                $trainingCourse['goals'] = $goal;
                $trainingCourse['abstract'] = $abstract;
                $trainingCourse['pid'] = $pid;
                $result = R::store($trainingCourse);
                if ($result)
                    return $result;
                else
                    return false;
            } catch (Exception $exc) {
                return $exc->getTraceAsString();
            }
                }        
    }
}
?>