{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/RJsingleTC.js"></script>

    <center>
    <fieldset style="width:70%; margin:0 auto;" id="printend" name="printend">      
   <legend align="right">بيانات الدورة</legend>
    <h3>اسم الدورة</h3> 
    <p>{$name}</p>
    <h3> تاريخها </h3>
    <p>{$start_date} من  
    {$end_date} الى </p>
    <h3>عدد ساعات الدورة المقترحة</h3>
    <p> {$hours} </p>
    <h3> ملخص الدورة</h3>
    <p>{$abstract}</p>
    <h3>اهداف الدورة</h3>
    <p>{$goals}</p>   
    </br>
    </br> 
    <form action="RJsingleTC.php" method="POST" >
    <input type="submit" value="حذف"  name = "delete" id='delete' onclick="return confirm('هل انت متأكدمن رغبتك بحذف الطلب')" class='btn'/>
    <input type="button" value="طباعة"  name = "print" id='print' class='btn'/> 
    </form>
    </br>
    </fieldset>
    </br>
    </br>
</div>
    <br>
{include file='footer.tpl'}



