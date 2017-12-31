<?php
/* Smarty version 3.1.30, created on 2017-12-29 18:43:37
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/Trainee/templates/rateTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a467ec9189890_73035515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '845650e4b9d79a89c72629a0ea56446de2ea2d15' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/Trainee/templates/rateTrainingCourse.tpl',
      1 => 1514094110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a467ec9189890_73035515 (Smarty_Internal_Template $_smarty_tpl) {
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
