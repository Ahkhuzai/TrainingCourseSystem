<?php
/* Smarty version 3.1.30, created on 2018-01-22 11:55:39
  from "C:\xampp\htdocs\rtp_s\Trainee\templates\rateTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a65c32b1908f5_93411700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c463d1372163408f00cb52603d853b424b4ecbd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Trainee\\templates\\rateTrainingCourse.tpl',
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
function content_5a65c32b1908f5_93411700 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/rateTrainingCourse.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">     

  
            <center>
         
 
    <div  id='TCRate'>
        
    </div>
        <p> لتقييم الدورة, الرجاء الضغط على اسم الدورة</p>
    </center>
                </section>
                </div>
        </div>
</section>				
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
