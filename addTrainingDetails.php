<?php
include 'libs/smarty/libs/Smarty.class.php';
include 'TrainingCourse.php';

$smarty=new Smarty();
$trCourse = new TrainingCourse();
error_reporting(0);
session_start();
if(isset($_SESSION['user_id']))
{
    $usrId=$_SESSION['user_id'];

    if(isset($_POST['saveTraining']) )
    {       
        if(!empty(trim($_POST['Tname'])))
        {   
                if ($_FILES['hout']['error'] == 0) {   
                    $uploaddir = 'uploads/handouts/tc/';
                    $FileType = pathinfo($_FILES["hout"]["name"],PATHINFO_EXTENSION);
                    $uploadfile = $uploaddir .$usrId.' - '.'hout - '.date("Y-m-d").'.'.$FileType;  
                    if (file_exists($uploadfile))
                        $smarty->assign ('msg','الملف تم تحميلة مسبقا');
                    else
                    {
                        //check file extention 
                        if($_FILES['hout']['type']=='application/pdf' || $_FILES['hout']['type']=='application/vnd.wordperfect' || $_FILES['hout']['type']=='application/msword' )
                                //check file size 
                                if($_FILES['hout']['size']<=500000)
                                {
                                    if (move_uploaded_file($_FILES['hout']['tmp_name'], $uploadfile)) {
                                        $handoutDir=$uploadfile;
                                    } else {
                                        $smarty->assign ('msg','حدث خطأ اثناء التحميل ');
                                        $handoutDir='';
                                    }
                                }
                                else 
                                {
                                    $smarty->assign ('msg','حجم الملف كبير جدا');
                                    $handoutDir='';
                                
                                }
                        else{
                            $smarty->assign ('msg','امتداد الملف غير مدعوم');
                            $handoutDir='';
                        }
                    }
                }
                else 
                {
                   $handoutDir='';
                }
            $tt_id=0;
            $Tname=$_POST['Tname'];
            $Tabstract=$_POST['abstract'];
            $Tgoals=$_POST['Goals'];
            $Thours=$_POST['Hours']; 
            $Tstart=$_POST['stime'];
            $Tend = $_POST['etime'];  
            $Tcapacity=0;
            $Tstatus=6;
            $Tavailable_seat=0;
            $addDate=date("Y-m-d");
            $startAt="00:00:00";
            $location="-";
         
            $tc_avg=0; 
            $result=$trCourse->addTraining($tt_id,$usrId,null,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg);    
            if($result)
                $smarty->assign ('added','تم حفظ الطلب بنجاح , لإستكمال الطلب الرجاء الذهاب الى صفحة استعراض الطلبات');
        }
        else 
            $smarty->assign ('msg','يجب أدخال اسم الدورة ليتم حفظ الطلب');
    }
    if(isset($_POST['addTraining'])  )
    {   
        if(!empty(trim($_POST['Tname']))&& !empty(trim($_POST['abstract'])) && !empty(trim($_POST['Goals'])) && !empty(trim($_POST['Hours']))
                && !empty(trim($_POST['stime'])) && !empty(trim($_POST['etime'])) )
        {
            if ($_FILES['hout']['error'] == 0) {   
                    $uploaddir = 'uploads/handouts/tc/';
                    $FileType = pathinfo($_FILES["hout"]["name"],PATHINFO_EXTENSION);
                    $uploadfile = $uploaddir .$usrId.' - '.'hout - '.date("Y-m-d").'.'.$FileType;  
                    if (file_exists($uploadfile))
                        $smarty->assign ('msg','الملف تم تحميلة مسبقا');
                    else
                    {
                        if($_FILES['hout']['type']=='application/pdf' || $_FILES['hout']['type']=='application/vnd.wordperfect' || $_FILES['hout']['type']=='application/msword' )
                                //check file size 
                                if($_FILES['hout']['size']<=500000)
                                {
                                    if (move_uploaded_file($_FILES['hout']['tmp_name'], $uploadfile)) {
                                        $handoutDir=$uploadfile;
                                        $tt_id=0;
                                        $Tname=$_POST['Tname'];
                                        $Tabstract=$_POST['abstract'];
                                        $Tgoals=$_POST['Goals'];
                                        $Thours=$_POST['Hours'];
                                        $Tstart=$_POST['stime'];
                                        $Tend = $_POST['etime'];  
                                        $Tcapacity=0;
                                        $Tstatus=1;
                                        $Tavailable_seat=0;
                                        $addDate=date("Y-m-d");
                                        $startAt="00:00:00";
                                        $location="-";
                           
                                        $tc_avg=0;                   
                                        $result=$trCourse->addTraining($tt_id,$usrId,null,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg);    
                                        if($result)
                                            $smarty->assign ('added','تم اضافة الطلب بنجاح');
                                    } else {
                                        $smarty->assign ('msg','حدث خطأ اثناء التحميل ');      
                                    }
                                }
                                else 
                                {
                                    $smarty->assign ('msg','حجم الملف كبير جدا');

                                }
                        else{
                            $smarty->assign ('msg','امتداد الملف غير مدعوم');
                        }
                    }
                }
                else 
                {
                   $smarty->assign ('msg','يجب اضافة الحقيبة التدريبية');
                }
        }
        else 
            $smarty->assign ('msg','يجب إكمال كافة الحقول');
    }
    
    $smarty->display("addTraining.tpl");
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>