<?php
/* Smarty version 3.1.30, created on 2017-12-21 07:28:55
  from "C:\xampp\htdocs\dsr_rtp\Admin\templates\AdminLogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b54a712a755_85827430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb5351a9868de5d4761890030339ff3b2e92e568' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Admin\\templates\\AdminLogin.tpl',
      1 => 1513837726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b54a712a755_85827430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src='js/AdminLogin.js'><?php echo '</script'; ?>
>
<center>
 <h2>بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى</h2>

<br>
<br>
     <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</font></p>        
<form action='AdminLogin.php' method='POST' > 
<input type="text" id="usrName" name='usrName' />
<br>
<br>
<input type="password" id="usrPass" name='usrPass'/> 
<br>
<br>
<input type="submit" value="تسجيل الدخول" name="login" id='login'/>
</form>
<p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>     
</div>
    </br>
    </center>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 

<?php }
}
