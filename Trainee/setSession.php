<?php
session_start();
$page=$_GET['page'];
 if ($page=='SingleTCTrainee')
{
    $_SESSION['tt_id']=$_GET['tt_id'];
}
else if ($page=='SingleTCCompleteTrainee')
{
    $_SESSION['tt_id']=$_GET['tt_id'];
    $_SESSION['r_id']=$_GET['r_id'];
}
else if ($page=='SingleProgram')
{
    $_SESSION['program_id']=$_GET['program_id'];
}
else if ($page=='tcForRate')
{
    $_SESSION['tt_id']=$_GET['tt_id'];
    $_SESSION['r_id']=$_GET['rid'];
}
else if ($page=='SingleRegistration')
{
    $_SESSION['tt_id']=$_GET['tt_id'];
    $_SESSION['sid']=$_GET['sid'];
    $_SESSION['rid']=$_GET['r_id'];
}
else if ($page=='SingleOldTC')
{
    $_SESSION['tt_id']=$_GET['tt_id'];
}
?>