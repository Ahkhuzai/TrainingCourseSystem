<?php
include 'Assist/Config/smarty/libs/Smarty.class.php';
require_once 'User.php';

$smarty=new Smarty();
$user = new User();

if (isset($_SESSION)) {
    session_destroy();
}
if(isset($_POST['login']))
{
    if(!empty(trim($_POST['usrName'])) && !empty(trim($_POST['usrPass'])))
    {
        $usrName=$_POST['usrName'];
        $usrPassword=md5($_POST['usrPass']);
        $isUser = $user->validateUser($usrName,$usrPassword);
        if($isUser)
        {
            if($_POST['isTrainer']==='true')
            {
                $isTrainer=$user->isTrainer($user->getId());            
                if($isTrainer)
                {
                    session_start();    
                    $_SESSION['usrname']=$usrName;
                    $_SESSION['usrpassword']= $usrPassword ;
                    $_SESSION['mode']='Trainer';

                    header ('Location:main.php');
                }
                else 
                    $smarty->assign ('msg','انت غير مسجل لدينا كمتدرب ');
            }
            else 
            {
                session_start();    
                $_SESSION['usrname']=$usrName;
                $_SESSION['usrpassword']= $usrPassword ;
                $_SESSION['mode']='Trainee';
                header ('Location:main.php');
            }
        }
        else 
            $smarty->assign ('msg','الرجاء التأكد من بيانات الدخول '); 
    }
    else 
        $smarty->assign ('msg','الرجاء عدم ترك الحقول فارغة'); 
}
else if (isset($_POST['newUser']) && $_POST['isTrainer']==='true' )
{
    session_start();  
    $usrName=$_POST['usrName'];
    $usrPassword=md5($_POST['usrPass']);
    $_SESSION['usrname']=$usrName;
    $_SESSION['usrpassword']= $usrPassword ;
    $_SESSION['mode']='Trainer';
    header("location:newUsr.php");
}
else
$smarty->display("index.tpl");
?>