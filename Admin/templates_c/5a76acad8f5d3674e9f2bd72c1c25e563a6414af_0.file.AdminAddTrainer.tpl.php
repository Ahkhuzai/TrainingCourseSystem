<?php
/* Smarty version 3.1.30, created on 2017-12-29 19:08:15
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/AdminAddTrainer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a46848fd7a396_86765884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a76acad8f5d3674e9f2bd72c1c25e563a6414af' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/AdminAddTrainer.tpl',
      1 => 1514570761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a46848fd7a396_86765884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
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
