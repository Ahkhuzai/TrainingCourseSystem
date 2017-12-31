<?php
/* Smarty version 3.1.30, created on 2017-12-21 07:24:57
  from "C:\xampp\htdocs\dsr_rtp\Admin\templates\AdminCompleteTCApprove.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b53b90bd0f5_97244969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f5cc99a0585d54e2a834b805b22c9976160c172' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Admin\\templates\\AdminCompleteTCApprove.tpl',
      1 => 1513582318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminMain.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b53b90bd0f5_97244969 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:AdminMain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminCompleteTCApprove.js"><?php echo '</script'; ?>
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
    <form action="AdminCompleteTCApprove.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </br>
</div>
    <br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
