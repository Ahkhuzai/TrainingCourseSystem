{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/SingleProgram.js"></script>

    
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
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
    <input type="submit" value="التسجيل في البرنامج"  name = "register" id='register' class='btn'/>
    <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
    <p><font color="red">{$msg}</font></p>
              
    </center>
    </fieldset>
   
    <br>
    <br>
</div>
    <br>
  
    {include file='footer.tpl'}


