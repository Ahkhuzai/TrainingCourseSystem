{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/UPsingleTC.js"></script>

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
    <input type="button" value="طباعة"  name = "print" id='print' class='btn'/> 
    </br>
    </fieldset>
    </br>
    </br>
</div>
    <br>
{include file='footer.tpl'}




