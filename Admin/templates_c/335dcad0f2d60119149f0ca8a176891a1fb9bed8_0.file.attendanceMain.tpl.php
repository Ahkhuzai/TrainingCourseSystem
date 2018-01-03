<?php
/* Smarty version 3.1.30, created on 2018-01-03 09:01:20
  from "C:\xampp\htdocs\rtp\Admin\templates\attendanceMain.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4c8dd0c28a94_22170685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '335dcad0f2d60119149f0ca8a176891a1fb9bed8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\attendanceMain.tpl',
      1 => 1514966434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4c8dd0c28a94_22170685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

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
                    <p> Welcome <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </p>
                </section>   
            </div>
    </div>
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
