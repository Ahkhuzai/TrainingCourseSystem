<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testUser
 *
 * @author ahkhuzai
 */
use PHPUnit\Framework\TestCase;
require_once '..\User.php';
class testUser extends TestCase {
    function testValidatePass()
    {
        $user = new User();
        $result = $user->validateUser("ahkhuzai", md5("2323"));
        $this->assertEquals(TRUE,$result);
    }
    
    function testValidateFail()
    {
        $user = new User();
        $result = $user->validateUser("ahkhuzai", "2323");
        $this->assertEquals(FALSE,$result);
    }
    
    function testIsTrainerPass()
    {
        $user = new User();
        $result = $user->isTrainer(1);
        $this->assertEquals(TRUE,$result);
    }
    
    function testIsTrainerFail()
    {
        $user = new User();
        $result = $user->isTrainer(2);
        $this->assertEquals(FALSE,$result);
    }
    
}
