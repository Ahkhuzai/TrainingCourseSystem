{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/AdminAddTrainer.js"></script>

  
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <legend>الرجاء تعبئة البيانات التالية:</legend>
    
    <center> 
        <p><font color="green">{$added}</font></p>  
        </br>
        <form action='AdminAddTrainer.php' method='POST' enctype="multipart/form-data">
        <input type='text' id='trainer' name='trainer' />
        <br>
        <input type='submit' id='search' name='search'  value='بحث'/>
        <br>
        <br>
        <p>{$name}</p>
        <div id="info" name="info" style="display:{$display}" >
        <div> 
            السيرة الذاتية
            <input type="file" name="cv" id="cv"  accept='application/pdf , application/vnd.wordperfect , application/msword' > 
        </div>
        </br>
        </br>
            التوقيع&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="file" name="sign" id="sign"  accept='image/*' > 
 
        </br>
        </br>
         
        </div>
           <p><font color="red">{$msg}</font></p> 
        <input type='submit' id='AddTrainer' name='AddTrainer'  value="اضافة مدرب"  >
        <input type='submit' id='back' name='back'  value="عودة"  >
        </br>
        </br>
          </form>
    
   
    </center>
  
    </fieldset>
  
    <br>
    <br>
</div>
    <br>
    {include file='footer.tpl'}

