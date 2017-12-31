<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../RegistrationModule.php';
$regMan=new RegistrationModule();
$smarty=new Smarty();
error_reporting(0);
session_start();
if(isset($_SESSION['user_id']))
{
    if (isset($_POST['back']))
    {
        header('Location:../main/index.php');
    }
    if (isset($_POST['AddTrainer']))
    {
      
        if ($_FILES['cv']['error'] == 0 && $_FILES['sign']['error'] == 0 ) {   
            $uploaddir = '../uploads/';
            $cvFileType = pathinfo($_FILES["cv"]["name"],PATHINFO_EXTENSION);
            $cvuploadfile = $uploaddir."cv/".md5(date('Y-m-d H:i:s:u')).'-'.'cv.'.$cvFileType; 
            
            $signFileType = pathinfo($_FILES["sign"]["name"],PATHINFO_EXTENSION);
            $signuploadfile = $uploaddir."signeture/".md5(date('Y-m-d H:i:s:u')).'-'.'sign.'.$signFileType;  

            if (file_exists($cvuploadfile)||file_exists($signuploadfile))
                $smarty->assign('msg', "الملف محمل مسبقاً");
            else
            {
                //check file extention 
                if (($_FILES['cv']['type'] == 'application/pdf' || $_FILES['cv']['type'] == 'application/vnd.wordperfect' || $_FILES['cv']['type'] == 'application/msword' ) && (strpos($_FILES['sign']['type'], 'image/') > -1)) {
                //check file size 
                    if ($_FILES['cv']['size'] <= 500000 && $_FILES['sign']['size'] <= 500000) {
                        if (move_uploaded_file($_FILES['cv']['tmp_name'], $cvuploadfile) && move_uploaded_file($_FILES['sign']['tmp_name'], $signuploadfile)) {
                            $resumeDir = $cvuploadfile;
                            $signtureDir = $signuploadfile;
                            $result = $regMan->addTrainer($_SESSION['user_id'], $resumeDir, $signtureDir);
                            if ($result) {
                                echo '<script>alert("تمت اضافتك  بنجاح");</script>';
                                echo '<script>window.location="index.php"; </script>';
                            } else {
                                $smarty->assign('msg', 'حدث خطأ اثناء معالجة طلبك الرجاء المحاولة مرة اخرى');
                                $smarty->display("unAuthorized.tpl");
                            }
                        } else {
                            $smarty->assign('msg', "حدث خطأ اثناء رفع الملف - الرجاء المحاولة لاحقا");
                        }
                    } else
                        $smarty->assign('msg', "حجم الملف كبير جدأ");
                } else
                    $smarty->assign('msg', "امتداد الملف غير مدعوم");
            }
        }
        else  
        {
            $smarty->assign('msg',$_FILES['cv']['error']);
            $smarty->assign('msg',$_FILES['sign']['error']);

        }
          
    }
    
      $smarty->display("becomeTrainer.tpl");
}
else 
    {
        $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
        $smarty->display("unAuthorized.tpl");
    }
?>