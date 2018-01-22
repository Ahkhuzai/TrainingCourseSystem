{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src='js/AdminLogin.js'></script>
<center>
<!-- Introduction -->
<section id="intro" class="main">
<div class="spotlight">
	<div class="content">
		<section class="main">
			<br>
                        <center><h3>تسجيل الدخول إلى لوحة التحكم</h3></center>
			 <p><font color="red">{$error}</font></p>        
			<form action='AdminLogin.php' method='POST' > 
			<input type="text" id="usrName" name='usrName' />
			<br>
			<input type="password" id="usrPass" name='usrPass'/> 
			<br>
			<input type="submit" value="تسجيل الدخول" name="login" id='login'/>
			</form>   
			</br>
        </section>   
    </div>
</div>
</section>              
  {include file='footer.tpl'}


