<?php
/* Smarty version 3.1.30, created on 2018-01-03 06:43:29
  from "C:\xampp\htdocs\rtp\Admin\templates\AdminLogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4c6d81717c09_17032756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc68e5652b802dee1d9b4266eff212322a27c12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\AdminLogin.tpl',
      1 => 1514879613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4c6d81717c09_17032756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src='js/AdminLogin.js'><?php echo '</script'; ?>
>
<center>
<!-- Introduction -->
<section id="intro" class="main">
<div class="spotlight">
	<div class="content">
		<section class="main">
			<br>
			 <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</font></p>        
			<form action='AdminLogin.php' method='POST' > 
			<input type="text" id="usrName" name='usrName' />
			<br>
			<input type="password" id="usrPass" name='usrPass'/> 
			<br>
			<input type="submit" value="تسجيل الدخول" name="login" id='login'/>
			</form>   
			</div>
			    </br>
                </section>   
            </div>
        </div>
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
