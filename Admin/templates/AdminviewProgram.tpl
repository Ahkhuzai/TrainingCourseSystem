{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}
<script type="text/javascript" src="js/AdminviewProgram.js"></script>
<nav id="nav">
	<ul>
	<li><a href="AdminCertificate.php">الشهادات</a></li>
	<li><a href="rePresentTC.php">اعادة تقديم دورة سابقة</a></li>
 	<li><a href="AdminAddTrainingCourse.php"> اضافة دورة تدريبية</a></li>
        <li><a href="AdminAddProgram.php"> اضافة برنامج تدريبي</a></li>
        <li><a href="CloseTrainingCourse.php">اغلاق التسجيل  </a></li>
        <li><a href="ApproveTrainingCourse.php">اعتماد الدورات </a></li>
        <li><a href="AdminviewProgram.php"> استعراض البرامج</a></li>     
        <li><a href="AdminviewTC.php"> استعراض الدورات</a></li>                          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    <center>
                    <h3>قائمة البرامج التدريبية</h3>
                    <div id='ProrgamList'></div>
                    </center>
                </section>   
            </div>
    </div>
            </section>              
  {include file='footer.tpl'}



