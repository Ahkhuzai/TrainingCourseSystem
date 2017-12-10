{include file='AdminMain.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/AdminAddProgram.js"></script>

    
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
    <legend> الرجاء إكمال النموذج التالي:</legend>
    
    <center>
        <p><font color="green">{$added}</font></p>
        
        <form action='AdminAddProgram.php' method='POST' enctype="multipart/form-data">
            <br>
            <input type="text" id="Tname" name="Tname"/>   
            </br>
            </br>   
            <input type="text" id="engname" name="engname"/>            
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
            <input type="hidden" id="tc_id" name="tc_id"/> 
            </br>
            <div id="tc"></div>
            </br>
            </br>
                <input type="submit" value="إضافة"  name = "addProgram" id='addProgram' class='btn'/> 
            <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
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



