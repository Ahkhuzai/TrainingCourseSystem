{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/SingleCompletetcView.js"></script>
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
   <center>
    <h3><font color="green">{$added}</font></h3>
    <p><font color="red">{$msg}</font></p>
    </center>
    <br>
    <br>
    <div id="pr_content">
    <h3>مقدم الدورة </h3> 
    <p>{$trname}</p>   
    <h3 >اسم الدورة</h3> 
    <p id="nameOfTC">{$name}</p>
     </div>
    <h3> تاريخها </h3>
    <p>{$start_date} من  <br>
    {$end_date} الى </p>
    <h3>عدد ساعات الدورة </h3>
    <p> {$hours} </p>
    <h3>وقت بداية الدورة </h3>
    <p> {$start_at} </p>
      <h3>مكان اقامة الدورة</h3>
    <p> {$location} </p>
   
    <h3>العدد الاجمالي للمقاعد</h3>
    <p> {$capacity} </p>
  
    <h3> ملخص الدورة</h3>
    <p>{$abstract}</p>
    <h3>اهداف الدورة</h3>
    <p>{$goals}</p>  
  
    <h3>الحقيبة التدريبية</h3>
    <p><a href="{$url}" >  من هنا</a> </p>
    </br>
    </br> 
    <center>
    <h3>قائمة الحاضرين</h3>

    <div  id='tcRegisterTrainee'>      
    </div>
    <br>
    <h3>احصائيات الحاضرين</h3>
    <br>
    <div id='chartRank' style="width: 850px; height: 500px;">
	</div>
    </br>
    <br>
    <div id='chartGender' style="width: 850px; height: 500px;">
	</div>
    </br>
    <br>
        <div style='height: 100%; width: 100%;'>
        <div id='host' style="margin: 0 auto; width:850px; height:500px;">
        <div id='chartDepartment' style="width:850px; height:500px; position: relative; left: 0px; top: 0px;">
        </div>
            </div>
        </div>
    </br>
    <div style='height: 100%; width: 100%;'>
        <div id='host' style="margin: 0 auto; width:850px; height:500px;">
        <div id='jqxChart' style="width:850px; height:500px; position: relative; left: 0px; top: 0px;">
        </div>
            </div>
        </div>
    <br>
    <br>
    <div id='comments'>
            <div>
                 اراء وملاحظات المتدربين للتحسين من مستوى الدورة</div>
            <div>
                <ul style="direction: rtl;">
                  
                        {foreach $comments as $comment }      
                            {strip} 	
                                <li> +  {$comment.comments}  </li>     		 
                            {/strip}
                            {/foreach}     
                    </li>
                </ul>
            </div> 
        </div>
        <br>
    <br>
    
    <form action="Single_Admin_tcView.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
        <input type="button" value='طباعة'  name = "print" id='print' class='btn'/>
    </form>
</center>
</section>    
            </div></div>
</section>              
  {include file='footer.tpl'}




