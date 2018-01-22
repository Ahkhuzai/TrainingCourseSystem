<?php
/* Smarty version 3.1.30, created on 2018-01-22 11:59:09
  from "C:\xampp\htdocs\rtp_s\Trainee\templates\SingleProgram.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a65c3fdd4e2f3_76113337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daaf2b46082e00ecd79e8e25634d9621af84d5b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Trainee\\templates\\SingleProgram.tpl',
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
function content_5a65c3fdd4e2f3_76113337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/SingleProgram.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">     

  
            <center>
                    <h1>بيانات البرنامج</h1>
            <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
            <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
            </center>

    
    <h3> اسم البرنامج </h3>
    <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
     <h3> عدد الساعات </h3>
    <p><?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
</p>
     <h3> اهداف البرنامج</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['goals']->value;?>
</p>
     <h3> ملخص البرنامج </h3>
    <p><?php echo $_smarty_tpl->tpl_vars['abstract']->value;?>
</p>
    
   
    <center>
         <h1> قائمة الدورات التابعة لهذا البرنامج  </h1>
    <div id='prog_tc' >
    </div>
    <br>
    <br>
    <form action="SingleProgram.php" method="POST" >
        <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
    <input type="submit" value='طباعة الشهادة'  name = "print" id='print' class='btn'/>
 
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
