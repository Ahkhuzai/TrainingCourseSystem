<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
$smarty=new Smarty();
session_start(); 
error_reporting(0);
$tcMan=new TrainingCourseModule();
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    if(isset($_POST['addTraining']))
    {   
        if ( !empty(trim($_POST['tc_id'])) &&!empty(trim($_POST['tr_id'])) && !empty(trim($_POST['Hours'])) && !empty(trim($_POST['stime'])) && !empty(trim($_POST['etime'])) && !empty(trim($_POST['type'])) && !empty(trim($_POST['start_at'])) && !empty(trim($_POST['capacity'])) && !empty(trim($_POST['Location']))) {
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
                                $tc_id=$_POST['tc_id'];
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
                                $result=$tcMan->rePresentTrainingCourse($tt_id,$usrId,$tc_id,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg,$type);                                  
                                if ($result)
                                    echo "<script>alert('تم اضافة الدورة بنجاح');</script>";
                                else 
                                    $smarty->assign('msg', "حدث خطأ اثناء تنفيذ طلبك , الرجاء المحاولة لاحقا");
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
    if(isset($_POST['back']))
        header('Location:AdminMain.php');
    $smarty->display("rePresentTC.tpl");
}
?>