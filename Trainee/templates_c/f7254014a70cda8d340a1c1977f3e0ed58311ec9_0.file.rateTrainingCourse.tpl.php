<?php
/* Smarty version 3.1.30, created on 2018-01-01 07:01:59
  from "C:\xampp\htdocs\rtp\Trainee\templates\rateTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a49ced7ca0b63_19686894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7254014a70cda8d340a1c1977f3e0ed58311ec9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainee\\templates\\rateTrainingCourse.tpl',
      1 => 1514617558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a49ced7ca0b63_19686894 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/rateTrainingCourse.js"><?php echo '</script'; ?>
>

    <center>
    <div  id='TCRate'>
        
    </div>
        <p> لتقييم الدورة, الرجاء الضغط على اسم الدورة</p>
    </center>
    <br>
    <br>
    <br>
</div>
    <br>
  
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>







<?php }
}
