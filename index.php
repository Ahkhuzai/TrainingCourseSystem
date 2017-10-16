<?php
require_once('Assist/config/smarty/libs/Smarty.class.php');
require_once 'User.php';
require_once 'Trainee.php';
$smarty = new Smarty();
$userO= new User();
$trainee=new Trainee();

 
if($trainee->isRegestred(1,2)=="")
{
   $reg_id=$trainee->registerForCourse(1,2);
   $trainee->ExcusedForCourse($reg_id);
}


/* 
$result= $userO->validateUser("ahlamnam","test@gmai.com",md5("3124"));
if($result>0)
   echo $result;

echo $userO->neverUseUsername("Ahlamnam");
echo $userO->neverUseUsername("hassan");

echo $userO->neverUseEmail("ahalkhuzai.uqu@gmail.com");
echo $userO->neverUseEmail("hassan@g.com");

echo $userO->validEmail("hassan@g.com");
echo $userO->validEmail("j.com");*/

$smarty->display("index.tpl");
?>

