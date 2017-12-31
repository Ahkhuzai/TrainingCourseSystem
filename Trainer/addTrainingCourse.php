<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourse.php';
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourse();

if(isset($_SESSION['user_id']))
{
    if(isset($_POST['back']))
        header('Location:index.php');
    if(isset($_POST['saveTraining']))
    {
        if (!empty(trim($_POST['Tname']))) {
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
                            } else {
                                $smarty->assign('msg', 'حدث خطأ اثناء التحميل ');
                            }
                        } else {
                            $smarty->assign('msg', 'حجم الملف كبير جدا');
                        } else {
                        $smarty->assign('msg', 'امتداد الملف غير مدعوم');
                    }
                }
            }
            $tt_id = 0;
            $pid=null;
            $Tname = $_POST['Tname'];
            $eng_name = $_POST['engname'];
            $Tabstract = $_POST['abstract'];
            $Tgoals = $_POST['Goals'];
            $Thours = $_POST['Hours'];
            $Tstart = $_POST['stime'];
            $Tend = $_POST['etime'];
            $Tcapacity = 0;
            $Tstatus = 6;
            $type = $_POST['type'];
            $Tavailable_seat = $Tcapacity;
            $addDate = date("Y-m-d");
            $startAt = '00:00:00';
            $location = "-";
            $usrId = $_SESSION['user_id'];
            $tc_avg = 0;
            $result=$tcMan->addTrainingCourse($tt_id,$usrId,$pid,$Tname,$eng_name,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg,$type);                                  
            if ($result)
            {
                echo '<script>alert(تم اضافة الطلب بنجاح لمتابعة الطلب , الرجاء التوجه الى صفحة استعراض الطلبات)</script>';
                echo '<script>window.location="index.php"; </script>';
            }
            else 
                $smarty->assign('msg', $result);
                               
        } else {
            $smarty->assign('msg', 'يجب إدخال اسم الدورة لحفظ الطلب');
        }
    }
    if(isset($_POST['addTraining']))
    {
        if (!empty(trim($_POST['Tname'])) && !empty(trim($_POST['abstract'])) && !empty(trim($_POST['Goals'])) && !empty(trim($_POST['Hours'])) && !empty(trim($_POST['stime'])) && !empty(trim($_POST['etime'])) && !empty(trim($_POST['type'])) ) {
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
                                $pid=null;
                                $Tname = $_POST['Tname'];
                                $eng_name = $_POST['engname'];
                                $Tabstract = $_POST['abstract'];
                                $Tgoals = $_POST['Goals'];
                                $Thours = $_POST['Hours'];
                                $Tstart = $_POST['stime'];
                                $Tend = $_POST['etime'];
                                $Tcapacity = 0;
                                $Tstatus = 1;
                                $type = $_POST['type'];
                                $Tavailable_seat = $Tcapacity;
                                $addDate = date("Y-m-d");
                                $startAt = '00:00:00';
                                $location = "-";
                                $usrId = $_SESSION['user_id'];
                                $tc_avg = 0;
                                $result=$tcMan->addTrainingCourse($tt_id,$usrId,$pid,$Tname,$eng_name,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg,$type);                                  
                                if ($result)
                                {
                                    echo '<script>alert(تم اضافة الطلب بنجاح لمتابعة الطلب , الرجاء التوجه الى صفحة استعراض الطلبات)</script>';
                                    echo '<script>window.location="index.php"; </script>';
                                }
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
    $smarty->display("addTrainingCourse.tpl");
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>