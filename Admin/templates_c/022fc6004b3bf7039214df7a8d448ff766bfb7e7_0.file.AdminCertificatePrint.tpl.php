<?php
/* Smarty version 3.1.30, created on 2017-12-31 07:36:11
  from "C:\xampp\htdocs\rtp\Admin\templates\AdminCertificatePrint.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a48855b620f73_68630973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '022fc6004b3bf7039214df7a8d448ff766bfb7e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\AdminCertificatePrint.tpl',
      1 => 1514619266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a48855b620f73_68630973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminCertificatePrint.js"><?php echo '</script'; ?>
>
    <center>
   <center>
    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
    <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
    </center>
    <h3>قائمة الدورات  المكتملة</h3>
    <div  id='tcCompleteList'>      
    </div>
    <br>
    <form action="AdminCertificatePrint.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </br>
</div>
    <br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
