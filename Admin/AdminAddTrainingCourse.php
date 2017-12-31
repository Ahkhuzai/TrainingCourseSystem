<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();

if(isset($_SESSION['user_id']))
{
    if(isset($_POST['back']))
        header('Location:AdminMain.php');
    if(isset($_POST['addTraining']))
    {   
        if (!empty(trim($_POST['Tname'])) && !empty(trim($_POST['tr_id'])) && !empty(trim($_POST['abstract'])) && !empty(trim($_POST['Goals'])) && !empty(trim($_POST['Hours'])) && !empty(trim($_POST['stime'])) && !empty(trim($_POST['etime'])) && !empty(trim($_POST['type'])) && !empty(trim($_POST['start_at'])) && !empty(trim($_POST['capacity'])) && !empty(trim($_POST['Location']))) {
            if ($_FILES['hout']['error'] == 0) {
                $uploaddir = '../uploads/handouts/tc/';
                $FileType = pathinfo($_FILES["hout"]["name"], PATHINFO_EXTENSION);
                $uploadfile = $uploaddir . md5($_FILES['hout']['tmp_name']). date("Y-m-d") . '.' . $FileType;
                if (file_exists($uploadfile))
                    $smarty->assign('msg', 'الملف تم تحميلة مسبقا');
                else {
                    if ($_FILES['hout']['type'] == 'application/pdf' || $_FILES['hout']['type'] == 'application/vnd.wordperfect' || $_FILES['hout']['type'] == 'application/msword')
                    //check file size 
                        if ($_FILES['hout']['size'] <= 500000) {
                            if (move_uploaded_file($_FILES['hout']['tmp_name'], $uploadfile)) {
                                $handoutDir = $uploadfile;
                                $tt_id = 0;
                                if($_POST['p_id']=="")
                                    $pid=null;
                                else
                                    $pid=$_POST['p_id'];
                                $Tname = $_POST['Tname'];
                                $eng_name = $_POST['engname'];
                                $Tabstract = $_POST['abstract'];
                                $Tgoals = $_POST['Goals'];
                                $Thours = $_POST['Hours'];
                                $Tstart = $_POST['stime'];
                                $Tend = $_POST['etime'];
                                $Tcapacity = $_POST['capacity'];
                                $Tstatus = 2;
                                $type = $_POST['type'];
                                $Tavailable_seat = $Tcapacity;
                                $addDate = date("Y-m-d");
                                $startAt = $_POST['start_at'];
                                $location = $_POST['Location'];
                                $usrId = $_POST['tr_id'];
                                $tc_avg = 0;
                                $result=$tcMan->addTrainingCourse($tt_id,$usrId,$pid,$Tname,$eng_name,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg,$type);                                  
                                if ($result)
                                    $smarty->assign('added', 'تم اضافة الطلب بنجاح');
                                else 
                                    $smarty->assign('msg', $result);
                            } else {
                                $smarty->assign('msg', 'حدث خطأ اثناء التحميل ');
                            }
                        } else {
                            $smarty->assign('msg', 'حجم الملف كبير جدا');
                        } else {
                        $smarty->assign('msg', 'امتداد الملف غير مدعوم');
                    }
                }
            } else {
                $smarty->assign('msg', 'يجب اضافة الحقيبة التدريبية');
            }
        } else {
            $smarty->assign('msg', 'يجب إكمال كافة الحقول');
        }
    }
    $smarty->display("AdminAddTrainingCourse.tpl");
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>