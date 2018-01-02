<?php
/* Smarty version 3.1.30, created on 2018-01-02 10:02:24
  from "C:\xampp\htdocs\rtp\Trainer\templates\approveCertificate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b4aa0715319_80550469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55000b3b4c5a1d1312d3567271c319ee9183db72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainer\\templates\\approveCertificate.tpl',
      1 => 1514883576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4b4aa0715319_80550469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/approveCertificate.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">
    <center>
    <div  id='tcList'>
        
    </div>
        <p>لإعتماد الشهادات للمتدربين , الرجاء الضغط على اسم الدورة</p>
    </center>
                </section>
                </div>
        </div>
</section>				
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<?php }
}
