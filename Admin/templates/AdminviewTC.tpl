{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}
<script type="text/javascript" src="js/AdminviewTC.js"></script>
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
<center>
    <h3><font color="green">{$added}</font></h3>
    <p><font color="red">{$msg}</font></p>
</center>
    <center>
    <h2>قائمة الدورات</h2>

    <div  id='tcList'>      
    </div>
    <br>
    <form action="AdminviewTC.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
</center>
           
                </section>      
 </div>
        </div>
            </section>              
  {include file='footer.tpl'}


