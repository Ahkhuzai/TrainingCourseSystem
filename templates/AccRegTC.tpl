{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/AccRegTC.js"></script>

    <center>
    <fieldset style="width:70%; margin:0 auto;" id="printend" name="printend">      
   <legend align="right">بيانات الدورة</legend>
   <center>
            <h3><font color="green">{$added}</font></h3>
            <p><font color="red">{$msg}</font></p>
            </center>
            <br>
            <br>
            
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
    <h3>الحقيبة التدريبية</h3>
    <p><a href="{$url}" >  من هنا</a> </p>
    </br>
    </br> 
    <form action="AccRegTC.php" method="POST">
    <input type="button" value="طباعة"  name = "print" id='print' class='btn'/> 
    <input type="submit" value="إعتذار"  name = "apologize" id='apologize' class='btn' onclick="return confirm('هل انت متأكدمن رغبتك بالاعتذار عن الطلب')"/>
     <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
    </form>
    </br>
    </fieldset>
    </br>
    </br>
</div>
    <br>
{include file='footer.tpl'}






