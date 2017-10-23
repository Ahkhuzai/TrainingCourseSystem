<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testStatusRepo
 *
 * @author ahkhuzai
 */
use PHPUnit\Framework\TestCase;
require_once '..\StatusRepo.php';
class testStatusRepo extends TestCase {
    
    public function testFindByID_Found()
    {
        $status = new StatusRepo();
        $result=$status->fetchById(1);
        $this->assertEquals(1,$result->id);
    }
    
    public function testFindByID_NotFound()
    {
        $status = new StatusRepo();
        $result=$status->fetchById(1000);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testFetchAll_pass()
    {
        $status = new StatusRepo();
        $result=$status->fetchAll();
        $this->assertEquals(True, is_array($result));
    }
    
   
    public function testSave_AddNew_pass()
    {
        $status = new StatusRepo();
        $result = $status->save(0,"test");
        $this->assertEquals(True,$result);
    }
    
    public function testSave_AddNew_fail()
    {
        $status = new StatusRepo();
        $result = $status->save(0,NULL);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testSave_Update_pass()
    {
        $status = new StatusRepo();
        $result = $status->save(6,"UPDATE");
        $this->assertEquals(TRUE,$result);
    }
    
    public function testDelete_pass()
    {
        $status = new StatusRepo();
        $result = $status->delete(6);
        $this->assertEquals(1,$result);
    }
    
    public function testDelete_fail()
    {
        $status = new StatusRepo();
        $result = $status->delete(104);
        $this->assertEquals(false,$result);
    }

}
?>