<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/strict.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="ar">
<head>
    <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta name="msapplication-tap-highlight" content="no" />
    <link rel="stylesheet" href="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.office.css" type="text/css" />
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/scripts/jquery-1.11.1.min.js"></script>
    
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxfileupload.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/globalization/globalize.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxgrid.sort.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxgrid.filter.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxpanel.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxchart.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxdraw.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxchart.core.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    
    
        <title>{$title|default:""}</title>




    </head>
    <body bgcolor="#E5F2E5" onload='carousel();'>    
       
        <header style="background-color: #ffffff ;height:100%;width: 75% ;margin:0 auto;" id="rcorners2">
            <br>  
            <center>
            <h2>بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى&nbsp;&nbsp;&nbsp;
            <img src="images/header/logo_dsr.png" width="10%"  align="middle" /></h2>
            </center>
            </br>
        </header>
        
        </br>
<div style="background-color:#ffffff ;height:100%;width:75%; margin:0 auto;" id="rcorners1" >
    </br>
    <div id='menu' style='text-align: center; position: relative; border: none;'>
        <ul>
            <li style="width:15%"><a href="http://www.uqu.edu.sa">تسجيل الخروج  </a>
            </li>
            
            <li style="width:15%"><a href="trainer.php">المدربين</a>
                <ul>
                    <li><a href="addTraining.php">طلب تقديم دورة</a></li>
                    <li><a href="approveCertificate.php"> طلب تقديم الحقيبة التدريبية</a></li>
                    <li><a href="viewRequest.php">استعراض الطلبات</a></li>
                    <li><a href="oldTraining.php">الدورات السابقة</a></li>
                    <li><a href="approveCertificate.php"> اعتماد الشهادات</a></li>
                </ul>
            </li>
            <li style="width:15%"><a href="trainee.php"> المتدربين </a>
                <ul >
                    <li><a href="availableTraining.php"> الدورات المتاحة</a></li>
                    <li><a href="registration.php"> استعراض طلبات التسجيل</a></li>
                    <li><a href="oldRegister.php"> الدورات السابقة</a></li>
                    <li><a href="apology.php"> الاعتذار عن الحضور</a></li>
                    <li><a href="rateTraining">التقييم</a></li>
                    <li><a href="viewCertificate.php">الشهادات</a></li>
                </ul>
            </li>
            <li style="width:15%"><a href="index.php">المبادرة </a>
            </li>
            <li style="width:15%"><a href="index.php">الرئيسية </a>
            </li>
        </ul>
    </div>
    <br>
    <br>
    <br>    
