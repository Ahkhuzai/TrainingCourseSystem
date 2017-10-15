<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="Assist/Config/jqwidgets-ver5.3.2/scripts/jquery-1.11.1.min.js"></script>	
        <!-- add the jQWidgets framework -->
        <script type="text/javascript" src="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"></script>
        <!-- add one or more widgets -->
        <script type="text/javascript" src="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"></script>
        <!-- add the jQWidgets base styles and one of the theme stylesheets -->
        <link rel="stylesheet" href="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.office.css" type="text/css" />
        <script type="text/javascript" src="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"></script>
         <script type="text/javascript" src="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/jqxcheckbox.js"></script>
        <script type="text/javascript" src="Assist/js/main.js"></script>
        <title>بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى</title>
    </head>
    <body>
    <center>
        <img src="Assist/image/uqulogo.png" width="10%" />
        </br>
        </br>
        </br>
   <div>
    <form  action="index.php" method="POST" >
            <input type="text" id="usrname" name="usrname"/>
            </br>
            </br>
            <input type="password" id="usrpass" name="usrpass"/>
            </br>
            </br>
            <div id='jqxcheckbox'>هل انت مدرب؟</div>
             <input type="hidden" name="trainer" id='trainer' >
            
            </br>
            <input type="submit" value="مستخدم جديد" name = "signup" id='signup'/>
            <input type="submit" value="تسجيل دخول"  name = "login" id='login' /> 
            
    </form>
    </div>
    </center>
    </body>
</html>
