<?php
/* Smarty version 3.1.30, created on 2018-01-03 10:23:15
  from "C:\xampp\htdocs\rtp\Admin\templates\AdminViewTrainee.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4ca103f1c5a1_03393845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bafc085edad39edfe24a6abd9ba32c37cb4de18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\AdminViewTrainee.tpl',
      1 => 1514880278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4ca103f1c5a1_03393845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminViewTrainee.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
   <!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
    <center>
    <h3>قائمة المتدربين</h3>
    <div  id='teList'>      
    </div>
    <br>
    <form action="AdminViewTrainee.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
    </br>
    </center>
     </section>   
            </div>
        </div>
 </section>   
           
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
