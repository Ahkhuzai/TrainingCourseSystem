<?php
include 'libs/smarty/libs/Smarty.class.php';
include 'User.php';
include 'Persona.php';

$smarty=new Smarty();
$persona=new Persona();
$user=new User();
//error_reporting(0);
session_start();
if(isset($_SESSION['user_id']))
{
    $usrID=$_SESSION['user_id'];
    $alerady_Trainer=$user->isTrainer($usrID);
    if (!isset($_POST['becomeTrainer'])) {
        if ($alerady_Trainer) {
            header("Location:contract.php");
        } else {
            $smarty->display("becomeTrainer.tpl");
        }
    }

    if (isset($_POST['becomeTrainer']))
    {
        if (!empty(trim($_POST['major'])) && !empty(trim($_POST['special'])) && !empty(trim($_POST['quali']))) {
            $major = $_POST['major'];
            $specail = $_POST['special'];
            $qualification = $_POST['quali'];
            //$resumeDir = $_POST['cv_url'];
            //$signtureDir = $_POST['signature_url'];
            $resumeDir = "";
            $signtureDir = "";
            $result = $persona->addTrainer($usrID, $major, $specail, $qualification, $resumeDir, $signtureDir);
            if ($result)
                $smarty->display("contract.tpl");
            else {
                $smarty->assign('msg', 'حدث خطأ اثناء معالجة طلبك الرجاء المحاولة مرة اخرى');
                $smarty->display("unAuthorized.tpl");
            }
        } else {
            $smarty->assign('msg', 'يجب إكمال كافة الحقول');
            $smarty->display("becomeTrainer.tpl");
        }
    }
}
else 
    {
        $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
        $smarty->display("unAuthorized.tpl");
    }
?>