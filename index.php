<?php
require_once('Assist/config/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
if(isset($_POST['login']))
{
    //here goes account validation 
    $userId=1;
    if(true)
    {
        session_start();
        $_SESSION['userId']=$userId;
        if($_POST['trainer']=='true')
        {
            $_SESSION['isTrainer']='ture';
            header("Location:trainerMain.php");
        }
        else 
        {
            $_SESSION['isTrainer']='false';
            header("Location:traineeMain.php");
        }
            
    }
}
$smarty->display("index.tpl");
?>

