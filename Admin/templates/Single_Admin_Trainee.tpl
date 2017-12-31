{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/Single_Admin_Trainee.js"></script>
    <center>
        <h3>اسم المتدرب</h3>
        <p>{$name}</p>
        <h3>الكلية </h3>
        <p>{$department}</p>
        <h3>التخصص العام</h3>
        <p>{$major}</p>
        <h3>التخصص الدقيق</h3>
        <p>{$spical}</p>
        <h3>رقم الهاتف</h3>
        <p>{$phone}</p>
        <h3>البريد الالكتروني</h3>
        <p>{$email}</p>    
        <h3>حالة التسجيل</h3>
        <p>{$reg_status}</p>
    <h2>قائمة الدورات</h2>
    <div  id='tcList'>      
    </div>
    <br>
    <form action="Single_Admin_Trainee.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </center>
    </br>
</div>
    <br>
{include file='footer.tpl'}



 
