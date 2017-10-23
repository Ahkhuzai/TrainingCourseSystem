<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testRateRepo
 *
 * @author ahkhuzai
 */

use PHPUnit\Framework\TestCase;
require_once '..\RateValueRepo.php';
class testRateValueRepo extends TestCase {

    public function testFindByID_Found()
    {
        $rate = new RateValueRepo();
        $result=$rate->fetchById(1);
        $this->assertEquals(1,$result->id);
    }
    
    public function testFindByID_NotFound()
    {
       $rate = new RateValueRepo();
        $result=$rate->fetchById(1000);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testFetchAll_pass()
    {
        $rate = new RateValueRepo();
        $result=$rate->fetchAll();
        $this->assertEquals(True, is_array($result));
    }
    
   
    public function testSave_AddNew_pass()
    {
        $rate = new RateValueRepo();
        $result = $rate->save(0,'test',6);
        $this->assertEquals(True,$result);
    }
    
    public function testSave_AddNew_fail()
    {
        $rate = new RateValueRepo();
        $result = $rate->save(0,"ans",NULL);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testSave_Update_pass()
    {
        $rate = new RateValueRepo();
        $result = $rate->save(4,"updateans",12);
        $this->assertEquals(TRUE,$result);
    }
    
    public function testDelete_pass()
    {
        $rate = new RateValueRepo();
        $result = $rate->delete(4);
        $this->assertEquals(1,$result);
    }
    
    public function testDelete_fail()
    {
        $rate = new RateValueRepo();
        $result = $rate->delete(6);
        $this->assertEquals(false,$result);
    }
 
}
?>