<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once 'User.php';
require_once 'Rate.php';
$user=new User();
$user->getUser(1);
$user->getUser(100);
$user->getUserByUsername("ahlamnam");
$user->getUserByUsername("AHLAM");  
$user->deleteUser(10);
$user->AddOrUpdateUser('ahlamnam', '123123123123', 'we@we.com');
$user->AddOrUpdateUser('ahlamnam0', '123123123123', 'we@we.ocom');

$rate=new Rate();
$rate->getValueOfRate("agree");


?>
