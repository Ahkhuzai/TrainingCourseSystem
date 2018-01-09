<?php
/* Smarty version 3.1.30, created on 2018-01-09 09:45:59
  from "C:\xampp\htdocs\rtp\Admin\templates\CloseTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a54814719fd47_80566770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94d09644d149df81d0272db108e76a6c0aab7fc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\CloseTrainingCourse.tpl',
      1 => 1515487524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a54814719fd47_80566770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/CloseTrainingCourse.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    <center>
                    <h2>
                    استعراض الدورات
                    </h2>
                    </center>
                <center>                   
                    <div  id='tcRegister'>      
                    </div>                       
             
                </center>
    </section>   
            </div>
        </div>
</section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
