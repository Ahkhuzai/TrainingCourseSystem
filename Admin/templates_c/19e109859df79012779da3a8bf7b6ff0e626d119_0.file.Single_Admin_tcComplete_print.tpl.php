<?php
/* Smarty version 3.1.30, created on 2018-01-03 09:10:23
  from "C:\xampp\htdocs\rtp\Admin\templates\Single_Admin_tcComplete_print.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4c8fef5becc7_59451124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e109859df79012779da3a8bf7b6ff0e626d119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\Single_Admin_tcComplete_print.tpl',
      1 => 1514880484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4c8fef5becc7_59451124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/Single_Admin_tcComplete_print.js"><?php echo '</script'; ?>
>
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
    <h3>عدد ساعات الدورة </h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
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
    <form action="Single_Admin_tcComplete_print.php" method="POST">
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
