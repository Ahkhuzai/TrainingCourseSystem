<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testTimetableRepo
 *
 * @author ahkhuzai
 */
use PHPUnit\Framework\TestCase;
require_once '..\TimetableRepo.php';
class testTimetableRepo extends TestCase {
    
    public function testFindByID_Found()
    {
        $timetable = new TimetableRepo();
        $result=$timetable->fetchById(1);
        $this->assertEquals(1,$result['id']);
    }
    
    public function testFindByID_NotFound()
    {
        $timetable = new TimetableRepo();
        $result=$timetable->fetchById(1000);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testFetchAll_pass()
    {
        $timetable = new TimetableRepo();
        $result=$timetable->fetchAll();
        $this->assertEquals(True, is_array($result));
    }
    
   
    public function testSave_AddNew_pass()
    {
        $timetable = new TimetableRepo();
        $result = $timetable->save(0,1,1,'2017-11-11', '2017-11-11', 3, '15:15:15', 'location');
        $this->assertEquals(True,$result);
    }
    /*
    public function testSave_AddNew_fail()
    {
        $timetable = new TimetableRepo();
        $result = $timetable->save(0,1,1,'2017-11-11', '2017-11-11', NULL, '15:15:15', 'location');
        $this->assertEquals(FALSE,$result);
    }
    */
    public function testSave_Update_pass()
    {
        $timetable = new TimetableRepo();
        $result = $timetable->save(1,1,1,'2018-11-11', '2018-11-11', 3, '05:15:15', 'UPDATE');;
        $this->assertEquals(TRUE,$result);
    }
    
    public function testDelete_pass()
    {
        $timetable = new TimetableRepo();
        $result = $timetable->delete(1);
        $this->assertEquals(1,$result);
    }
    /*
    public function testDelete_fail()
    {
        $timetable = new TimetableRepo();
        $result = $timetable->delete(120);
        $this->assertEquals(false,$result);
    }
   */
}
?>