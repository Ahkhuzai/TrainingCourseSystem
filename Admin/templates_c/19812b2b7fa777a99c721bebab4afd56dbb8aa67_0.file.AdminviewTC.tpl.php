<?php
/* Smarty version 3.1.30, created on 2017-12-31 07:34:16
  from "C:\xampp\htdocs\rtp\Admin\templates\AdminviewTC.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4884e80073a0_11412714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19812b2b7fa777a99c721bebab4afd56dbb8aa67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\AdminviewTC.tpl',
      1 => 1514617556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4884e80073a0_11412714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminviewTC.js"><?php echo '</script'; ?>
>

<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
<center>
    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
    <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
</center>
    <center>
    <h2>قائمة الدورات</h2>

    <div  id='tcList'>      
    </div>
    <br>
    <form action="AdminviewTC.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
</center>
                </section>          
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
