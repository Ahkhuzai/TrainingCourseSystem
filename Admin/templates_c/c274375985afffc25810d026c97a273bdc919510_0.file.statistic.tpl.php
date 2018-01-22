<?php
/* Smarty version 3.1.30, created on 2018-01-21 07:39:18
  from "C:\xampp\htdocs\rtp_s\Admin\templates\statistic.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a643596a96ce0_58406943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c274375985afffc25810d026c97a273bdc919510' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Admin\\templates\\statistic.tpl',
      1 => 1516094901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a643596a96ce0_58406943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<nav id="nav">
	<ul>
       <li><a href="trainerSta.php"> احصائيات المدربين</a></li>
 	   <li><a href="traineeSta.php"> احصائيات المتدربين</a></li> 
        <li><a href="ProgramSta.php"> احصائيات البرامج التدريبية</a></li> 
       <li><a href="trainingCourseSta.php"> احصائيات الدورات التدريبية</a></li>                          
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
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
