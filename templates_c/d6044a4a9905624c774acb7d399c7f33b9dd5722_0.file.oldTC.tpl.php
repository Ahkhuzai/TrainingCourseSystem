<?php
/* Smarty version 3.1.30, created on 2017-11-06 10:25:31
  from "C:\xampp\htdocs\rtp_Design\templates\oldTC.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a002a8b5d0d43_27408583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6044a4a9905624c774acb7d399c7f33b9dd5722' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_Design\\templates\\oldTC.tpl',
      1 => 1509960331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a002a8b5d0d43_27408583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/oldTC.js"><?php echo '</script'; ?>
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
    <center>
    <fieldset style="width:70%; margin:0 auto;">
        <legend>بيانات الدورة</legend>
    <h3>اسم الدورة</h3> 
    <h3> تاريخ الانعقاد</h3>
    <h3> المدة</h3>
    <h3> مجموع الحضور</h3>
    <h3> مكان اقامة الدورة</h3>
    <h3> التقييم العام للمدرب</h3>
    <h3> التقييم العام للدورة</h3>

     </BR>
         </BR>
     <div style='height: 100%; width: 100%;'>
        <div id='host' style="margin: 0 auto; width:600px; height:300px;">
        <div id='jqxChart' style="width:600px; height:300px; position: relative; left: 0px; top: 0px;">
        </div>
    </div>
         </BR>
         
        <input type="button" value="TO PDF"  name = "pdf" id='pdf' class='btn'/> 
     
        </fieldset>
        </br>
            </center>
    </div>
</div>
    <br>
  
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
