<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/strict.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->    

{include file='header1.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src='js/login.js'></script>
<center>
 <h2>بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى</h2>
<img src="images/header/logo_dsr.png" width="10%"/>
<br>
<br>
            
<form action='login.php' method='POST' > 
<input type="text" id="usrName" name='usrName' />
<br />
<br />
<input type="password" id="usrPass" name='usrPass'/> 
<br />
<br />
<input type="submit" value="تسجيل الدخول" name="login" id='login'/>
</form>
<p><font color="red">{$error}</font></p>   
<p><font color="red">{$msg}</font></p>     
</div>
    </br>
    </center>
    {include file='footer.tpl'}
 
