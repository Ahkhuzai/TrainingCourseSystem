<?php
/* Smarty version 3.1.30, created on 2018-01-01 07:41:00
  from "C:\xampp\htdocs\rtp\Trainee\templates\prevTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a49d7fc890591_35556045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d918857ad54f754497ca97ab1bd34b8b3229fcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainee\\templates\\prevTrainingCourse.tpl',
      1 => 1514788838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a49d7fc890591_35556045 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src='js/prevTrainingCourse.js'><?php echo '</script'; ?>
>
	                       <!-- Introduction -->
                            <section id="intro" class="main">
                                <div class="spotlight">
                                    <div class="content align-right">
                                    <section class="main">
    <center>
        <div  id='CompleteTC'>      
                    </div> 

    </center>
                    </section>          
                            </section>  
    <br>
    <br>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
