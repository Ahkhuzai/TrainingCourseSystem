<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testTrainingCourseRepo
 *
 * @author ahkhuzai
 */
use PHPUnit\Framework\TestCase;
require_once '..\TrainingCourseRepo.php';
class testTrainingCourseRepo extends TestCase {
    
    public function testFindByID_Found()
    {
        $trainingCourse = new TrainingCourseRepo();
        $result=$trainingCourse->fetchById(1);
        $this->assertEquals(1,$result['id']);
    }
    
    public function testFindByID_NotFound()
    {
        $trainingCourse = new TrainingCourseRepo();
        $result=$trainingCourse->fetchById(1000);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testFetchAll_pass()
    {
        $trainingCourse = new TrainingCourseRepo();
        $result=$trainingCourse->fetchAll();
        $this->assertEquals(True, is_array($result));
    }
    
   
    public function testSave_AddNew_pass()
    {
        $trainingCourse = new TrainingCourseRepo();
        $result = $trainingCourse->save(0,"name","goal","abstract",14,1,13,"upload/handoutDir");
        $this->assertEquals(True,$result);
    }
    /*
    public function testSave_AddNew_fail()
    {
        $trainingCourse = new TrainingCourseRepo();
        $result = $trainingCourse->save(0,NULL,"goal","abstract",14,1,13,"upload/handoutDir");
        $this->assertEquals(FALSE,$result);
    }*/
    
    public function testSave_Update_pass()
    {
        $trainingCourse = new TrainingCourseRepo();
        $result = $trainingCourse->save(1,"name","goal","abstract",14,1,13,"upload/handoutDir");
        $this->assertEquals(TRUE,$result);
    }
    
    public function testDelete_pass()
    {
        $trainingCourse = new TrainingCourseRepo();
        $result = $trainingCourse->delete(1);
        $this->assertEquals(1,$result);
    }
    /*
    public function testDelete_fail()
    {
        $trainingCourse = new TrainingCourseRepo();
        $result = $trainingCourse->delete(56);
        $this->assertEquals(false,$result);
    }*/

   
}
?>