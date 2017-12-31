<?php
/* Smarty version 3.1.30, created on 2017-12-25 10:30:08
  from "C:\xampp\htdocs\dsr_rtp\Trainer\templates\oldTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a40c52093ea89_16528127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '720e45ff6170f0afe0d5b582f854aadd8d2bf376' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Trainer\\templates\\oldTrainingCourse.tpl',
      1 => 1514187556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a40c52093ea89_16528127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/oldTrainingCourse.js"><?php echo '</script'; ?>
>

    <center>
    <div  id='tcList'>
        
    </div>
                <p> للإطلاع على تفاصيل الدورة وتقييمها الرجاء الضغط على اسم الدورة</p>
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
