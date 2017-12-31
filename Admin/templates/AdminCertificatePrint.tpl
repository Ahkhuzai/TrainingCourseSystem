{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/AdminCertificatePrint.js"></script>
    <center>
   <center>
    <h3><font color="green">{$added}</font></h3>
    <p><font color="red">{$msg}</font></p>
    </center>
    <h3>قائمة الدورات  المكتملة</h3>
    <div  id='tcCompleteList'>      
    </div>
    <br>
    <form action="AdminCertificatePrint.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </br>
</div>
    <br>
{include file='footer.tpl'}




