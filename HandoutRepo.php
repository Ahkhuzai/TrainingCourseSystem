<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HandoutRepo
 *
 * @author ahkhuzai
 */
require_once 'libs/RedBeanPHP4_3_4/rb.php';


class HandoutRepo {
    
 public function __construct() { 
        try {
            include 'config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function fetchById($id)
    {
        try {
            $ho = R::load('handout', $id);
            if (!$ho['id'])
                return false;
            else
                return $ho;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    
    }
    

    public function fetchAll()
    {
        try {
            $ho = R::findAll('handout');

            if (!$ho)
                return false;
            else
                return $ho;

        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function delete($id)
    { 
        try {
            $result = R::exec('DELETE FROM handout WHERE id = :id', array('id' => $id));
            if ($result)
                return $result;
            else
                return false;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
            
    }        
    public function save($id,$trainer,$trainee,$presentation,$scientific_chapter,$tr_id)
    {             
        if($id>0)
        {
            try {
                $ho = R::findOne('handout', 'id = ?', array($id));
                $ho['ho_trainer_dir'] = $trainer;
                $ho['ho_trainee_dir'] = $trainee;
                $ho['presentation_dir'] = $presentation;
                $ho['scientific_chapter_dir'] = $scientific_chapter;
                $ho['tr_id'] = $tr_id;               
                $id = R::store($ho);
                if($id)
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
            $ho = R::dispense('handout');
            $ho['ho_trainer_dir'] = $trainer;
            $ho['ho_trainee_dir'] = $trainee;
            $ho['presentation_dir'] = $presentation;
            $ho['scientific_chapter_dir'] = $scientific_chapter;
            $ho['tr_id'] = $tr_id;               
            $result = R::store($ho);
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