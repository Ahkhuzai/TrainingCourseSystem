<?php
/* Smarty version 3.1.30, created on 2018-01-10 11:06:31
  from "C:\xampp\htdocs\rtp\Admin\templates\totalTCStatistic.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a55e5a7acd663_22808658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac54f96dd7199cdcac52ba31125c1eed9efca57d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\totalTCStatistic.tpl',
      1 => 1515578732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a55e5a7acd663_22808658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/totalTCStatistic.js"><?php echo '</script'; ?>
>
<nav id="nav">
	<ul>
        <li><a href="trainerSta.php"> احصائيات المدربين</a></li>
        <li><a href="traineeSta.php"> احصائيات المتدربين</a></li>
        <li><a href="trainingCourseSta.php"> احصائيات الدورات التدريبية</a></li>           
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
   <center>
    <h3><font color="green">احصائيات الدورات </font></h3>

    </center>

    <center>
    <h3>قائمة الدورات</h3>

    <div  id='tcList'>      
    </div>
    <br>
    <br>
    <h3>قائمة الحاضرين</h3>

    <div  id='tcRegisterTrainee'>      
    </div>
    <br>
    <h3>احصائيات الحاضرين</h3>
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
    <div style='height: 100%; width: 100%;'>
        <div id='host' style="margin: 0 auto; width:850px; height:500px;">
        <div id='jqxChart' style="width:850px; height:500px; position: relative; left: 0px; top: 0px;">
        </div>
            </div>
        </div>
    <br>
    
    <br>
    
    <form action="totalTCStatistic.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
        <input type="button" value='طباعة'  name = "print" id='print' class='btn'/>
    </form>
</center>
</section>    
            </div></div>
</section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<?php }
}
