<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once 'UserRepo.php';
$user = new UserRepo();
$result=$user->fetchAll();
ECHO $result = $user->save(0,'$use44rname','$password','$5email');

     



?>
