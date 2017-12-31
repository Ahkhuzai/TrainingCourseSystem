<?php
/* Smarty version 3.1.30, created on 2017-12-30 21:27:17
  from "C:\Program Files (x86)\Ampps\www\rtp\Admin\templates\AdminViewTrainee.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4804b5681d47_51460419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd479c2bf8224530b7601c11354ead2abafc35b' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\rtp\\Admin\\templates\\AdminViewTrainee.tpl',
      1 => 1514657154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4804b5681d47_51460419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminViewTrainee.js"><?php echo '</script'; ?>
>
    <center>
    <h3>قائمة المتدربين</h3>
    <div  id='teList'>      
    </div>
    <br>
    <form action="AdminViewTrainee.php" method="POST">
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
