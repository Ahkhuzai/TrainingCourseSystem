{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}
<script type="text/javascript" src="js/trainingCourseSta.js"></script>
<nav id="nav">
	<ul>
            <li><a href="trainerSta.php"> احصائيات المدربين</a></li>
 	   <li><a href="traineeSta.php"> احصائيات المتدربين</a></li>
       <li><a href="trainingCourseSta.php"> احصائيات الدورات التدريبية</a></li>                          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    <center>
                       <h3>قائمة الدورات  المكتملة</h3>
                        <div  id='tcCompleteList'>      
                        </div>
                        <br>
                        <form action="trainingCourseSta.php" method="POST">
                            <input type="submit" value="استخراج التقرير"  name = "create" id='create' class='btn' /> 
                            <input type="hidden"   name = "ids" id='ids' class='btn' />  
                        </form>
                        
                      
                    </center>
                </section>          
            </section>              
  {include file='footer.tpl'}





