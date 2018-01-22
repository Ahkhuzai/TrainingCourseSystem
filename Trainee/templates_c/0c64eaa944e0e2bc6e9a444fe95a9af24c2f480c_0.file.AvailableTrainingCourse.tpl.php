<?php
/* Smarty version 3.1.30, created on 2018-01-17 09:30:15
  from "C:\xampp\htdocs\rtp_s\Trainee\templates\AvailableTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f09978abc16_43575362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c64eaa944e0e2bc6e9a444fe95a9af24c2f480c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Trainee\\templates\\AvailableTrainingCourse.tpl',
      1 => 1516094995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a5f09978abc16_43575362 (Smarty_Internal_Template $_smarty_tpl) {
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
