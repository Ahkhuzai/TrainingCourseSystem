<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testPersonaRepo
 *
 * @author ahkhuzai
 */
use PHPUnit\Framework\TestCase;
require_once '..\PersonaRepo.php';
class testPersonaRepo extends TestCase {
    
    public function testFindByID_Found()
    {
        $user = new PersonaRepo();
        $result=$user->fetchById(1);
        $this->assertEquals(1,$result->id);
    }
    
    public function testFindByID_NotFound()
    {
         $user = new PersonaRepo();
        $result=$user->fetchById(1000);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testFetchAll_pass()
    {
        $user = new PersonaRepo();
        $result=$user->fetchAll();
        $this->assertEquals(True, is_array($result));
    }
    
   
    public function testSave_AddNew_pass()
    {
        $user = new PersonaRepo();
        $result = $user->save(0,1,4321001,"احلام الخزاعي","Ahlam Alkhuzai","0580400703","CS","upload/resume/1.pdf","upload/images/sign/1.jpg","bla bla bla bla bla bla","cs","special",1,1);
        $this->assertEquals(True,$result);
    }
    
    public function testSave_AddNew_fail()
    {
         $user = new PersonaRepo();
        $result = $user->save(0,1,null,"احلام الخزاعي","Ahlam Alkhuzai","0580400703","CS","upload/resume/1.pdf","upload/images/sign/1.jpg","bla bla bla bla bla bla","cs","special",null,1);
        $this->assertEquals(FALSE,$result);
    }
    
    public function testSave_Update_pass()
    {
         $user = new PersonaRepo();
        $result = $user->save(1,1,4365201,"احلام الخزاعي","Ahlam Alkhuzai","0580400703","CS","upload/resume/1.pdf","upload/images/sign/1.jpg","bla bla bla bla bla bla","cs","special",1,1);
        $this->assertEquals(TRUE,$result);
    }
    
    public function testDelete_pass()
    {
        $user = new PersonaRepo();
        $result = $user->delete(1);
        $this->assertEquals(1,$result);
    }
    
    public function testDelete_fail()
    {
        $user = new PersonaRepo();
        $result = $user->delete(255);
        $this->assertEquals(false,$result);
    }

}
?>
