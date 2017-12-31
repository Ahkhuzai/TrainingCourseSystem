<?php
/* Smarty version 3.1.30, created on 2017-12-21 07:47:32
  from "C:\xampp\htdocs\dsr_rtp\Admin\templates\AdminViewTrainer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b5904f1a575_16169109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d894af5afc5444347747f6d46e15fd5ad6f05a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Admin\\templates\\AdminViewTrainer.tpl',
      1 => 1513238178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminMain.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b5904f1a575_16169109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:AdminMain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminViewTrainer.js"><?php echo '</script'; ?>
>
    <center>
    <h3>قائمة المدربين</h3>
    <div  id='trList'>      
    </div>
    <br>
    <form action="AdminViewTrainer.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </br>
    <center>

</div>
    <br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
