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
require_once '..\RateRepo.php';
class testRateRepo extends TestCase {

    public function testFindByID_Found()
    {
        $rate = new RateRepo();
        $result=$rate->fetchById(1);
        $this->assertEquals(1,$result['id']);
    }
    
    public function testFindByID_NotFound()
    {
       $rate = new RateRepo();
        $result=$rate->fetchById(1000);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testFetchAll_pass()
    {
        $rate = new RateRepo();
        $result=$rate->fetchAll();
        $this->assertEquals(True, is_array($result));
    }
    
   
    public function testSave_AddNew_pass()
    {
        $rate = new RateRepo();
        $result = $rate->save(0,1,1,12,12);
        $this->assertEquals(True,$result);
    }
    /*
    public function testSave_AddNew_fail()
    {
        $rate = new RateRepo();
        $result = $rate->save(0,NULL,1,12,12);
        $this->assertEquals(FALSE,$result);
    }
    */
    public function testSave_Update_pass()
    {
        $rate = new RateRepo();
        $result = $rate->save(1,1,1,100,120);
        $this->assertEquals(TRUE,$result);
    }
    
    public function testDelete_pass()
    {
        $rate = new RateRepo();
        $result = $rate->delete(1);
        $this->assertEquals(1,$result);
    }
    /*
    public function testDelete_fail()
    {
        $rate = new RateRepo();
        $result = $rate->delete(500);
        $this->assertEquals(false,$result);
    }
   */
}
?>