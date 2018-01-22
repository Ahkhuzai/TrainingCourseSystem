{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/Single_Admin_ProgramView.js"></script>
<nav id="nav">
    <ul>
    <li><a href="rePresentTC.php">اعادة تقديم دورة </a></li>
    <li><a href="AdminAddTrainingCourse.php"> اضافة دورة </a></li>
        <li><a href="AdminAddProgram.php"> اضافة برنامج </a></li>
        <li><a href="CloseTrainingCourse.php">اغلاق التسجيل  </a></li>
        <li><a href="ApproveTrainingCourse.php">اعتماد الدورات </a></li>
        <li><a href="AdminProgramView.php"> استعراض البرامج</a></li>     
        <li><a href="AdminviewTC.php"> استعراض الدورات</a></li>                          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">    

   <center>
          <h2>بيانات البرنامج</h2>
    <h3><font color="green">{$added}</font></h3>
    <p><font color="red">{$msg}</font></p>
    </center>
    <br>
    <br>
     
    <h3>اسم البرنامج </h3> 
    <p>{$name}</p>   
    <h3> ملخص البرنامج </h3> 
    <p>{$abstract}</p>
  <h3> اهداف البرنامج </h3> 
    <p>{$goals}</p>
  
    <h3>عدد ساعات البرنامج </h3>
    <p> {$hours} </p>
   
    </br> 
    
    <h3>قائمةالدورات</h3>
    <ul dir='rtl'>
                  
                        {foreach $tcList as $tc }      
                            {strip} 	
                                <li> {$tc.name}  </li>     		 
                            {/strip}
                            {/foreach}     
                    </li>
                </ul>
    <br>
    <br>
    <center>
    <form action="Single_Admin_ProgramView.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    
    </form>
</center>
</section>       
            </div>
        </div>
</section>              
  {include file='footer.tpl'}






