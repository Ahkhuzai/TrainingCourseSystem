{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/addTraining.js"></script>

    
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    
    <center>
          <p><font color="green">{$added}</font></p>
 
        <form action='addTrainingDetails.php' method='POST' enctype="multipart/form-data">
            <input type="text" id="Tname" name="Tname"/>
            </br>
            </br>          
            <textarea id='abstract' name='abstract' ></textarea>       
            </br>
            </br>
            <textarea id='Goals' name='Goals' ></textarea>       
            </br>
            </br>
             <input type="text" id="Hours" name="Hours" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>       
            </br>
            </br>
            <label>تاريخ البداية</label>
        <div id='dates'>
        </div> 
            <br>
           <label>تاريخ النهاية</label>
        <div id='datee'>
        </div>
            </br>
            </br>
            <div> 
                الحقيبة التدريبية        <br>
           <input type="file" name="hout" id="hout"  accept='application/pdf , application/vnd.wordperfect , application/msword' >     <br> <br>
        </div>
            <br>
            <br>
            <input type="submit" value="حفظ"  name = "saveTraining" id='saveTraining' class='btn'/>
            <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
            <input type="hidden" id="stime" name="stime"/>
            <input type="hidden" id="etime" name="etime"/>
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

