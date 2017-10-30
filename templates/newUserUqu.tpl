<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/strict.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/scripts/jquery-1.11.1.min.js"></script>	
        <!-- add the jQWidgets framework -->
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"></script>
        <!-- add one or more widgets -->
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"></script>
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"></script>
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxfileupload.js"></script>
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxscrollbar.js"></script>
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxlistbox.js"></script>
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxdropdownlist.js"></script>
        <script type="text/javascript" src="Assist/js/newUsrUqu.js"></script>
        <!-- add the jQWidgets base styles and one of the theme stylesheets -->
        <link rel="stylesheet" href="Assist/js/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="Assist/js/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
        <link rel="stylesheet" href="Assist/cs/style.css" type="text/css" />
             
        <title>بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى</title>
    </head>
    <body>
        <header>
            <img class='banner' src="images/banner1.png"  >
            <center><h1>بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى</h1></center>
            <center><h3> تسجيل المدربين من أعضاء هيئة التدريس بجامعة ام القرى</h3></center>
        </header>
    <center>      
        <form action='newUsrUqu.php' method='POST' enctype="multipart/form-data">
            <p>السيرة الذاتية</p>
            <div id="resume" name='resume'> 
            </div>
            </br>
            <div id='qualification'>
            </div>
            </br>
            <input type='text' id='major' name='major'  >
            </br>
            </br>
            <input type='text' id='special' name='special'  >
            </br>
            </br>
            <input type='submit' id='submit' name='submit'  >
            </br>
            </br>
            
        </form>
    <p> {$msg}</p>
    </center>
        <footer>
            <img  class='banner' src="images/footer1.png" >
        </footer>
    </body>
</html>


