{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}
<script type="text/javascript" src="js/rePresentTC.js"></script>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    <h2> اعادة تقديم دورة سابقة </h2>
                    <center>
                         <p><font color="red">{$msg}</font></p>
                    <div id='tcList' ></div>
                    <form action="rePresentTC.php" method="POST" enctype="multipart/form-data">
                    <div id='info' style="display:none" >           
                        
                        <label>ملخص الدورة</label>

                        <input type='text' id='abstract' name='abstract' />
                        <label>اهداف الدورة</label>
                        <input type='text' id='Goals' name='Goals' />

                        <br>
                        <div id='trainer'>
                        </div>
                        <input type="hidden" id="tr_id" name="tr_id"/> 
                        
                        <input type="hidden" id="tc_id" name="tc_id"/> 
                        <br>
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
                        وقت بداية الدورة
                        <div id='startAt'></div>
                        </br>
                        <input type="text" id="Location" name="Location"/>       
                        </br>
                        </br>
                        <input type="text" id="capacity" name="capacity" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>       
                        </br>
                        </br>
                        <div id='TypeTc'>
                        </div>
                        <input type="hidden" id="type" name="type"/> 
                        </br>
                                    <input type="hidden" id="p_id" name="p_id"/> 
                         <div> 
           الحقيبة التدريبية  <br>
           <input type="file" name="hout" id="hout"  accept='application/pdf , application/vnd.wordperfect , application/msword' >     <br> <br>
            </div>
            <br>
            <br>
            <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
            <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
            
           
            <input type="hidden" id="stime" name="stime"/>
            <input type="hidden" id="etime" name="etime"/>
            <input type="hidden" id="start_at" name="start_at"/>
            </form>

                    </div>
                </center>
                </section>          
            </section>              
  {include file='footer.tpl'}



