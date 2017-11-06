<?php
/* Smarty version 3.1.30, created on 2017-11-05 10:00:52
  from "C:\xampp\htdocs\rtp_Design\templates\singleTC.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fed3449c04c5_77228292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ace6276a9fbac0410ed74304029b70c1024d2f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_Design\\templates\\singleTC.tpl',
      1 => 1509872452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59fed3449c04c5_77228292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
><?php echo '</script'; ?>
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
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    <center>
       
            <input type="text" id="Tname" name="Tname"/>
            </br>
            </br>
            <input type="text" id="Trname" name="Trname"/>       
            </br>
            </br>
            <textarea id='Subjects' name='Subjects' ></textarea>       
            </br>
            </br>
            <input type="text" id="ForWho" name="ForWho"/>       
            </br>
            </br>
            <input type="text" id="Location" name="Location"/>       
            </br>
            </br>
             <div id='jqxWidget'>
             </div>   
        <div style='margin-top: 10px; font-size: 13px; font-family: Verdana;' id='selection'></div>  
            </br>
            </br>
            <input type="text" id="Weekday" name="Weekday"/>       
            </br>
            </br>
            <input type="text" id="Time" name="Time"/>       
            </br>
            </br>
            <input type="text" id="Hourse" name="Hourse"/>       
            </br>
            </br>
            <input type="text" id="Capacity" name="Capacity"/>       
            </br>
            </br>
            <input type="send" value="ارسال"  name = "send" id='send' class='btn'/>
            <input type="delete" value="حذف"  name = "print" id='print' class='btn'/>
            <input type="print" value="طباعة"  name = "delete" id='delete' class='btn'/> 
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
