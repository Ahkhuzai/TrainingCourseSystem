{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/addHandoutOnly.js"></script>  
<fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <br>
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    <center>
    <p><font color="green">{$added}</font></p>
    <br>
    <form action='addHandoutOnly.php' method='POST' enctype="multipart/form-data">
        <input type="text" id="Tname" name="Tname"/>
        </br>
        </br>
        <div id="handout_tr" name='handout_tr'> 
    الحقيبة التدريبية للمدرب      
        <input type='file' id='handout[]' name='handout_trainer' />
        </div>
        </br>
        <div id="handout_te" name='handout_te'> 
    الحقيبة التدريبية للمتدرب       
        <input type='file' id='handout[]' name='handout_trainee' />
        </div>
        </br>
        <div id="handout_pr" name='handout_pr'> 
    العرض التقديمي     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type='file' id='handout[]' name='handout_presentation' />
        </div>
        </br>
        <div id="handout_sci" name='handout_sci'> 
    المادة العلمية      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type='file' id='handout[]' name='handout_scichapter' />
        </div>
        </br>             
        </br>
        <input type="submit" value="إضافة"  name = "addHandout" id='addHandout' class='btn'/> 
    </form>
    <br>
    <p><font color="red">{$msg}</font></p>     
    </center>
    </fieldset>
    <br>
    <br>
</div>
    <br>
    {include file='footer.tpl'}
