<?php
/* Smarty version 3.1.30, created on 2018-01-02 09:02:36
  from "C:\xampp\htdocs\rtp\Admin\templates\AdminCertificate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b3c9ce21130_88203078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af01f8383cf21fb9cd63e8420d00c2f0cb59c225' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\AdminCertificate.tpl',
      1 => 1514879748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4b3c9ce21130_88203078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<nav id="nav">
	<ul>
		<li><a href="AdminCertificateApprove.php">اعتماد الشهادات</a></li>
		<li><a href="AdminCertificatePrint.php">طباعة الشهادات</a></li>                       
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    <p> Welcome <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </p>
                </section>   
            </div>
        </div>
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
