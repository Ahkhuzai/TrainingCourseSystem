<?php
/* Smarty version 3.1.30, created on 2018-01-21 10:20:58
  from "C:\xampp\htdocs\rtp_s\Admin\templates\Single_Admin_ProgramSta.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a645b7a724618_57480664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a28fae0447760a9e79bcc9cef79a667d491d712' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Admin\\templates\\Single_Admin_ProgramSta.tpl',
      1 => 1516094902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a645b7a724618_57480664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/Single_Admin_ProgramSta.js"><?php echo '</script'; ?>
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
  <div id='pr_content'>
   <center>
 
          <h2>بيانات البرنامج</h2>
    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
    <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
    </center>
    <br>
    <br>
     
    <h3>اسم البرنامج </h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>   
    </div>
    <h3> ملخص البرنامج </h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['abstract']->value;?>
</p>
    <h3> اهداف البرنامج </h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['goals']->value;?>
</p>
  
    <h3>عدد ساعات البرنامج </h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
 </p>

    </br> 
    <center>
    <h3>قائمةالدورات</h3>
        <div id='tcList' ></div>
    <br>
    <br>
     <h3>قائمة المسجلين</h3>
        <div id='tcTraineeRegister' ></div>
    <br>
    <br>

     <h3>احصائيات البرنامج</h3>
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
    
    <form action="Single_Admin_ProgramSta.php" method="POST">
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