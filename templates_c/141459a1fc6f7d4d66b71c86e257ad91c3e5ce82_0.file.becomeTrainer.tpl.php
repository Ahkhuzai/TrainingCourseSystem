<?php
/* Smarty version 3.1.30, created on 2017-11-02 10:20:55
  from "C:\xampp\htdocs\rtp_Design\templates\becomeTrainer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fae377ee2a74_69238518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '141459a1fc6f7d4d66b71c86e257ad91c3e5ce82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_Design\\templates\\becomeTrainer.tpl',
      1 => 1509614453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59fae377ee2a74_69238518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/newTrainer.js"><?php echo '</script'; ?>
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
    <legend>الرجاء تعبئة البيانات التالية:</legend>
    <center>
        <p>السيرة الذاتية</p>
            <div id="resume" name='resume'> 
            </div>
            </br>
            <div id='qualification'>
            </div>
            </br>
            <input type='text' id='major' name='major'  >
            </br>
            </br>
            <input type='text' id='special' name='special'  >
            </br>
            </br>
            <input type='submit' id='submit' name='submit'  value="متابعة"  >
            </br>
            </br>
    </center>
    </fieldset>
    </form>
    <br>
    <br>
</div>
    <br>
  
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
