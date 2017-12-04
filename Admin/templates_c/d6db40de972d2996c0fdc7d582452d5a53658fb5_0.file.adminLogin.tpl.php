<?php
/* Smarty version 3.1.30, created on 2017-12-03 10:22:21
  from "C:\xampp\htdocs\dsr_rtp\templates\adminLogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23c24d610ab2_26287655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6db40de972d2996c0fdc7d582452d5a53658fb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\templates\\adminLogin.tpl',
      1 => 1512292605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header1.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a23c24d610ab2_26287655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src='js/AdminLogin.js'><?php echo '</script'; ?>
>
<center>
 <h2>بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى</h2>
<img src="images/logo_dsr.png" width="10%"/>
<br>
<br>
            
<form action='AdminLogin.php' method='POST' > 
<input type="text" id="usrName" name='usrName' />
<br />
<br />
<input type="password" id="usrPass" name='usrPass'/> 
<br />
<br />
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
