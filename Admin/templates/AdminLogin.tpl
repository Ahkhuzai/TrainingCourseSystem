{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src='js/AdminLogin.js'></script>
<center>
 <h2>بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى</h2>

<br>
<br>
     <p><font color="red">{$error}</font></p>        
<form action='AdminLogin.php' method='POST' > 
<input type="text" id="usrName" name='usrName' />
<br>
<br>
<input type="password" id="usrPass" name='usrPass'/> 
<br>
<br>
<input type="submit" value="تسجيل الدخول" name="login" id='login'/>
</form>
<p><font color="red">{$msg}</font></p>     
</div>
    </br>
    </center>
    {include file='footer.tpl'}
 

