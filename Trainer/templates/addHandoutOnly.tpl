{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/addHandoutOnly.js"></script>  
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">  

    <h3>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</h3>
    <center>
    <p><font color="green">{$added}</font></p>
       <p><font color="red">{$msg}</font></p>   
    <br>
    <form action='addHandoutOnly.php' method='POST' enctype="multipart/form-data">
        <input type="text" id="Tname" name="Tname" />
        </br>
        </br>
        <div id="handout_tr" name='handout_tr'> 
    الحقيبة التدريبية للمدرب      
        <input type='file' id='handout[]' name='handout[]'  accept='application/pdf , application/vnd.wordperfect , application/msword'/>
        </div>
        </br>
        <div id="handout_te" name='handout_te'> 
    الحقيبة التدريبية للمتدرب       
        <input type='file' id='handout[]' name='handout[]'  accept='application/pdf , application/vnd.wordperfect , application/msword'/>
        </div>
        </br>
        <div id="handout_pr" name='handout_pr'> 
    العرض التقديمي     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type='file' id='handout[]' name='handout[]'  accept="application/vnd.openxmlformats-officedocument.presentationml.presentation, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf, image/*"/>
        </div>
        </br>
        <div id="handout_sci" name='handout_sci'> 
    المادة العلمية      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type='file' id='handout[]' name='handout[]'  accept='application/pdf , application/vnd.wordperfect , application/msword'/>
        </div>
        </br>             
        </br>
        <input type="submit" value="إضافة"  name = "addHandout" id='addHandout' class='btn'/> 
    </form>
    <br>
   
    </center>
           </section>
                </div>
        </div>
</section>				
  {include file='footer.tpl'}




