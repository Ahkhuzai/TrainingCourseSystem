<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AttendanceRepo
 *
 * @author ahkhuzai
 */
use PHPUnit\Framework\TestCase;
require_once '..\AttendanceRepo.php';
class testAttendanceRepo extends TestCase {
    
    public function testFindByID_Found()
    {
        $attendance = new AttendanceRepo();
        $result=$attendance->fetchById(1);
        $this->assertEquals(1,$result->id);
    }
    
    public function testFindByID_NotFound()
    {
        $attendance = new AttendanceRepo();
        $result=$attendance->fetchById(1000);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testFetchAll_pass()
    {
        $attendance = new AttendanceRepo();
        $result=$attendance->fetchAll();
        $this->assertEquals(True, is_array($result));
    }
    
   
    public function testSave_AddNew_pass()
    {
        $attendance = new AttendanceRepo();
        $result = $attendance->save(0,1,1,'1950-01-01 05:55:55');
        $this->assertEquals(True,$result);
    }
    /*
    public function testSave_AddNew_fail()
    {
        $attendance = new AttendanceRepo();
        $result = $attendance->save(0,NULL,1,'1950-01-01 05:55:55');
        $this->assertEquals(FALSE,$result);
    }
     * 
     */
    
    public function testSave_Update_pass()
    {
        $attendance = new AttendanceRepo();
        $result = $attendance->save(1,1,1,'2050-01-01 05:55:55');
        $this->assertEquals(TRUE,$result);
    }
    
    public function testDelete_pass()
    {
        $attendance = new AttendanceRepo();
        $result = $attendance->delete(1);
        $this->assertEquals(1,$result);
    }
    /*
    public function testDelete_fail()
    {
        $attendance = new AttendanceRepo();
        $result = $attendance->delete(220);
        $this->assertEquals(false,$result);
    }
     * 
     */

}

?>