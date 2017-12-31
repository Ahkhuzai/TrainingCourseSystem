<?php
/* Smarty version 3.1.30, created on 2017-12-24 08:12:36
  from "C:\xampp\htdocs\dsr_rtp\Trainee\templates\viewRequestOfTrainee.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3f5364ba10f8_11961814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82628c4440423d70088d16204b91ec3af4b52b6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Trainee\\templates\\viewRequestOfTrainee.tpl',
      1 => 1514099539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3f5364ba10f8_11961814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/viewRequestOfTrainee.js"><?php echo '</script'; ?>
>

    <center>
        <h2>  طلبات الدورات</h2>
    <div  id='grid'>
    </div>
        <p> للإطلاع على تفاصيل الطلب الرجاء الضغط على اسم الدورة</p>
        <br>
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
