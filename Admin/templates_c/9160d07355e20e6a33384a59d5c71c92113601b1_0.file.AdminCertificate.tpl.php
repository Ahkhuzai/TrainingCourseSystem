<?php
/* Smarty version 3.1.30, created on 2018-01-07 22:14:21
  from "/opt/lampp/htdocs/rtp/Admin/templates/AdminCertificate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a528dad76cc38_88357996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9160d07355e20e6a33384a59d5c71c92113601b1' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Admin/templates/AdminCertificate.tpl',
      1 => 1515323304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a528dad76cc38_88357996 (Smarty_Internal_Template $_smarty_tpl) {
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
