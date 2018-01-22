<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
$user = new RegistrationModule();
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();

if(isset($_SESSION['user_id']))
{
    $user_id=$_SESSION['user_id'];
    $isAdmin=$user->isAdmin($user_id);           
    if($isAdmin)
    {   
        if(isset($_POST['back']))
            header('Location:AdminProgramView.php');
 
        $p_id=$_SESSION['p_id'];
        $psid = $_SESSION['psid'];

        $result=$tcMan->getProgramInfo($p_id);
        $smarty->assign('name',$result['name']);
        $smarty->assign('abstract',$result['abstract']);
        $smarty->assign('goals',$result['goals']);
        $smarty->assign('hours',$result['hours']);
        $smarty->assign('trname',$result['tr_ar_name']);
        if($psid==2)
        {
        //getTC in Program
        $resultTC = $tcMan->getTcInProgram($p_id);
        if($resultTC)
        $smarty->assign('tcList', $resultTC);
        else
        {
            $resultTC[0]['name']='لا يوجد دورات  مضافة لهذا البرنامج';
            $smarty->assign('tcList',$resultTC);
        }
            
        $smarty->display("Single_Admin_ProgramView.tpl"); 
        }
        if($psid==9)
        {
            $smarty->display("Single_Admin_ProgramView_Complete.tpl"); 
        }
        if($psid==10 || $psid==11)
        {
            $smarty->display("Single_Admin_ProgramView_Avi_UnAvi.tpl"); 
        }

    } 
    else
    {
    	header("Location:AdminLogin.php");
    }
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>