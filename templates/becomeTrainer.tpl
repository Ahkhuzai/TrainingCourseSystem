{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/newTrainer.js"></script>

  
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <legend>الرجاء تعبئة البيانات التالية:</legend>
    <center>
         
        <p>لتتمكن من طلب تقديم دورة  يجب اتمام النموذج التالي  لمرة واحدة</p>  

        </br>
         <form action='addTraining.php' method='POST' enctype="multipart/form-data">
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
          <div> 
            السيرة الذاتية
            <input type="file" name="cv" id="cv"  accept='application/pdf , application/vnd.wordperfect , application/msword' > 
        </div>
        </br>
        </br>
      <div/> 
            التوقيع&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="file" name="sign" id="sign"  accept='image/*' > 
        </div>
        </br>
        <input type='submit' id='becomeTrainer' name='becomeTrainer'  value="متابعة"  >
        </br>
        </br>
          </form>
    
   
    </center>
   <p><font color="red">{$msg}</font></p>    
    </fieldset>
  
    <br>
    <br>
</div>
    <br>
    {include file='footer.tpl'}
