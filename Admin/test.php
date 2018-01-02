<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';

$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();

$isOpen = $trMan->isTCAttendanceOpen(7);
echo $isOpen;
?>
