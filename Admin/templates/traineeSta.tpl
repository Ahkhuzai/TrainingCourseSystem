{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/traineeSta.js"></script>
<nav id="nav">
	<ul>
      <li><a href="trainerSta.php"> احصائيات المدربين</a></li>
 	   <li><a href="traineeSta.php"> احصائيات المتدربين</a></li> 
        <li><a href="ProgramSta.php"> احصائيات البرامج التدريبية</a></li> 
       <li><a href="trainingCourseSta.php"> احصائيات الدورات التدريبية</a></li>                            
    </ul>
</nav>
<!-- Introduction -->
   <!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
    <center>
    <h3>قائمة المتدربين</h3>
    <div  id='teList'>      
    </div>
    <br>
    </br>
    <h3>احصائيات المتدربين</h3>
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
        <form action="traineeSta.php" method="POST">
        <input type="button" value='طباعة'  name = "print" id='print' class='btn'/>
    </form>
    </center>
     </section>   
            </div>
        </div>
 </section>   
           
  {include file='footer.tpl'}

