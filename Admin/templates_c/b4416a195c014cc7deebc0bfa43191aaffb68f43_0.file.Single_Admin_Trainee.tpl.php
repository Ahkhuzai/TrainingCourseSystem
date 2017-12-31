<?php
/* Smarty version 3.1.30, created on 2017-12-31 09:15:38
  from "C:\xampp\htdocs\rtp\Admin\templates\Single_Admin_Trainee.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a489caa6e8f22_39076307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4416a195c014cc7deebc0bfa43191aaffb68f43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\Single_Admin_Trainee.tpl',
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
function content_5a489caa6e8f22_39076307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/Single_Admin_Trainee.js"><?php echo '</script'; ?>
>
    <center>
        <h3>اسم المتدرب</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
        <h3>الكلية </h3>
        <p><?php echo $_smarty_tpl->tpl_vars['department']->value;?>
</p>
        <h3>التخصص العام</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['major']->value;?>
</p>
        <h3>التخصص الدقيق</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['spical']->value;?>
</p>
        <h3>رقم الهاتف</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</p>
        <h3>البريد الالكتروني</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>    
        <h3>حالة التسجيل</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['reg_status']->value;?>
</p>
    <h2>قائمة الدورات</h2>
    <div  id='tcList'>      
    </div>
    <br>
    <form action="Single_Admin_Trainee.php" method="POST">
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
