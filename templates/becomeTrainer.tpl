{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/newTrainer.js"></script>

    <form action='addTraining.php' method='POST'>
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <legend>الرجاء تعبئة البيانات التالية:</legend>
    <center>
        <p>لتتمكن من طلب تقديم دورة  يجب اتمام النموذج التالي  لمرة واحدة</p>       
        <div id='qualification'>
        </div>
        <input type='hidden' id='quali' name='quali' />
        </br>
        <input type='text' id='major' name='major'  >
        </br>
        </br>
        <input type='text' id='special' name='special' >
        </br>
        </br>    
        <div id="resume" name='resume'> 
            السيرة الذاتية
        </div>
        <input type='hidden' id='cv_url' name='cv_url' />
        </br>
        <div id="signture" name='signture' /> 
            التوقيع
        </div>
        <input type='hidden' id='signature_url' name='signature_url' />
        </br>
        <input type='submit' id='becomeTrainer' name='becomeTrainer'  value="متابعة"  >
        </br>
        </br>
    </center>
   <p><font color="red">{$msg}</font></p>    
    </fieldset>
    </form>
    <br>
    <br>
</div>
    <br>
    {include file='footer.tpl'}
