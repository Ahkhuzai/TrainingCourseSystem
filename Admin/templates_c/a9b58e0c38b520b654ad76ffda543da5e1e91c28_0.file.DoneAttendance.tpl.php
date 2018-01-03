<?php
/* Smarty version 3.1.30, created on 2018-01-03 08:12:30
  from "C:\xampp\htdocs\rtp\Admin\templates\DoneAttendance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4c825e03a340_53301841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9b58e0c38b520b654ad76ffda543da5e1e91c28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\DoneAttendance.tpl',
      1 => 1514876622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4c825e03a340_53301841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
                    <h3><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></h3>
                </section>          
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
