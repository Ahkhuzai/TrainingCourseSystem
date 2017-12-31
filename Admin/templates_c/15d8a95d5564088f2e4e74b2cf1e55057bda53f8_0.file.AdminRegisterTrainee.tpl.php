<?php
/* Smarty version 3.1.30, created on 2017-12-29 19:08:03
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/AdminRegisterTrainee.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a468483a9ec98_72899467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d8a95d5564088f2e4e74b2cf1e55057bda53f8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/AdminRegisterTrainee.tpl',
      1 => 1514570783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a468483a9ec98_72899467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminRegisterTrainee.js"><?php echo '</script'; ?>
>
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <legend>الرجاء تعبئة البيانات التالية:</legend>
    
    <center> 
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>  
        </br>
        <form action="AdminRegisterTrainee.php" method="POST">
        <input type='text' id='trainer' name='trainer' />
        <input type='submit' id='search' name='search'  value='بحث'/>
        <center>
        <div id="info" name="info" style="display:<?php echo $_smarty_tpl->tpl_vars['display']->value;?>
" >
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
    </center>
   <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>    

    <br>
    <br>
    <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
       </fieldset>
    </center>
    </br>
</div>
    <br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




 

<?php }
}
