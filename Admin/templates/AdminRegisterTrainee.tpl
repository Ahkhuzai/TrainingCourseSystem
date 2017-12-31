{include file='headerq.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/AdminRegisterTrainee.js"></script>
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <legend>الرجاء تعبئة البيانات التالية:</legend>
    
    <center> 
        <p><font color="green">{$added}</font></p>  
        </br>
        <form action="AdminRegisterTrainee.php" method="POST">
        <input type='text' id='trainee' name='trainee' />
        <input type='submit' id='search' name='search'  value='بحث'/>
        <center>
        <div id="info" name="info" style="display:{$display}" >
            <br>
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
        
        <h3>الرجاء اختيار الدورات المراد تسجيل المتدرب فيها</h3>
        <div id="TraineeTC" > </div>
        </div>
    <br>
    </center>
   <p><font color="red">{$msg}</font></p>    

    <br>
    <br>
    <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
       </fieldset>
    </center>
    </br>
</div>
    <br>
{include file='footer.tpl'}



 

