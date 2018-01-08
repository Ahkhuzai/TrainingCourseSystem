<?php
/* Smarty version 3.1.30, created on 2018-01-07 20:03:59
  from "/opt/lampp/htdocs/rtp/Trainer/templates/approveCertificate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a526f1fe036e5_15834492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b72694c4439396bb1567c33c7a8ace1e088ec54' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Trainer/templates/approveCertificate.tpl',
      1 => 1515323304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a526f1fe036e5_15834492 (Smarty_Internal_Template $_smarty_tpl) {
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
