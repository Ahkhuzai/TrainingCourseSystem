<?php
include '../libs/smarty/libs/Smarty.class.php'; 
require_once '../RegistrationModule.php';
session_start();
error_reporting(0);
$smarty=new Smarty();
$trMan = new RegistrationModule ();

if (isset($_SESSION['user_id'])) {
    $userId=$_SESSION['user_id'];
    if(isset($_POST['addHandout']))
    {
        
        if(isset($_POST['Tname']) && !empty(trim($_POST['Tname'])))
        {
            $tname=$_POST['Tname'];
            $addDate=date('y-m-d');
            if (isset($_FILES['handout'])) { 
                $uploaddir = '../uploads/handouts/req/';
                for ($i = 0; $i < 4; $i++)
                {   
                    $FileType = pathinfo($_FILES["handout"]["name"][$i],PATHINFO_EXTENSION);
                    $uploadfile = $uploaddir . md5($_FILES['handout']['tmp_name'][$i]). date("Y-m-d") . '.' . $FileType;  
                    if (file_exists($uploadfile))
                        $smarty->assign('msg', 'الملف محمل مسبقا'); 
                    else
                    {
                        //check file extention 
                        if($FileType=='pdf'||$FileType=='pptx'||$FileType=='docx'||$FileType=='doc'||$FileType=='jpg'||$FileType=='png'||$FileType=='gif'||
                            $FileType=='txt'||$FileType=='rtf'||$FileType=='xlsx'||$FileType=='ppt'||$FileType=='jpeg')
                            //check file size 
                            if($_FILES['handout']['size'][$i]<=500000)
                            {
                                if (move_uploaded_file($_FILES['handout']['tmp_name'][$i], $uploadfile)) {
                                    $url[$i]=$uploadfile;
                                } else {
                                    $smarty->assign('msg','حدث خطأ اثناء تحميل الملف');
                                }
                            }
                            else 
                            {
                            echo $smarty->assign('msg','حجم اللمف كبير جدا');
                            }
                        else
                            $smarty->assign('msg','امتداد الملف غير مدعوم');
                    }
                }
                $tr_ho=$url[0];
                $te_ho=$url[1];
                $pres=$url[2];
                $sci_ch=$url[3];
            }
            
            if($tr_ho && $te_ho && $pres && $sci_ch )
            {   
                $sid=1;
                $result=$trMan->addHandoutOnly($tname,$tr_ho,$te_ho,$pres,$sci_ch, $addDate,$sid,$userId);
                if($result)
                    $smarty->assign('added', 'تمت الاضافة بنجاح'); 
            }               
        }
        else 
            $smarty->assign('msg', 'يجب تعبئة كافة الحقول'); 
    }
    $smarty->display('addHandoutOnly.tpl');
} else {
    $smarty->assign('msg', 'غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>