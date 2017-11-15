{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/addHandoutOnly.js"></script>

    
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    
    <center>
          <p><font color="green">{$added}</font></p>
          <br>
          
        <div id="handout_tr" name='handout_tr'> 
    الحقيبة التدريبية للمدرب      
        </div>
            </br>
           <div id="handout_te" name='handout_te'> 
    الحقيبة التدريبيةللمتدرب       
        </div>
            </br>
           <div id="handout_pr" name='handout_pr'> 
    العرض التقديمي     
        </div>
            </br>
           <div id="handout_sci" name='handout_sci'> 
    المادة العلمية      
        </div>
        </br>
     
        <form action='addTrainingDetails.php' method='POST'>
            <input type="text" id="Tname" name="Tname"/>
            </br>
            </br>          
            
            <input type='hidden' id='handout_trainer' name='handout_trainer' />
            <input type='hidden' id='handout_trainee' name='handout_trainee' />
            <input type='hidden' id='handout_presentation' name='handout_presentation' />
            <input type='hidden' id='handout_scichapter' name='handout_scichapter' />
            
           
            <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
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


