<?php
/* Smarty version 3.1.30, created on 2018-01-04 07:07:35
  from "C:\xampp\htdocs\rtp\Admin\templates\Single_Admin_Attendance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4dc4a775ef52_38266992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7b6b84530892144c5d6759bc2d647a210dc4cf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\Single_Admin_Attendance.tpl',
      1 => 1515046032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4dc4a775ef52_38266992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/Single_Admin_Attendance.js"><?php echo '</script'; ?>
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
         <h2>بيانات الدورة</h2>
    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
    <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
    </center>
    <br>
    <br>
    <h3>مقدم الدورة </h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['trname']->value;?>
</p>   
    <h3 >اسم الدورة</h3> 
    <p id="nameOfTC"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
    <h3> تاريخها </h3>
    <p><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
 من  <br>
    <?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
 الى </p>

    </br> 
    <center>
    <h3>قائمة المسجلين</h3>
    <div  id='tcRegisterTrainee'>      
    </div>
    <br>
    <br>
    <form action="Single_Admin_Attendance.php" method="POST">
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
