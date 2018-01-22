<?php
/* Smarty version 3.1.30, created on 2018-01-07 19:48:46
  from "/opt/lampp/htdocs/rtp/main/templates/unAuthorized.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a526b8eb3e621_12946458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77f537d5e688b3ba94c02147dea19806c0646194' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/main/templates/unAuthorized.tpl',
      1 => 1515272884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footerq.tpl' => 1,
  ),
),false)) {
function content_5a526b8eb3e621_12946458 (Smarty_Internal_Template $_smarty_tpl) {
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
