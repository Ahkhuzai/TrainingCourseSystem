{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/SingleTCRequest_InComplete.js"></script>
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">

    
    <center>
            <h3>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي</h3>
            <br>
        <p><font color="green">{$added}</font></p>
        <p><font color="red">{$msg}</font></p>
        <br>
        <form action='SingleTCRequest_InComplete.php' method='POST' enctype="multipart/form-data">
             
            <input type="text" id="Tname" name="Tname" value='{$name}'/>
            </br>
            </br>      
            <input type="text" id="engname" name="engname" value='{$eng_name}'/>            
            </br>
            </br> 
            <textarea id='abstract' name='abstract' >{$abstract}</textarea>       
            </br>
            </br>
            <textarea id='Goals' name='Goals' >{$goals}</textarea>       
            </br>
            </br>
            <input type="text" id="Hours" name="Hours" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{$hours}"/> 
            </br>
            </br>
            <label>تاريخ البداية : {$start_date}</label>
        <div id='dates'>
        </div> 
            <br>
           <label>تاريخ النهاية: {$end_date}</label>
        <div id='datee'>
        </div>
    
            </br>
             <label>مقر الحضور:  {$type} </label>
            <input type="hidden" id="type" name="type" value='{$type}'/> 
            <div id='TypeTc'>
            </div>
            
            </br>
            
            <div> 
                الحقيبة التدريبية: {$url_act}  <br>
                <br>
                <input type="hidden" id="url" name="url" value='{$url}'/> 
                
                 {$label}   <br>
           <input type="file" name="hout" id="hout"  accept='application/pdf , application/vnd.wordperfect , application/msword' >     <br> <br>
            </div>
                </br>
                </br>
            <input type="submit" value="حفظ"  name = "saveTraining" id='saveTraining' class='btn'/> 
            <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
            <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
           
            <input type="hidden" id="stime" name="stime" value="{$start_date}"/>
            <input type="hidden" id="etime" name="etime" value="{$end_date}"/>
            </form>
            <br>
               
              
    </center>
                </section>
                </div>
        </div>
</section>				
  {include file='footer.tpl'}


