<?php
/* Smarty version 3.1.30, created on 2018-01-17 09:31:13
  from "C:\xampp\htdocs\rtp_s\Trainee\templates\registrationRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f09d1a8fa34_66423552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b00eceadfe50065d2c8ad555d9a525cb61b2722' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Trainee\\templates\\registrationRequest.tpl',
      1 => 1516094994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a5f09d1a8fa34_66423552 (Smarty_Internal_Template $_smarty_tpl) {
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
