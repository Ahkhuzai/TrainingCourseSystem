<?php
/* Smarty version 3.1.30, created on 2018-01-21 09:07:04
  from "C:\xampp\htdocs\rtp_s\Admin\templates\TrainingCourseAndProgram.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a644a281f6213_83554239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4192b6ee7af694df0ca616dbd1e47ad2ddc792b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Admin\\templates\\TrainingCourseAndProgram.tpl',
      1 => 1516094901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a644a281f6213_83554239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<nav id="nav">
	<ul>
    <li><a href="AdminCertificate.php">الشهادات</a></li>
    <li><a href="AdminTCandProgram.php">الدورات والبرامج التدريبية</a></li>
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
