{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/Single_Admin_ProgramSta.js"></script>
<nav id="nav">
    <ul>
        <li><a href="AdminCertificate.php">الشهادات</a></li>
        <li><a href="rePresentTC.php">اعادة تقديم دورة سابقة</a></li>
        <li><a href="AdminAddTrainingCourse.php"> اضافة دورة تدريبية</a></li>
        <li><a href="AdminAddProgram.php"> اضافة برنامج تدريبي</a></li>
        <li><a href="ApproveTrainingCourse.php">اعتماد الدورات والبرامج التدريبية</a></li>
        <li><a href="AdminviewTC.php"> استعراض الدورات</a></li>                          
    </ul>
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
    <h3>قائمةالدورات</h3>
        <div id='tcList' ></div>
    <br>
    <br>
     <h3>قائمة المسجلين</h3>
        <div id='tcTraineeRegister' ></div>
    <br>
    <br>

     <h3>احصائيات البرنامج</h3>
    <br>
    <div id='chartRank' style="width: 850px; height: 500px;">
    </div>
    </br>
    <br>
    <div id='chartGender' style="width: 850px; height: 500px;">
    </div>
    </br>
    <br>
        <div style='height: 100%; width: 100%;'>
        <div id='host' style="margin: 0 auto; width:850px; height:500px;">
        <div id='chartDepartment' style="width:850px; height:500px; position: relative; left: 0px; top: 0px;">
        </div>
            </div>
        </div>
    </br>
    <div style='height: 100%; width: 100%;'>
        <div id='host' style="margin: 0 auto; width:850px; height:500px;">
        <div id='jqxChart' style="width:850px; height:500px; position: relative; left: 0px; top: 0px;">
        </div>
            </div>
        </div>
    <br>
    
    <br>
    
    <form action="Single_Admin_ProgramSta.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
        <input type="button" value='طباعة'  name = "print" id='print' class='btn'/>
    </form>
</center>
</section>    
            </div></div>
</section>              
  {include file='footer.tpl'}



