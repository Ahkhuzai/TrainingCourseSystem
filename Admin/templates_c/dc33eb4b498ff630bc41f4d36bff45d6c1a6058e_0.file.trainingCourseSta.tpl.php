<?php
/* Smarty version 3.1.30, created on 2018-01-21 07:39:20
  from "C:\xampp\htdocs\rtp_s\Admin\templates\trainingCourseSta.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a64359822d476_83106544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc33eb4b498ff630bc41f4d36bff45d6c1a6058e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Admin\\templates\\trainingCourseSta.tpl',
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
function content_5a64359822d476_83106544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/trainingCourseSta.js"><?php echo '</script'; ?>
>
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
                    <center>
                       <h3>قائمة الدورات  المكتملة</h3>
                        <div  id='tcCompleteList'>      
                        </div>
                        <br>
                        <form action="trainingCourseSta.php" method="POST">
                            <input type="submit" value="استخراج التقرير"  name = "create" id='create' class='btn' /> 
                            <input type="hidden"   name = "ids" id='ids' class='btn' />  
                        </form>
                        
                      
                    </center>
                </section>          
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<?php }
}
