<?php
/* Smarty version 3.1.30, created on 2018-01-22 07:09:03
  from "C:\xampp\htdocs\rtp_s\Admin\templates\Single_Admin_ProgramView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a657fffe9c460_39497790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ceacf526ba8ac5590a24847e8e173a686d2637f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Admin\\templates\\Single_Admin_ProgramView.tpl',
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
function content_5a657fffe9c460_39497790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/Single_Admin_ProgramView.js"><?php echo '</script'; ?>
>
<nav id="nav">
    <ul>
    <li><a href="rePresentTC.php">اعادة تقديم دورة </a></li>
    <li><a href="AdminAddTrainingCourse.php"> اضافة دورة </a></li>
        <li><a href="AdminAddProgram.php"> اضافة برنامج </a></li>
        <li><a href="CloseTrainingCourse.php">اغلاق التسجيل  </a></li>
        <li><a href="ApproveTrainingCourse.php">اعتماد الدورات </a></li>
        <li><a href="AdminProgramView.php"> استعراض البرامج</a></li>     
        <li><a href="AdminviewTC.php"> استعراض الدورات</a></li>                          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">    

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
    
    <h3>قائمةالدورات</h3>
    <ul dir='rtl'>
                  
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tcList']->value, 'tc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tc']->value) {
?>      
                            <li> <?php echo $_smarty_tpl->tpl_vars['tc']->value['name'];?>
  </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
     
                    </li>
                </ul>
    <br>
    <br>
    <center>
    <form action="Single_Admin_ProgramView.php" method="POST">
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
