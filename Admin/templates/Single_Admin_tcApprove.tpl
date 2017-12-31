{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/Single_Admin_tcApprove.js"></script>

<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                        <h2>اعتماد الدورة التدريبية</h2>
    
    <center>
        <p><font color="green">{$added}</font></p>
        <form action='Single_Admin_tcApprove.php' method='POST' enctype="multipart/form-data">
             <label> مقدم الدورة : {$trname}</label>
            <div id='trainer'>
            </div>
            <input type="hidden" id="tr_id" name="tr_id" value='{$trid}'/> 
            <br>
            اسم الدورة: 
            <input type="text" id="Tname" name="Tname" value='{$tcname}'/>
            </br>
            </br>    
            اسم الدورة باللغة الانجليزية  :
            <input type="text" id="engname" name="engname" value='{$tcEngname}'/>            
            </br>
            </br> 
            ملخص الدورة:
            <textarea id='abstract' name='abstract' >{$abstract}</textarea>       
            </br>
            </br>
            اهداف الدورة :
            <textarea id='Goals' name='Goals' >{$goals}</textarea>       
            </br>
            </br>
            عدد ساعات الدورة:
            <input type="text" id="Hours" name="Hours" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{$hours}"/> 
            </br>
            </br>
            <label> تاريخ البداية:  {$start_date}</label>
        <div id='dates'>
        </div> 
            <br>
           <label>تاريخ النهاية: {$end_date}</label>
        <div id='datee'>
        </div>
    
            </br>
            <label> وقت بداية الدورة :  {$start_at}</label>
            <div id='startAt'></div>
            </br>
            مكان اقامة الدورة :
            <input type="text" id="Location" name="Location" value='{$location}'/>       
            </br>
            </br>
            عدد المقاعد:
            <input type="text" id="capacity" name="capacity" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value='{$capacity}'/>       
            </br>
            </br>
             <label>مقر الحضور : {$type}</label>
            <div id='TypeTc'>
            </div>
           
            <input type="hidden" id="type" name="type" value='{$type}'/> 
            </br>
            <div> 
                الحقيبة التدريبية: {$url_act}  <br>
                <br>
                <input type="hidden" id="url" name="url" value='{$url}'/> 
                
          </div>
           <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
           
            <input type="submit" value="اعتمادالدورة"  name = "approve" id='approve' class='btn'/> 
            
            <input type="hidden" id="stime" name="stime" value="{$start_date}"/>
            <input type="hidden" id="etime" name="etime" value="{$end_date}"/>
            <input type="hidden" id="start_at" name="start_at" value="{$start_at}"/>
            </form>
       
            <br>
               <p><font color="red">{$msg}</font></p>
              
    </center>
</center>
                </section>          
            </section>              
  {include file='footer.tpl'}


