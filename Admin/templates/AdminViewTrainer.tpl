{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/AdminViewTrainer.js"></script>
<nav id="nav">
	<ul>
        <li><a href="AdminViewTrainer.php"> استعراض المدربين</a></li>
        <li><a href="AdminAddTrainer.php"> اضافة مدرب</a></li>                       
          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">   
    <center>
    <h3>قائمة المدربين</h3>
    <div  id='trList'>      
    </div>
    <br>
    <form action="AdminViewTrainer.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </br>

                    </center>
                </section>      
            </div>
        </div>
            </section>              
  {include file='footer.tpl'}

