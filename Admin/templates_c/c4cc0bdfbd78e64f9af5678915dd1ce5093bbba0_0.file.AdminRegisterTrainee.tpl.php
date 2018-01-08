<?php
/* Smarty version 3.1.30, created on 2018-01-08 10:18:26
  from "C:\xampp\htdocs\rtp\Admin\templates\AdminRegisterTrainee.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a533762083d44_74620540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4cc0bdfbd78e64f9af5678915dd1ce5093bbba0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\AdminRegisterTrainee.tpl',
      1 => 1515395087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a533762083d44_74620540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminRegisterTrainee.js"><?php echo '</script'; ?>
>
<nav id="nav">
	<ul>
            <li><a href="AdminViewBlocked.php"> استعراض قائمة الحظر</a></li>
 	   <li><a href="AdminViewTrainee.php"> استعراض المتدربين</a></li>
       <li><a href="AdminRegisterTrainee.php"> تسجيل متدرب في دورة</a></li>                          
    </ul>
</nav>
   <!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
    
    
    <center> 
        <h2>الرجاء تعبئة البيانات التالية:</h2>
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>  

        </br>
        <form action="AdminRegisterTrainee.php" method="POST">
        <input type='text' id='trainee' name='trainee' />
        <input type='submit' id='search' name='search'  value='بحث'/>
   
        <div id="info" name="info" style="display:<?php echo $_smarty_tpl->tpl_vars['display']->value;?>
" >
            <br>
        <h3>اسم المتدرب</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
        <h3>الكلية </h3>
        <p><?php echo $_smarty_tpl->tpl_vars['department']->value;?>
</p>
        <h3>التخصص العام</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['major']->value;?>
</p>
        <h3>التخصص الدقيق</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['spical']->value;?>
</p>
        <h3>رقم الهاتف</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</p>
        <h3>البريد الالكتروني</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>    
        <h3>حالة التسجيل</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['reg_status']->value;?>
</p>
        
        <h3>الرجاء اختيار الدورات المراد تسجيل المتدرب فيها</h3>
        <div id="TraineeTC" > </div>
        </div>
    <br>
    
   <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>    

    <br>
    <br>
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
