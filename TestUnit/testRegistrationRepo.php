<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testRegistrationRepo
 *
 * @author ahkhuzai
 */
use PHPUnit\Framework\TestCase;
require_once '..\RegistrationRepo.php';
class testRegistrationRepo extends TestCase {
    
    public function testFindByID_Found()
    {
        $register = new RegistrationRepo();
        $result=$register->fetchById(1);
        $this->assertEquals(1,$result['id']);
    }
    
    public function testFindByID_NotFound()
    {
        $register = new RegistrationRepo();
        $result=$register->fetchById(1000);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testFetchAll_pass()
    {
        $register = new RegistrationRepo();
        $result=$register->fetchAll();
        $this->assertEquals(True, is_array($result));
    }
    
   
    public function testSave_AddNew_pass()
    {
        $register = new RegistrationRepo();
        $result = $register->save(0,1,1,1);
        $this->assertEquals(True,$result);
    }
    /*
    public function testSave_AddNew_fail()
    {
        $register = new RegistrationRepo();
        $result = $register->save(0,NULL,1,1);
        $this->assertEquals(FALSE,$result);
    }
    */
    public function testSave_Update_pass()
    {
        $register = new RegistrationRepo();
        $result = $register->save(1,1,1,1);
        $this->assertEquals(TRUE,$result);
    }
    
    public function testDelete_pass()
    {
        $register = new RegistrationRepo();
        $result = $register->delete(1);
        $this->assertEquals(1,$result);
    }
    /*
    public function testDelete_fail()
    {
        $register = new RegistrationRepo();
        $result = $register->delete(22);
        $this->assertEquals(false,$result);
    }
      
     */
}

?>