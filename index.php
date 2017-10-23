<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once 'AttendanceRepo.php';

$attendance = new AttendanceRepo();
       echo  $result = $attendance->save(0,1,1,'1950-01-01 05:55:55');
?>
