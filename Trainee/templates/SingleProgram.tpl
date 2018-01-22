{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/SingleProgram.js"></script>
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">     

  
            <center>
                    <h1>بيانات البرنامج</h1>
            <h3><font color="green">{$added}</font></h3>
            <p><font color="red">{$msg}</font></p>
            </center>

    
    <h3> اسم البرنامج </h3>
    <p>{$name}</p>
     <h3> عدد الساعات </h3>
    <p>{$hours}</p>
     <h3> اهداف البرنامج</h3>
    <p>{$goals}</p>
     <h3> ملخص البرنامج </h3>
    <p>{$abstract}</p>
    
   
    <center>
         <h1> قائمة الدورات التابعة لهذا البرنامج  </h1>
    <div id='prog_tc' >
    </div>
    <br>
    <br>
    <form action="SingleProgram.php" method="POST" >
        <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
    <input type="submit" value='طباعة الشهادة'  name = "print" id='print' class='btn'/>
 
    </form>      
    </center>
                </section>
                </div>
        </div>
</section>				
  {include file='footer.tpl'}


