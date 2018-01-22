<?php
/* Smarty version 3.1.30, created on 2018-01-21 09:54:52
  from "C:\xampp\htdocs\rtp_s\Admin\templates\ProgramCerPrint.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a64555c27c9a7_16847165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e2a162a0539781269e6f281f0ffd2dc79e92dc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Admin\\templates\\ProgramCerPrint.tpl',
      1 => 1516524889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a64555c27c9a7_16847165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/ProgramCerPrint.js"><?php echo '</script'; ?>
>
<nav id="nav">
    <ul>
<li><a href="AdminCertificateApprove.php">اعتماد الشهادات</a></li>
		<li><a href="AdminCertificatePrint.php">طباعة الشهادات</a></li> 
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">    
  <div id='pr_content'>
   <center>
 
          <h2>بيانات البرنامج</h2>
    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
    <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
    </center>
    <br>
    <br>
     
    <h3>اسم البرنامج </h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>   
    </div>
    <h3> ملخص البرنامج </h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['abstract']->value;?>
</p>
    <h3> اهداف البرنامج </h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['goals']->value;?>
</p>
  
    <h3>عدد ساعات البرنامج </h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
 </p>

    </br> 
    <center>

    <br>
     <h3>قائمة المسجلين</h3>
        <div id='tcTraineeRegister' ></div>
    <br>
    <br>

   
    <br>
    
    <br>
    
    <form action="ProgramCerPrint.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
        
    </form>
</center>
</section>    
            </div></div>
</section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
