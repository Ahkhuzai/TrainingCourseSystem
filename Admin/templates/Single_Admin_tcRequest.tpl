{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}
<script type="text/javascript" src="js/Single_Admin_tcRequest.js"></script>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
   <center>
            <h3><font color="green">{$added}</font></h3>
            <p><font color="red">{$msg}</font></p>
            </center>
            <br>
            <br>
    <h3>مقدم الطلب </h3> 
    <p>{$trname}</p>   
    <h3>اسم الدورة</h3> 
    <p>{$name}</p>
    <h3> تاريخها </h3>
    <p>{$start_date} من  <br>
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
    <center>
    <form action="Single_Admin_tcRequest.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
        <input type="submit" value="رفض الطلب"  name = "reject" id='reject' class='btn' onclick="return confirm('هل انت متأكدمن رغبتك برفض الطلب')"/>
        <input type="submit" value="قبول الطلب"  name = "accept" id='accept' class='btn' onclick="return confirm('هل انت متأكدمن رغبتك بقبول الطلب')"/>
    </form>
</center>
                </section>          
            </section>   
<script type="text/javascript" src="js/Single_Admin_tcRegister.js"></script>           
  {include file='footer.tpl'}


