{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/ProgramCerPrint.js"></script>
<nav id="nav">
    <ul>
<li><a href="AdminCertificateApprove.php">اعتماد الشهادات</a></li>
		<li><a href="AdminCertificatePrint.php">طباعة الشهادات</a></li> 
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">    
  <div id='pr_content'>
   <center>
 
          <h2>بيانات البرنامج</h2>
    <h3><font color="green">{$added}</font></h3>
    <p><font color="red">{$msg}</font></p>
    </center>
    <br>
    <br>
     
    <h3>اسم البرنامج </h3> 
    <p>{$name}</p>   
    </div>
    <h3> ملخص البرنامج </h3> 
    <p>{$abstract}</p>
    <h3> اهداف البرنامج </h3> 
    <p>{$goals}</p>
  
    <h3>عدد ساعات البرنامج </h3>
    <p> {$hours} </p>

    </br> 
    <center>

    <br>
     <h3>قائمة المسجلين</h3>
        <div id='tcTraineeRegister' ></div>
    <br>
    <br>

   
    <br>
    
    <br>
    
    <form action="ProgramCerPrint.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
        
    </form>
</center>
</section>    
            </div></div>
</section>              
  {include file='footer.tpl'}



