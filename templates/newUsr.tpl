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
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxcheckbox.js"></script>
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxpasswordinput.js"></script>
        <script type="text/javascript" src="Assist/js/jqwidgets-ver5.3.2/jqwidgets/jqxradiobutton.js"></script>
        
        <script type="text/javascript" src="Assist/js/newUsr.js"></script>
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
            
        </header>
    <center>
        
    <form action='newUsr.php' method='POST' > 
        
        <h3> هل انت عضو هيئة تدريس في جامعة ام القرى</h3> 
        <div id='isUqu' name="isUqu">
            نعم
        </div>
        <div id='NotUqu' name="NotUqu">
            لا
        </div>  
        </br>
        </br>
        <div id="isUquForm" hidden="true" >
            <input type="text" id="usrName" name='usrName' required/>
            <br />
            <br />
            <input type="password" id="usrPass" name='usrPass' required/> 
        </div>
        </br>
        </br>
        <input id="signup" name="signup" type ="submit" value="متابعة التسجيل" />
    </form>
    <p> {$msg}</p>
    </center>
        <footer>
            <img  class='banner' src="images/footer1.png" >
        </footer>
    </body>
</html>
