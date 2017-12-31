<?php
/* Smarty version 3.1.30, created on 2017-12-21 08:20:31
  from "C:\xampp\htdocs\dsr_rtp\Admin\templates\AdminAddTrainer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b60bf33caf5_22887148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b47d833c340a1f6034be72bed7fcf091a1477254' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Admin\\templates\\AdminAddTrainer.tpl',
      1 => 1513840828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminMain.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b60bf33caf5_22887148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:AdminMain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminAddTrainer.js"><?php echo '</script'; ?>
>

  
    <fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <legend>الرجاء تعبئة البيانات التالية:</legend>
    
    <center> 
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>  
        </br>
        <form action='AdminAddTrainer.php' method='POST' enctype="multipart/form-data">
        <input type='text' id='trainer' name='trainer' />
        <input type='submit' id='search' name='search'  value='بحث'/>
        <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
        <div id="info" name="info" style="display:<?php echo $_smarty_tpl->tpl_vars['display']->value;?>
" >
        <div> 
            السيرة الذاتية
            <input type="file" name="cv" id="cv"  accept='application/pdf , application/vnd.wordperfect , application/msword' > 
        </div>
        </br>
        </br>
            التوقيع&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="file" name="sign" id="sign"  accept='image/*' > 
 
        </br>
        </br>
         
        </div>
           <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p> 
        <input type='submit' id='AddTrainer' name='AddTrainer'  value="اضافة مدرب"  >
        <input type='submit' id='back' name='back'  value="عودة"  >
        </br>
        </br>
          </form>
    
   
    </center>
  
    </fieldset>
  
    <br>
    <br>
</div>
    <br>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
