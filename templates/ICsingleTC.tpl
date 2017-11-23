{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/ICsingleTC.js"></script>

    
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    
    <center>
          <p><font color="green">{$added}</font></p>
          <br>
        <div id="handout" name='handout'> 
    الحقيبة التدريبية       
        </div>
        </br>
     
        <form action='ICsingleTC.php' method='POST'>
            <input type="text" id="Tname" name="Tname" value="{$name}"/>
            </br>
            </br>          
            <textarea id='abstract' name='abstract'>{$abstract}</textarea>       
            </br>
            </br>
            <textarea id='Goals' name='Goals' >{$goals}</textarea>       
            </br>
            </br>
             <input type="text" id="Hours" name="Hours" value="{$hours}" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>       
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
            <input type='hidden' id='handout_url' name='handout_url' />
            <input type="submit" value="حفظ"  name = "saveTraining" id='saveTraining' class='btn'/>
  
            <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
                      <input type="submit" value="حذف"  name = "deleteTraining" id='deleteTraining' onclick="return confirm('هل انت متأكدمن رغبتك بحذف الطلب')"  class='btn'/>
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

