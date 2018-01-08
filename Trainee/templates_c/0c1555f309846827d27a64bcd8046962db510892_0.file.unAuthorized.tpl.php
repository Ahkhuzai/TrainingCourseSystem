<?php
/* Smarty version 3.1.30, created on 2018-01-06 22:14:23
  from "/opt/lampp/htdocs/rtp/Trainee/templates/unAuthorized.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a513c2f83e3e7_65539721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c1555f309846827d27a64bcd8046962db510892' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Trainee/templates/unAuthorized.tpl',
      1 => 1515180730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a513c2f83e3e7_65539721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
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
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





    

<?php }
}
