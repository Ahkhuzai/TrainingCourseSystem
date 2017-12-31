<?php
/* Smarty version 3.1.30, created on 2017-12-24 06:23:37
  from "C:\xampp\htdocs\dsr_rtp\Trainee\templates\SingleProgram.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3f39d97a5e76_26626462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82e1e2c3113781d99af3596bd45fc163191d3d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Trainee\\templates\\SingleProgram.tpl',
      1 => 1513852850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3f39d97a5e76_26626462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/SingleProgram.js"><?php echo '</script'; ?>
>

   
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
            <center>
            <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
            <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
            </center>
    <legend>بيانات البرنامج</legend>
    
    <p> اسم البرنامج </p>
    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

     <p> عدد الساعات </p>
    <?php echo $_smarty_tpl->tpl_vars['hour']->value;?>

     <p> اهداف البرنامج</p>
    <?php echo $_smarty_tpl->tpl_vars['goals']->value;?>

     <p> ملخص البرنامج </p>
    <?php echo $_smarty_tpl->tpl_vars['abstract']->value;?>

    
   
    <center>
         <h1> قائمة الدورات التابعة لهذا البرنامج  </h1>
    <div id='prog_tc' >
    </div>
    <br>
    <br>
    <form action="SingleProgram.php" method="POST" >
    <input type="submit" value="التسجيل في البرنامج"  name = "register" id='register' class='btn'/>
    <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
    </form>      
    </center>
    </fieldset> 
    <br>
    <br>
</div>

    <br>
    <br>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
