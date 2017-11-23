<?php
require_once 'TrainingCourse.php';
use PHPUnit\Framework\TestCase;

class trainingCourseTest extends TestCase {
    
    function testAddTraining()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->addTraining(0, 1, null, "testing", "testing", "testing", 5, "2017-09-12", "2017-09-22", 50, 1, 20, "testing", date('y-m-d'), "12:09:02", "-", 80, 80);
        $this->assertEquals(TRUE,$result);
    }
    
    function testgetOldTrainingByUserID()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->getOldTrainingByUserID(1);
        $this->assertEquals(TRUE,is_array($result));
    }
    
    function testgetTrainingRequestByUserID()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->getTrainingRequestByUserID(1);
        $this->assertEquals(TRUE,is_array($result));
    }
    
    function testgetSingleTrainingCourseInfo()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->getSingleTrainingCourseInfo(9);
        $this->assertEquals(TRUE,is_array($result));
    }
    
    function testgetSingleTrainingCourseRate()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->getSingleTrainingCourseRate(11);
        $this->assertEquals(TRUE,is_array($result));
    }
    
    function testgetTrainingWaitingForCertificate()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->getTrainingWaitingForCertificate(1);
        $this->assertEquals(TRUE,is_array($result));
    }
    
    function testgetRegisterTrainee()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->getRegisterTrainee(11);
        $this->assertEquals(TRUE,is_array($result));
    }
    
    function testapproveCertificate()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->approveCertificate(2,1);
        $this->assertEquals(TRUE,$result);
    }
    
    function testdeleteCourse()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->deleteCourse(61);
        $this->assertEquals(TRUE,$result);
    }
    
    function testaddHandoutOnly()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->addHandoutOnly('$tname','$tr_ho','$te_ho','$pres','$sci_ch','2017-02-02',1,1);
        $this->assertEquals(TRUE,$result);
    }
    
    function testgetHORequestByUserID()
    {
        $tcMan= new TrainingCourse();
        $result = $tcMan->getHORequestByUserID(1);
        $this->assertEquals(TRUE,is_array($result));
    }
    
}
