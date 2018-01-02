{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}
<script type="text/javascript" src="js/Single_Admin_handouts.js"></script>

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
    <h3>مقدم الطلب </h3> 
    <p>{$trname}</p> 
    <h3>الحقيبة التدريبية للمتدرب</h3>
    <p><a href="{$teurl}" >  من هنا</a> </p>
    </br>
    <h3>الحقيبة التدريبية للمدرب</h3>
    <p><a href="{$trurl}" >  من هنا</a> </p>
    </br>
    <h3>العرض التقديمي</h3>
    <p><a href="{$prurl}" >  من هنا</a> </p>
    </br>
    <h3>المادة العلمية</h3>
    <p><a href="{$scurl}" >  من هنا</a> </p>
    </br>
    </br> 
    <center>
    <form action="Single_Admin_handouts.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
          </form>
    </center>
        
     </section>
        </div>
        </div>
 </section>   
<script type="text/javascript" src="js/Single_Admin_tcRegister.js"></script>           
  {include file='footer.tpl'}



