<?php
session_start();
$page=$_GET['page'];
if($page=="Admin_hoRequest")
    $_SESSION['ho_id']=$_GET['ho_Req_id'];
else if($page=="Admin_tcRequest")
    $_SESSION['tt_id']=$_GET['tt_id'];
else if ($page=="Admin_tcRegister")
    $_SESSION['tt_id']=$_GET['tt_id'];
else if ($page=='Admin_tcView')
{
    $_SESSION['tt_id']=$_GET['tt_id'];
    $_SESSION['sid']=$_GET['sid'];
}
else if ($page=='Admin_tcComplete')
{
    $_SESSION['tt_id']=$_GET['tt_id'];
}
else if ($page=='Admin_trView')
{
    $_SESSION['tr_id']=$_GET['tr_id'];
}
else if ($page=='Admin_teView')
{
    $_SESSION['te_id']=$_GET['te_id'];
}
else if ($page=='Certificate_print')
{
    $_SESSION['r_id']=$_GET['r_id'];
}
else if ($page=='SingleTCTrainee')
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
else if ($page=='Admin_tcApprove')
{
    $_SESSION['tt_id']=$_GET['tt_id'];
}
else if ($page=='Admin_SingleBlocked')
{
    $_SESSION['te_id']=$_GET['te_id'];
}

?>