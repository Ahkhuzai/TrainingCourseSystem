<?php
/* Smarty version 3.1.30, created on 2018-01-07 20:02:21
  from "/opt/lampp/htdocs/rtp/Trainee/templates/rateTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a526ebda2a375_71032082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b6ad612a5083b153344bb6eb3d28789b8687abc' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Trainee/templates/rateTrainingCourse.tpl',
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
function content_5a526ebda2a375_71032082 (Smarty_Internal_Template $_smarty_tpl) {
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
