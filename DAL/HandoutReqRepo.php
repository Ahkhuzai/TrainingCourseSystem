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
require_once '../libs/RedBeanPHP4_3_4/rb.php';


class HandoutReqRepo {
    
 public function __construct() { 
        try {
            include '../config/config.php';
            R::setup('mysql:host=localhost;dbname=' . $DBNAME, $DBUSERNAME, $DBPASSWORD);
            R::testConnection();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    
    public function fetchById($id)
    {
        try {
            $ho = R::load('reqhandout', $id);
            if (!$ho['id'])
                return false;
            else
                return $ho;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    
    }
    
    public function fetchBystatus_id($sid)
    {       
        try {
            $ho = R::getAll( 'select * from reqhandout where sid ='.$sid );
            if (!$ho)
                return false;
            else
                return $ho;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }            
    }
    public function fetchByTr_id($tr_id)
    {       
        try {
            $ho = R::getAll( 'select * from reqhandout where tr_id ='.$tr_id );
            if (!$ho)
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
            $ho = R::findAll('reqhandout');

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
            $result = R::exec('DELETE FROM reqhandout WHERE id = :id', array('id' => $id));
            if ($result)
                return $result;
            else
                return false;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
            
    }        
    public function save($id,$tname,$trainer,$trainee,$presentation,$scientific_chapter,$add_date,$sid,$tr_id)
    {             
        if($id>0)
        {
            try {
                $ho = R::findOne('reqhandout', 'id = ?', array($id));
                $ho['name'] = $tname;
                $ho['ho_trainer_dir'] = $trainer;
                $ho['ho_trainee_dir'] = $trainee;
                $ho['presentation_dir'] = $presentation;
                $ho['scientific_chapter'] = $scientific_chapter;
                $ho['tr_id'] = $tr_id;  
                $ho['add_date']=$add_date;
                $ho['sid']=$sid;
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
            $ho = R::dispense('reqhandout');
            $ho['name'] = $tname;
            $ho['ho_trainer_dir'] = $trainer;
            $ho['ho_trainee_dir'] = $trainee;
            $ho['presentation_dir'] = $presentation;
            $ho['scientific_chapter'] = $scientific_chapter;
            $ho['tr_id'] = $tr_id;  
            $ho['add_date']=$add_date;
            $ho['sid']=$sid;
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