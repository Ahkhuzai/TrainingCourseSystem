<?php
/* Smarty version 3.1.30, created on 2018-01-04 07:24:27
  from "C:\xampp\htdocs\rtp\Trainee\templates\Blocked.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4dc89b53bc05_68656183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '385ca674aad3921591e73d72d0e37adb5b00bd32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainee\\templates\\Blocked.tpl',
      1 => 1515046926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4dc89b53bc05_68656183 (Smarty_Internal_Template $_smarty_tpl) {
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
