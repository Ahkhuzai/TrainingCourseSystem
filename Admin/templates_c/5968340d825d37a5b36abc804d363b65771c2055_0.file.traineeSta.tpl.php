<?php
/* Smarty version 3.1.30, created on 2018-01-21 10:22:25
  from "C:\xampp\htdocs\rtp_s\Admin\templates\traineeSta.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a645bd1361332_85504485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5968340d825d37a5b36abc804d363b65771c2055' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Admin\\templates\\traineeSta.tpl',
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
function content_5a645bd1361332_85504485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/traineeSta.js"><?php echo '</script'; ?>
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
   <!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
    <center>
    <h3>قائمة المتدربين</h3>
    <div  id='teList'>      
    </div>
    <br>
    </br>
    <h3>احصائيات المتدربين</h3>
    <br>
    <div id='chartRank' style="width: 850px; height: 500px;">
	</div>
    </br>
    <br>
    <div id='chartGender' style="width: 850px; height: 500px;">
	</div>
    </br>
    <br>
        <div style='height: 100%; width: 100%;'>
        <div id='host' style="margin: 0 auto; width:850px; height:500px;">
        <div id='chartDepartment' style="width:850px; height:500px; position: relative; left: 0px; top: 0px;">
        </div>
            </div>
        </div>
    </br>
        <form action="traineeSta.php" method="POST">
        <input type="button" value='طباعة'  name = "print" id='print' class='btn'/>
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