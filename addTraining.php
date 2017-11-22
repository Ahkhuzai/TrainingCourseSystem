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
                if ($_FILES['cv']['error'] == 0 && $_FILES['sign']['error'] == 0 ) {   
                    $uploaddir = 'uploads/';
                   
                    $cvFileType = pathinfo($_FILES["cv"]["name"],PATHINFO_EXTENSION);
                    $cvuploadfile = $uploaddir."cv/".$usrID.' - '.'cv - '.date("Y-m-d").'.'.$cvFileType; 
                    
                    $signFileType = pathinfo($_FILES["sign"]["name"],PATHINFO_EXTENSION);
                    $signuploadfile = $uploaddir."signeture/".$usrID.' - '.'sign - '.date("Y-m-d").'.'.$signFileType;  
                    
                    if (file_exists($cvuploadfile)||file_exists($signuploadfile))
                        $smarty->assign('msg', "الملف محمل مسبقاً");
                    else
                    {
                        //check file extention 
                        if(($_FILES['cv']['type']=='application/pdf' || $_FILES['cv']['type']=='application/vnd.wordperfect' || $_FILES['cv']['type']=='application/msword' )
                                &&(strpos($_FILES['sign']['type'], 'image/') > -1))
                                //check file size 
                                if($_FILES['cv']['size']<=500000 && $_FILES['sign']['size']<=500000 )
                                {
                                    if (move_uploaded_file($_FILES['cv']['tmp_name'], $cvuploadfile) && move_uploaded_file($_FILES['sign']['tmp_name'], $signuploadfile) ) {
                                        $major = $_POST['major'];
                                        $specail = $_POST['special'];
                                        $qualification = $_POST['quali'];
                                        $resumeDir = $cvuploadfile;
                                        $signtureDir = $signuploadfile;
                                        $result = $persona->addTrainer($usrID, $major, $specail, $qualification, $resumeDir, $signtureDir);
                                        if ($result)
                                            $smarty->display("contract.tpl");
                                        else {
                                            $smarty->assign('msg', 'حدث خطأ اثناء معالجة طلبك الرجاء المحاولة مرة اخرى');
                                            $smarty->display("unAuthorized.tpl");
                                        }
                                    } else {
                                        $smarty->assign('msg', "حدث خطأ اثناء رفع الملف - الرجاء المحاولة لاحقا");
                                    }
                                }
                                else 
                                    $smarty->assign('msg', "حجم الملف كبير جدأ");
                        else
                            $smarty->assign('msg', "امتداد الملف غير مدعوم");
                    }
                }
                else  
                {
                    $smarty->assign('msg',$_FILES['cv']['error']);
                    $smarty->assign('msg',$_FILES['sign']['error']);
                
                }
        } else {
            $smarty->assign('msg', 'يجب إكمال كافة الحقول');
            $smarty->display("becomeTrainer.tpl");
        }
        $smarty->display("becomeTrainer.tpl");
    }
}
else 
    {
        $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
        $smarty->display("unAuthorized.tpl");
    }
?>