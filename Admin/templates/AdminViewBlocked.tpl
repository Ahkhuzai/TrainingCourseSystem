{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/AdminViewBlocked.js"></script>
<nav id="nav">
	<ul>
            <li><a href="AdminViewBlocked.php"> استعراض قائمة الحظر</a></li>
 	   <li><a href="AdminViewTrainee.php"> استعراض المتدربين</a></li>
       <li><a href="AdminRegisterTrainee.php"> تسجيل متدرب في دورة</a></li>                          
    </ul>
</nav>
<!-- Introduction -->
   <!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
    <center>
    <h3>قائمة المتدربين</h3>
    <div  id='teList'>      
    </div>
    <p>لإزالة الحظر عن متدرب - الرجاء الضغط على اسم المتدرب</p>
    <br>
    <form action="AdminViewBlocked.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </br>
    </center>
     </section>   
            </div>
        </div>
 </section>   
           
  {include file='footer.tpl'}




