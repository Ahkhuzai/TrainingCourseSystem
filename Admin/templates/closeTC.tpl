{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}
<script type="text/javascript" src="js/closeTC.js"></script>
<nav id="nav">
	<ul>
        <li><a href="closeTC.php">اتمام الدورة التدريبية</a></li>
        <li><a href="AdminviewAttendance.php"> استعراض الحضور</a></li>                          
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
    <form action="closeTC.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
</center>
           
                </section>      
 </div>
        </div>
            </section>              
  {include file='footer.tpl'}


