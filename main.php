<?php

include 'Assist/Config/smarty/libs/Smarty.class.php';
require_once 'User.php';
error_reporting(0);
$smarty=new Smarty();
session_start();

if (isset($_SESSION['usrname']) && isset($_SESSION['usrpassword']) && isset($_SESSION['mode'])) {
    if ($_SESSION['mode'] == 'Trainee') {
        $smarty->assign ('msg','trainee'); 
        $tamplate = 'main_trainee.tpl';
    } else if ($_SESSION['mode'] == 'Trainer') {
        $smarty->assign ('msg','trainer'); 
        $tamplate = 'main_trainer.tpl';
    } else {
        $smarty->assign ('msg','لقد واجهت خطأ اثناء نقلك للصفحة المرغوبة  نعتذر على الخطأ الغير المقصود'); 
        $tamplate = 'error.tpl';
    }
}

$smarty->display($tamplate);

?>