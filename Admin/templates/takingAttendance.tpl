{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/takingAttendance.js"></script>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    
    <h2> اسم الدورة: </h2>  
    <p>{$tname}</p>
    <h2> مقدم الدورة: </h2>  
    <p>{$trainee}</p>
    <h2> اسم المتدرب: </h2>  
    <p>{$trainee}</p>
    
    <center>
        <p><font color="green"></font></p>
        
        <form action='takingAttendance.php' method='POST' >
            <input type="submit" value="تسجيل"  name = "in" id='in' class='btn'/> 
        </form>
            <br>            
    </center>
                   </section>          
            </section>              
  {include file='footer.tpl'}




