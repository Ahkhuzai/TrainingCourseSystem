<?php
include 'libs/smarty/libs/Smarty.class.php';
include 'User.php';
include 'Persona.php';

$smarty=new Smarty();
$persona=new Persona();
$user=new User();
error_reporting(0);
$usrID=2;

$alerady_Trainer=$user->isTrainer($usrID);

if(!isset($_POST['becomeTrainer']))
    if ($alerady_Trainer) {
        header("Location:contract.php");
    } else
        $smarty->display("becomeTrainer.tpl");

if (isset($_POST['becomeTrainer'])) {
    if(!empty(trim($_POST['major']))&& !empty(trim($_POST['special']))&& !empty(trim($_POST['quali'])))
    {       
    $major=$_POST['major'];
    $specail=$_POST['special'];
    $qualification=$_POST['quali'];
    $resumeDir="uploads/resume/resume1.pdf";
    $signtureDir="uploads/signture/resume1.jpg"; 
    $result = $persona->addTrainer($usrID,$major,$specail,$qualification,$resumeDir,$signtureDir);
    if($result)
        $smarty->display("contract.tpl");
    else {
        $smarty->assign('msg',$result);
        $smarty->display("becomeTrainer.tpl");
        }
    } 
}

    
?>