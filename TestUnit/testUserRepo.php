<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testUserRepo
 *
 * @author ahkhuzai
 */
use PHPUnit\Framework\TestCase;
require_once '..\UserRepo.php';

class testUserRepo extends TestCase {
    
    public function testFindByID_Found()
    {
        $user = new UserRepo();
        $result=$user->fetchById(1);
        $this->assertEquals(1,$result['id']);
    }
    
    public function testFindByID_NotFound()
    {
        $user = new UserRepo();
        $result=$user->fetchById(1000);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testFetchAll_pass()
    {
        $user = new UserRepo();
        $result=$user->fetchAll();
        $this->assertEquals(True, is_array($result));
    }
    
   
    public function testSave_AddNew_pass()
    {
        $user = new UserRepo();
        $result = $user->save(0,'$username'. rand(1, 190),'$password','$email'. rand(1, 150));
        $this->assertEquals(True,$result);
    }
    /*
    public function testSave_AddNew_fail()
    {
        $user = new UserRepo();
        $result = $user->save(0,'$username'. rand(1, 10),null,'$email'. rand(1, 10));
        $this->assertEquals(FALSE,$result);
    }*/
    
    public function testSave_Update_pass()
    {
        $user = new UserRepo();
        $result = $user->save(1,'$usernam7e'. rand(1, 10),'$pa7ssword','$emai7l'. rand(1, 10));
        $this->assertEquals(TRUE,$result);
    }
   
    public function testDelete_pass()
    {
        $user = new UserRepo();
        $result = $user->delete(1);
        $this->assertEquals(1,$result);
    }
    /*
    public function testDelete_fail()
    {
        $user = new UserRepo();
        $result = $user->delete(200);
        $this->assertEquals(false,$result);
    }*/
    
    
}
?>