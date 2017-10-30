<?php
include 'Assist/Config/smarty/libs/Smarty.class.php';
require_once 'User.php';


$smarty=new Smarty();
$user = new User();
session_start();  
if(isset($_POST['submit']))
{
    print_r($_FILES);
  
    if(!empty($_POST['major']) && !empty($_POST['special']) && !empty($_FILES['resume']))
    {
        
        if(isset($_SESSION['usrname']) && isset($_SESSION['usrpassword']))
        {
            $usrName=$_SESSION['usrname'];
            $usrPassword=md5($_SESSION['usrpassword']);
            $isUser =$user->validateUser($usrName, $usrPass);
            if($isUser)
            {
echo $_FILES['resume'];
            }
        }
    }
    else
        $smarty->assign('msg', 'الرجاءتعبئة كافة الحقول');
}
$smarty->display("newUserUqu.tpl");

?>