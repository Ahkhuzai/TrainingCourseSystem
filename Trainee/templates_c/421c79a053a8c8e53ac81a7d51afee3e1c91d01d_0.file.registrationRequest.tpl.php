<?php
/* Smarty version 3.1.30, created on 2018-01-07 19:57:35
  from "/opt/lampp/htdocs/rtp/Trainee/templates/registrationRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a526d9fde9f71_92541731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '421c79a053a8c8e53ac81a7d51afee3e1c91d01d' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Trainee/templates/registrationRequest.tpl',
      1 => 1515323304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a526d9fde9f71_92541731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/registrationRequest.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">
<center>    
    <div  id='tcList'>      
    </div>
    <br>
    <form action="registrationRequest.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
</center>
                </section>
                </div>
        </div>
</section>				
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
