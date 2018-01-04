{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/AdminAddProgram.js"></script>
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
                    
    <h2> الرجاء إكمال النموذج التالي:</h2>  
    <center>
        <p><font color="red">{$msg}</font></p>
        <p><font color="green">{$added}</font></p>
        
        <form action='AdminAddProgram.php' method='POST' enctype="multipart/form-data">
            <br>
            <input type="text" id="Tname" name="Tname"/>   
            </br>
           
            <input type="text" id="engname" name="engname"/>            
            </br>
         
            <textarea id='abstract' name='abstract' ></textarea>       
            </br>
          
            <textarea id='Goals' name='Goals' ></textarea>       
            </br>
    
            <input type="text" id="Hours" name="Hours" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/> 
            </br>
            
            </br>
             <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
            <input type="submit" value="إضافة"  name = "addProgram" id='addProgram' class='btn'/> 
           
            </form>
            <br>            
    </center>
                </section>   
            </div>
        </div>
            </section>              
  {include file='footer.tpl'}





