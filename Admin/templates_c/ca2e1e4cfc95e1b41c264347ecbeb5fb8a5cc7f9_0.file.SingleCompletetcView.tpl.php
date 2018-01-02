<?php
/* Smarty version 3.1.30, created on 2018-01-02 07:12:03
  from "C:\xampp\htdocs\rtp\Admin\templates\SingleCompletetcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b22b30eeed6_42816110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2e1e4cfc95e1b41c264347ecbeb5fb8a5cc7f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\SingleCompletetcView.tpl',
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
function content_5a4b22b30eeed6_42816110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/SingleCompletetcView.js"><?php echo '</script'; ?>
>
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
    <div style='height: 100%; width: 100%;'>
        <div id='host' style="margin: 0 auto; width:600px; height:300px;">
        <div id='jqxChart' style="width:600px; height:300px; position: relative; left: 0px; top: 0px;">
        </div>
            </div>
        </div>
    <br>
    <br>
    <div id='comments'>
            <div>
                 اراء وملاحظات المتدربين للتحسين من مستوى الدورة</div>
            <div>
                <ul style="direction: rtl;">
                  
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>      
                            <li> +  <?php echo $_smarty_tpl->tpl_vars['comment']->value['comments'];?>
  </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
     
                    </li>
                </ul>
            </div> 
        </div>
        <br>
    <br>
    <form action="Single_Admin_tcView.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
        <input type="submit" value='طباعة'  name = "print" id='print' class='btn'/>
    </form>
</center>
</section>          
</section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
