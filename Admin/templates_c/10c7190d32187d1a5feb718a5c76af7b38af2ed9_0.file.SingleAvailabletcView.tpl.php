<?php
/* Smarty version 3.1.30, created on 2018-01-10 07:33:52
  from "C:\xampp\htdocs\rtp\Admin\templates\SingleAvailabletcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a55b3d05b2f58_16365066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10c7190d32187d1a5feb718a5c76af7b38af2ed9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\SingleAvailabletcView.tpl',
      1 => 1515402901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a55b3d05b2f58_16365066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/SingleAvailabletvView.js"><?php echo '</script'; ?>
>
<nav id="nav">
	<ul>
		<li><a href="AdminCertificate.php">الشهادات</a></li>
		<li><a href="rePresentTC.php">اعادة تقديم دورة سابقة</a></li>
 	    <li><a href="AdminAddTrainingCourse.php"> اضافة دورة تدريبية</a></li>
        <li><a href="AdminAddProgram.php"> اضافة برنامج تدريبي</a></li>
        <li><a href="ApproveTrainingCourse.php">اعتماد الدورات والبرامج التدريبية</a></li>
        <li><a href="AdminviewTC.php"> استعراض الدورات</a></li>                          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">    

   <center>
          <h2>بيانات الدورة</h2>
    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
    <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
    </center>
    <br>
    <br>
        <div id="pr_content">
    <h3>مقدم الدورة </h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['trname']->value;?>
</p>   
    <h3>اسم الدورة</h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
    <h3> تاريخها </h3>
    <p><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
 من  <br>
    <?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
 الى </p>
    </div>
    <h3>عدد ساعات الدورة </h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
 </p>
    <h3>وقت بداية الدورة </h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['start_at']->value;?>
 </p>
    <h3>العدد الاجمالي للمقاعد</h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['capacity']->value;?>
 </p>
    <h3>مكان اقامة الدورة</h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['location']->value;?>
 </p>
    <h3> ملخص الدورة</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['abstract']->value;?>
</p>
    <h3>اهداف الدورة</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['goals']->value;?>
</p>  
    <h3>الحقيبة التدريبية</h3>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" >  من هنا</a> </p>
    </br>
    </br> 
    <center>
    <h3>قائمة المسجلين</h3>
    <div  id='tcRegisterTrainee'>      
    </div>
    <br>
    <br>
    <form action="Single_Admin_tcView.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
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
