<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'UserRepo.php';
require 'TrainingCourseRepo.php';
require 'TimetableRepo.php';
require 'RegistrationRepo.php';
require 'RateDRepo.php';
require 'ProgramRepo.php';
require 'HandoutTcRepo.php';
require 'HandoutReqRepo.php';
require 'PersonaRepo.php';
require 'AttendanceRepo.php';
$tester = new UserRepo ();

print_r( $tester->fetchByUsername('ahkhuzai'));
print_r( $tester->fetchBystatus_id(8));

$tester = new TrainingCourseRepo ();

print_r($tester->fetchByProgramId(1));

$tester = new TimetableRepo();

print_r($tester->fetchByTc_id(62));
print_r($tester->fetchByTr_id(1));

$tester = new RegistrationRepo();

print_r($tester->fetchByTt_id(67));
print_r($tester->fetchByCertificate_approve(0));
print_r($tester->fetchByUsr_id(4));

$tester = new RateDRepo();
print_r($tester->fetchByTt_id(67));

$tester = new ProgramRepo();
print_r($tester->fetchBystatus_id(2));

$tester = new  HandoutTcRepo();
print_r($tester->fetchByTt_id(67));

$tester = new  HandoutReqRepo();
print_r($tester->fetchByTr_id(2));

$tester = new AttendanceRepo();
$tester->fetchByTt_id(67);
$tester->fetchByUsr_id(2);

$tester = new PersonaRepo();
print_r($tester->fetchByUqu_id('4380201'));
print_r($tester->fetchByUsr_id(2));
print_r($tester->fetchByGender('female'));
print_r($tester->fetchByIsTrainer(0));