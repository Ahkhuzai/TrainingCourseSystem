{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/SingleProgram.js"></script>

   
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
            <center>
            <h3><font color="green">{$added}</font></h3>
            <p><font color="red">{$msg}</font></p>
            </center>
    <legend>بيانات البرنامج</legend>
    
    <p> اسم البرنامج </p>
    {$name}
     <p> عدد الساعات </p>
    {$hour}
     <p> اهداف البرنامج</p>
    {$goals}
     <p> ملخص البرنامج </p>
    {$abstract}
    
   
    <center>
         <h1> قائمة الدورات التابعة لهذا البرنامج  </h1>
    <div id='prog_tc' >
    </div>
    <br>
    <br>
    <form action="SingleProgram.php" method="POST" >
    <input type="submit" value="التسجيل في البرنامج"  name = "register" id='register' class='btn'/>
    <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
    </form>      
    </center>
    </fieldset> 
    <br>
    <br>
</div>

    <br>
    <br>
    {include file='footer.tpl'}



