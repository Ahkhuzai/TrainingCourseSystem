<?php
/* Smarty version 3.1.30, created on 2017-12-30 00:04:25
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/Single_Admin_hoRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a46c9f9555371_90876013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e29c3778ef7447052d9844c0d1f5d2537e60b75e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/Single_Admin_hoRequest.tpl',
      1 => 1514588662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a46c9f9555371_90876013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/Single_Admin_hoRequest.js"><?php echo '</script'; ?>
>

<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
  
   <h2>بيانات الدورة</h2>
   <center>
        <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
        <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
    </center>
    <br>
    <h3>مقدم الطلب </h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['trname']->value;?>
</p> 
    <h3>الحقيبة التدريبية للمتدرب</h3>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['teurl']->value;?>
" >  من هنا</a> </p>
    </br>
    <h3>الحقيبة التدريبية للمدرب</h3>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['trurl']->value;?>
" >  من هنا</a> </p>
    </br>
    <h3>العرض التقديمي</h3>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['prurl']->value;?>
" >  من هنا</a> </p>
    </br>
    <h3>المادة العلمية</h3>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['scurl']->value;?>
" >  من هنا</a> </p>
    </br>
    </br> 
    <center>
    <form action="Single_Admin_hoRequest.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
        <input type="submit" value="رفض الطلب"  name = "reject" id='reject' class='btn' onclick="return confirm('هل انت متأكدمن رغبتك برفض الطلب')"/>
        <input type="submit" value="قبول الطلب"  name = "accept" id='accept' class='btn' onclick="return confirm('هل انت متأكدمن رغبتك بقبول الطلب')"/>
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
