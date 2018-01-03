{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/Single_Admin_Attendance.js"></script>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">      
 
   <center>
         <h2>بيانات الدورة</h2>
    <h3><font color="green">{$added}</font></h3>
    <p><font color="red">{$msg}</font></p>
    </center>
    <br>
    <br>
    <h3>مقدم الدورة </h3> 
    <p>{$trname}</p>   
    <h3 >اسم الدورة</h3> 
    <p id="nameOfTC">{$name}</p>
    <h3> تاريخها </h3>
    <p>{$start_date} من  <br>
    {$end_date} الى </p>

    </br> 
    <center>
    <h3>قائمة المسجلين</h3>
    <div  id='tcRegisterTrainee'>      
    </div>
    <br>
    <br>
    <form action="Single_Admin_Attendance.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </center>
       
            </section>  
         </div>
        </div>
            </section>              
  {include file='footer.tpl'}









