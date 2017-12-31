<?php
/* Smarty version 3.1.30, created on 2017-12-21 07:24:51
  from "C:\xampp\htdocs\dsr_rtp\Admin\templates\AdminViewTrainee.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b53b3124db0_81864330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97638b4ef658730c46074d8f15fb2f4a35bab851' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Admin\\templates\\AdminViewTrainee.tpl',
      1 => 1513238634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminMain.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b53b3124db0_81864330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:AdminMain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
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
