<?php
/* Smarty version 3.1.30, created on 2018-01-02 10:02:52
  from "C:\xampp\htdocs\rtp\Trainee\templates\AvailableTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b4abc475fb9_36640951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d63c74f34d3d0908c2685c2e7567c48992390b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainee\\templates\\AvailableTrainingCourse.tpl',
      1 => 1514882607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4b4abc475fb9_36640951 (Smarty_Internal_Template $_smarty_tpl) {
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
