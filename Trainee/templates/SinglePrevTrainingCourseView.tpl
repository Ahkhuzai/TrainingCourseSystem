{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/SinglePrevTrainingCourseView.js"></script>
    <center>
    <fieldset style="width:70%; margin:0 auto;">      
   <legend align="right">بيانات الدورة</legend>
   <center>
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
    <h3>عدد ساعات الدورة </h3>
    <p> {$hours} </p>
    <h3>العدد الاجمالي للمقاعد</h3>
    <p> {$capacity} </p>
    <h3>مكان اقامة الدورة</h3>
    <p> {$location} </p>
    <h3> ملخص الدورة</h3>
    <p>{$abstract}</p>
    <h3>اهداف الدورة</h3>
    <p>{$goals}</p>  
    <h3>الحقيبة التدريبية</h3>
    <p><a href="{$url}" >  من هنا</a> </p>
    
    <h3>حالة الشهادة</h3>
    <p>{$cer_status}</p>   
    </br>
    </br> 
    <br>
    <br>
    <form action="SinglePrevTrainingCourseView.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' />
        <input type="submit" value='طباعة الشهادة'  name = "print" id='print' class='btn'   />        
    </form>
    </br>
    <br>
    <br>
    </fieldset>
    </br>
    </br>
</div>
    <br>
{include file='footer.tpl'}







