<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();

if(isset($_SESSION['user_id']))
{
    $tt_id=$_SESSION['tt_id'];
    $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
    $smarty->assign('name',$result['tc_ar_name']);
    $smarty->assign('eng_name',$result['tc_eng_name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('end_date',$result['end_date']);
   
    if($result['duration']!=0)
        $smarty->assign('hours',$result['duration']);

    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
    if($result['type']=="")
        ;
    else      
        $smarty->assign('type',$result['type']);
    if ($result['url'] == "") {
        $smarty->assign('url_act', "لم تقم بتحميل الحقيبة التدريبية بعد");
        $smarty->assign('label', "");
    } else {
        $smarty->assign('url_act', '<a href="' . $result['url'] . '"> لرؤية الحقيبة التدريبية التي سبق رفعها مسبقا اضغط هناَ </a>');
        $smarty->assign('label', "لتحديث الحقيبة التدريبية");
    }
    $smarty->assign('url',$result['url']);
    /////////////////////////////////////////////
    
    if(isset($_POST['back']))
        header('Location:viewRequest.php');
    
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
            else
                $handoutDir=$result['url'];
            
            $tt_id = $_SESSION['tt_id'];
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
                echo '<script>alert("تم حفظ الطلب بنجاح , الرجاء التوجه لصفحة استعراض الطلبات لمتابعة حالة الطلب")</script>';
                echo '<script>window.location="viewRequest.php"; </script>';
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
            if ($_FILES['hout']['error'] == 4 && $result['url'] == "") {
                $smarty->assign('msg', 'يجب تحميل الحقيبة التدريبية');
            }
            else if ($_FILES['hout']['error'] == 4 && $result['url'] != "")
            {
                $handoutDir=$result['url'];
                $tt_id = $_SESSION['tt_id'];
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
                    echo '<script>alert("تم حفظ الطلب بنجاح , الرجاء التوجه لصفحة استعراض الطلبات لمتابعة حالة الطلب")</script>';
                    echo '<script>window.location="viewRequest.php"; </script>';
                }
                else 
                    $smarty->assign('msg', $result);
            }
            else {
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
                                $tt_id = $_SESSION['tt_id'];
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
                                    echo '<script>alert("تم حفظ الطلب بنجاح , الرجاء التوجه لصفحة استعراض الطلبات لمتابعة حالة الطلب")</script>';
                                    echo '<script>window.location="viewRequest.php"; </script>';
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
            }
            
        }
        
        else {
            $smarty->assign('msg', 'يجب إكمال كافة الحقول');
        }
    }
    $smarty->display("SingleTCRequest_InComplete.tpl");
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>