<?php
/* Smarty version 3.1.30, created on 2017-12-04 08:49:19
  from "C:\xampp\htdocs\dsr_rtp\templates\Single_Admin_hoRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a24fdff46a632_15381648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb3e18ebd885af8848688c4d03763b82c6a893db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\templates\\Single_Admin_hoRequest.tpl',
      1 => 1512373562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminMain.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a24fdff46a632_15381648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:AdminMain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/Single_Admin_hoRequest.js"><?php echo '</script'; ?>
>
    <center>
    <fieldset style="width:70%; margin:0 auto;">      
   <legend align="right">بيانات الدورة</legend>
   <center>
            <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
            <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
            </center>
            <br>
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
    <form action="Single_Admin_hoRequest.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
        <input type="submit" value="رفض الطلب"  name = "reject" id='reject' class='btn' onclick="return confirm('هل انت متأكدمن رغبتك برفض الطلب')"/>
        <input type="button" value="قبول الطلب"  name = "accept" id='accept' class='btn'/>
     
    </form>
    </br>
    </fieldset>
    </br>
    </br>
</div>
    <br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
