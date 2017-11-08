{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/addTraining.js"></script>

    <form action='addTrainingDetails.php' method='POST'>
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    <center>
        <br>
            <input type="text" id="Tname" name="Tname"/>
            </br>
            </br>          
            <textarea id='abstract' name='abstract' ></textarea>       
            </br>
            </br>
            <textarea id='Goals' name='Goals' ></textarea>       
            </br>
            </br>
            <input type="text" id="Hours" name="Hours"/>       
            </br>
            </br>
            <div id='time'>
            </div>   
            <div style='margin-top: 10px; font-size: 13px; font-family: Verdana;' id='selection'></div>  
            </br>
            </br>
            <input type="submit" value="حفظ"  name = "saveTraining" id='saveTraining' class='btn'/>
            <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
            <input type="hidden" id="stime" name="stime"/>
            <input type="hidden" id="etime" name="etime"/>
            </br>
            </br>
               <p><font color="red">{$msg}</font></p>
    </center>
    </fieldset>
    </form>
    <br>
    <br>
</div>
    <br>
  
    {include file='footer.tpl'}

