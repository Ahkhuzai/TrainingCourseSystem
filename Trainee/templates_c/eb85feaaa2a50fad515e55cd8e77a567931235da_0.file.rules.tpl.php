<?php
/* Smarty version 3.1.30, created on 2017-12-25 06:47:28
  from "C:\xampp\htdocs\dsr_rtp\Trainee\templates\rules.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4090f0dd3ff9_84696659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb85feaaa2a50fad515e55cd8e77a567931235da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Trainee\\templates\\rules.tpl',
      1 => 1514180670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4090f0dd3ff9_84696659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/ruls.js"><?php echo '</script'; ?>
>

    <form action='SingleTrainingCourseView.php' method='POST'>
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <legend>تعليمات هامة  قبل التسجيل :</legend>
    
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
