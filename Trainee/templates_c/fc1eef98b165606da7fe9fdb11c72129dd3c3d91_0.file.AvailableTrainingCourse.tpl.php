<?php
/* Smarty version 3.1.30, created on 2018-01-06 21:45:12
  from "/opt/lampp/htdocs/rtp/Trainee/templates/AvailableTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a513558ba20e9_08075916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc1eef98b165606da7fe9fdb11c72129dd3c3d91' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Trainee/templates/AvailableTrainingCourse.tpl',
      1 => 1515180730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a513558ba20e9_08075916 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src='js/AvailableTrainingCourse.js'><?php echo '</script'; ?>
>
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">	
    <center>    
        <h2>الدورات التدريبية</h2>
            
                <center> 
                    <div  id='AvailableTC'>      
                    </div>  
                </center>
         
      
    </center>
                </section>
                </div>
        </div>
</section>				
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
