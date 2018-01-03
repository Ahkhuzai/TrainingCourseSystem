<?php
/* Smarty version 3.1.30, created on 2018-01-03 08:11:27
  from "C:\xampp\htdocs\rtp\Admin\templates\takingAttendance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4c821fdbf275_36277138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c94af63486eb879b5cf78ac18bca6b31fef7977f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\takingAttendance.tpl',
      1 => 1514880705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4c821fdbf275_36277138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/takingAttendance.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                     <h3><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></h3>
    <h2> اسم الدورة: </h2>  
    <p><?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
</p>
    <h2> مقدم الدورة: </h2>  
    <p><?php echo $_smarty_tpl->tpl_vars['trainee']->value;?>
</p>
    <h2> اسم المتدرب: </h2>  
    <p><?php echo $_smarty_tpl->tpl_vars['trainee']->value;?>
</p>
    
    <center>
        <p><font color="green"></font></p>
        
        <form action='takingAttendance.php' method='POST' >
            <input type="password" id="pass" name="pass" />
            <input type="submit" value="تسجيل"  name = "in" id='in' class='btn' /> 
        </form>
            <br>            
    </center>
         
                   </section> 
       </div>
        </div>
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
