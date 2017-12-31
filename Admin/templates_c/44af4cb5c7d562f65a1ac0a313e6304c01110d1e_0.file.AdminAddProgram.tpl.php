<?php
/* Smarty version 3.1.30, created on 2017-12-21 07:26:23
  from "C:\xampp\htdocs\dsr_rtp\Admin\templates\AdminAddProgram.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b540fe69a01_65108737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44af4cb5c7d562f65a1ac0a313e6304c01110d1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Admin\\templates\\AdminAddProgram.tpl',
      1 => 1512891507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminMain.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b540fe69a01_65108737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:AdminMain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminAddProgram.js"><?php echo '</script'; ?>
>

    
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
    <legend> الرجاء إكمال النموذج التالي:</legend>
    
    <center>
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>
        
        <form action='AdminAddProgram.php' method='POST' enctype="multipart/form-data">
            <br>
            <input type="text" id="Tname" name="Tname"/>   
            </br>
            </br>   
            <input type="text" id="engname" name="engname"/>            
            </br>
            </br> 
            <textarea id='abstract' name='abstract' ></textarea>       
            </br>
            </br>
            <textarea id='Goals' name='Goals' ></textarea>       
            </br>
            </br>
            <input type="text" id="Hours" name="Hours" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/> 
            </br>
            </br>
            <input type="hidden" id="tc_id" name="tc_id"/> 
            </br>
            <div id="tc"></div>
            </br>
            </br>
                <input type="submit" value="إضافة"  name = "addProgram" id='addProgram' class='btn'/> 
            <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
            </form>
            <br>
               <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
              
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
