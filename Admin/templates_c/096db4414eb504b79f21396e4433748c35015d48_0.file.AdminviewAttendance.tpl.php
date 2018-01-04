<?php
/* Smarty version 3.1.30, created on 2018-01-04 07:07:34
  from "C:\xampp\htdocs\rtp\Admin\templates\AdminviewAttendance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4dc4a6029016_78663165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '096db4414eb504b79f21396e4433748c35015d48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\AdminviewAttendance.tpl',
      1 => 1515046031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4dc4a6029016_78663165 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminviewAttendance.js"><?php echo '</script'; ?>
>
<nav id="nav">
	<ul>
        <li><a href="closeTC.php">اتمام الدورة التدريبية</a></li>
        <li><a href="AdminviewAttendance.php"> استعراض الحضور</a></li>                          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
    <center>
   <center>
    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
    <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
    </center>
    <h3>قائمة الدورات  المكتملة</h3>
    <div  id='tcCompleteList'>      
    </div>
    <br>
    <form action="AdminviewAttendance.php" method="POST">
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
