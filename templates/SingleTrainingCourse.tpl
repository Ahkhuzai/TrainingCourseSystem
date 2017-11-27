{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/SingleTrainingCourse.js"></script>

   
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
            <center>
            <h3><font color="green">{$added}</font></h3>
            <p><font color="red">{$msg}</font></p>
            </center>
    <legend>بيانات الدورة</legend>
    
    <p> اسم الدورة </p>
    {$name}
     <p> اهداف الدورة</p>
    {$goals}
     <p> ملخص الدورة </p>
    {$abstract}
    
   
    <center>
    
    <br>
    <br>
    <form action="SingleTrainingCourse.php" method="POST" >
    <input type="submit" value="التسجيل في الدورة"  name = "register" id='register' class='btn'/>
    <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
    </form>      
    </center>
    </fieldset>
   
    <br>
    <br>
</div>
    <br>
  
    {include file='footer.tpl'}



