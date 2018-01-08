{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/SingleAvailable_Un_TC.js"></script>
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">  
  
   <center>
        <h3>بيانات الدورة</h3>
    <h3><font color="green">{$added}</font></h3>
    <p><font color="red">{$msg}</font></p>
    </center>
    <br>
    <br>
    <h3>مقدم الدورة </h3> 
    <p>{$trname}</p>   
    <h3>اسم الدورة</h3> 
    <p>{$name}</p>
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
    <br>
    <br>
    <center>
    <form action="SingleTCRequest.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 

    </form>
    </center>
                </section>
                </div>
        </div>
</section>				
  {include file='footer.tpl'}








