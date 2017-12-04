<?php
/* Smarty version 3.1.30, created on 2017-12-03 10:37:53
  from "C:\xampp\htdocs\dsr_rtp\templates\AdminLogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23c5f1d6fd96_19463896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3880bebf38a715ed8dc6cfae8958cb21eb721ddc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\templates\\AdminLogin.tpl',
      1 => 1512293830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a23c5f1d6fd96_19463896 (Smarty_Internal_Template $_smarty_tpl) {
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
