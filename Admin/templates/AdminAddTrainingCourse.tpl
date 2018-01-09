{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/AdminAddTrainingCourse.js"></script>
<nav id="nav">
	<ul>
		<li><a href="AdminCertificate.php">الشهادات</a></li>
		<li><a href="rePresentTC.php">اعادة تقديم دورة سابقة</a></li>
 	    <li><a href="AdminAddTrainingCourse.php"> اضافة دورة تدريبية</a></li>
        <li><a href="AdminAddProgram.php"> اضافة برنامج تدريبي</a></li>
        <li><a href="ApproveTrainingCourse.php">اعتماد الدورات والبرامج التدريبية</a></li>
        <li><a href="AdminviewTC.php"> استعراض الدورات</a></li>                          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
    <h2>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</h2>
    
    <center>
        <p><font color="green">{$added}</font></p>
        <form action='AdminAddTrainingCourse.php' method='POST' enctype="multipart/form-data">
                <p><font color="red">{$msg}</font></p>
                <br>
             <label> مقدم الدورة</label>
            <div id='trainer'>
            </div>
            <input type="hidden" id="tr_id" name="tr_id"/> 
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
            <label>تاريخ البداية</label>
        <div id='dates'>
        </div> 
            <br>
           <label>تاريخ النهاية</label>
        <div id='datee'>
        </div>
    
            </br>
            <label>وقت بداية الدورة</label>
            </br>
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
            
            <div> 
           الحقيبة التدريبية  <br>
           <input type="file" name="hout" id="hout"  accept='application/pdf , application/vnd.wordperfect , application/msword' >     <br> <br>
            </div>


             هل الدورة تتبع برنامج تدريبي؟ 
            <div id='isinProgram'>
                <span>نعم</span></div>
    
            <div id='program'>
            </div>
            <input type="hidden" id="p_id" name="p_id"/> 
            <br>
            <br>
            <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
            <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
           
           
            <input type="hidden" id="stime" name="stime"/>
            <input type="hidden" id="etime" name="etime"/>
            <input type="hidden" id="start_at" name="start_at"/>
            </form>
        
            <br>
           
    </center>
    
                </section>   
            </div>
        </div>
            </section>              
  {include file='footer.tpl'}







