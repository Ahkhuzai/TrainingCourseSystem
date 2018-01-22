<?php
/* Smarty version 3.1.30, created on 2018-01-14 06:13:05
  from "/newhome/dsr/public_html/rtp/main/templates/unAuthorized.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5af4f14323d1_96836510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f6767455cb3e1d6270599673011f685314a888' => 
    array (
      0 => '/newhome/dsr/public_html/rtp/main/templates/unAuthorized.tpl',
      1 => 1515909840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footerq.tpl' => 1,
  ),
),false)) {
function content_5a5af4f14323d1_96836510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<!-- Introduction -->
<section id="intro" class="main">
    <section class="main">
    <center>
        <p><font color="red" ><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>   
    </center>
    
    </section>			
</section>				
    <?php $_smarty_tpl->_subTemplateRender("file:footerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





    

<?php }
}
