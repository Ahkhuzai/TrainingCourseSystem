<?php
/* Smarty version 3.1.30, created on 2018-01-01 07:01:57
  from "C:\xampp\htdocs\rtp\Trainee\templates\registrationRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a49ced5157830_54061262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2dc5b94e4f069a935ffe16cbeae70acc0b6ad04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainee\\templates\\registrationRequest.tpl',
      1 => 1514617558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a49ced5157830_54061262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/registrationRequest.js"><?php echo '</script'; ?>
>
<center>    
    <div  id='tcList'>      
    </div>
    <br>
    <form action="registrationRequest.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </center>
    </br>
</div>
    <br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
