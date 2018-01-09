{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/becomeTrainer.js"></script>

<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">
    <h3>الرجاء تعبئة البيانات التالية</h3>
    
    <center> 
        <p><font color="green">{$added}</font></p>  
        </br>
        <form action='becomeTrainer.php' method='POST' enctype="multipart/form-data">
        <div id="info" name="info" >
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
        <p>حجم الملفات المسموح به  5 ميغابايت</p>
        </div>
           <p><font color="red">{$msg}</font></p> 
        <input type='submit' id='AddTrainer' name='AddTrainer'  value="تسجيل"  >
        <input type='submit' id='back' name='back'  value="عودة"  >
        </br>
        </br>
          </form>
    </center>
                  </section>
                </div>
        </div>
</section>				
  {include file='footer.tpl'}



