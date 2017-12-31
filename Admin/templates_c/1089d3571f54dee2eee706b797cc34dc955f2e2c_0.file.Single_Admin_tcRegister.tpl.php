<?php
/* Smarty version 3.1.30, created on 2017-12-31 08:16:03
  from "C:\xampp\htdocs\rtp\Admin\templates\Single_Admin_tcRegister.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a488eb30c5ac3_21055124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1089d3571f54dee2eee706b797cc34dc955f2e2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\Single_Admin_tcRegister.tpl',
      1 => 1514617556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a488eb30c5ac3_21055124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">

    <center>
    <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
    <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
    </center>
    <h2>بيانات الدورة</h2>
    <br>
    <br>
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
    <h3>عدد ساعات الدورة المقترحة</h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
 </p>
    <h3>العدد الاجمالي للمقاعد</h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['capacity']->value;?>
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
    
    <h3>قائمة المسجلين</h3>
    <center>
    <div  id='tcRegisterTrainee'>      
    </div>
    <br>
    <br>
    
    <form action="Single_Admin_tcRegister.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
        <input type="submit" value="اغلاق التسجيل  "  name = "close" id='close' class='btn' onclick="return confirm('هل انت متأكدمن رغبتك بإغلاق التسجيل')"/>
    </form>
</center>
                </section>          
            </section>   
<?php echo '<script'; ?>
 type="text/javascript" src="js/Single_Admin_tcRegister.js"><?php echo '</script'; ?>
>           
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
