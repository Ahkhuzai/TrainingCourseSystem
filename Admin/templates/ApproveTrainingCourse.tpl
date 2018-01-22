{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/ApproveTrainingCourse.js"></script>
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
    <h3><font color="green">{$added}</font></h3>
    <p><font color="red">{$msg}</font></p>
    </center>
    <center>
    <h3>قائمة الدورات</h3>
    <div  id='tcList'>      
    </div>
    <br>
    <form action="ApproveTrainingCourse.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
</center>
         
                </section> 
       </div>
        </div>
            </section>              
  {include file='footer.tpl'}


