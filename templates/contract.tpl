{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/contract.js"></script>

    </br>
<div style="background-color:#ffffff ;height:100%;width:75%; margin:0 auto;" id="rcorners1" >
    </br>
    <div id='menu' style='text-align: center; position: relative; border: none;'>
        <ul>
            <li style="width:15%"><a href="http://www.uqu.edu.sa">تسجيل الخروج  </a>
            </li>
            
            <li style="width:15%"><a href="trainer.php">المدربين</a>
                <ul>
                    <li><a href="addTraining.php">طلب تقديم دورة</a></li>
                    <li><a href="viewRequest.php">استعراض الطلبات</a></li>
                    <li><a href="oldTraining.php">الدورات السابقة</a></li>
                    <li><a href="approveCertificate.php"> اعتماد الشهادات</a></li>
                </ul>
            </li>
            <li style="width:15%"><a href="trainee.php"> المتدربين </a>
                <ul >
                    <li><a href="availableTraining.php"> الدورات المتاحة</a></li>
                    <li><a href="registration.php"> استعراض طلبات التسجيل</a></li>
                    <li><a href="oldRegister.php"> الدورات السابقة</a></li>
                    <li><a href="apology.php"> الاعتذار عن الحضور</a></li>
                    <li><a href="rateTraining">التقييم</a></li>
                    <li><a href="viewCertificate.php">الشهادات</a></li>
                </ul>
            </li>
            <li style="width:15%"><a href="index.php">الرئيسية </a>
            </li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <form action='addTraining.php' method='POST'>
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <legend>تعليمات هامة:</legend>
    
    <ul dir="rtl">
      <li> البند الاول
      </li>
       <li> البند الثاني
      </li>
       <li> البند الثالث
      </li>
       <li> البند الراابع
      </li>
       <li> البند الخامس
      </li>
       <li> البند السادس
      </li>
       <li> البند السابع
      </li>
    </ul>
  <center>
            <input type='submit' id='agree' name='agree'  value="متابعة"  >
            <input type='submit' id='notAgree' name='notAgree'  value="تراجع "  >
            </br>
            </br>
    </center>
    </fieldset>
    </form>
    <br>
    <br>
    <br>
</div>
    <br>
  
    {include file='footer.tpl'}


