<?php
/* Smarty version 3.1.30, created on 2017-11-02 10:21:15
  from "C:\xampp\htdocs\rtp_Design\templates\contract.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fae38b3bde83_86550688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f440c1e82e44b65f91bb8a2b7ed3f1642b05897' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_Design\\templates\\contract.tpl',
      1 => 1509614471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59fae38b3bde83_86550688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/contract.js"><?php echo '</script'; ?>
>

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
  
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
