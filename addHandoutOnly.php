<?php
include 'libs/smarty/libs/Smarty.class.php'; 
require_once 'TrainingCourse.php';
error_reporting(0);
$smarty=new Smarty();
$tcMan = new TrainingCourse ();
session_start();
if (isset($_SESSION['user_id'])) {
    
    if(isset($_POST['addHandout']))
    {
        if(isset(trim($_POST['Tname'])))
        {
            $tname=$_POST['Tname'];
            
            if($tr_ho && $te_ho && $pres && $sci_ch )
                $tcMan->addHandoutOnly($tname,$tr_ho,$te_ho,$pres,$sci_ch);
            else 
                $smarty->assign('msg', 'يجب تعبئة كافة الحقول');
                
        }
    }
    $smarty->display('addHandoutOnly.tpl');
} else {
    $smarty->assign('msg', 'غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>