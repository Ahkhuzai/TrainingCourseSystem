<?php
/* Smarty version 3.1.30, created on 2018-01-07 20:04:03
  from "/opt/lampp/htdocs/rtp/Trainer/templates/SingleApproveTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a526f23712437_71815335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12f5b583fc15bebda32f43d658712d0c7db72ea7' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Trainer/templates/SingleApproveTrainingCourse.tpl',
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
function content_5a526f23712437_71815335 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/SingleApproveTrainingCourse.js"><?php echo '</script'; ?>
>
   <!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">   

   <center>
          <h3 align="right">بيانات الدورة</h3>
    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
    <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
    </center>
    <br>
    <br> 
    <h3 >اسم الدورة</h3> 
    <p id="nameOfTC"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
    <h3> تاريخها </h3>
    <p><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
 من  <br>
    <?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
 الى </p>
    </br>
    </br> 
    <center>
    <h3>قائمة المسجلين</h3>
    <div  id='tcRegisterTrainee'>      
    </div>
    <br>
    <br>
    <form action="SingleApproveTrainingCourse.php" method="POST">
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