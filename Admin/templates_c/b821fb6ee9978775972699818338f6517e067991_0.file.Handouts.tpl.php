<?php
/* Smarty version 3.1.30, created on 2017-12-31 11:02:59
  from "C:\xampp\htdocs\rtp\Admin\templates\Handouts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a48b5d3ab60b7_88927950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b821fb6ee9978775972699818338f6517e067991' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\Handouts.tpl',
      1 => 1514714509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a48b5d3ab60b7_88927950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/Handouts.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    <center> 
                        <div  id='hoRequest'>      
                        </div>  
                    </center>
                </section>          
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
