<?php
/* Smarty version 3.1.30, created on 2018-01-01 06:25:34
  from "C:\xampp\htdocs\rtp\Trainer\templates\addHandoutOnly.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a49c64e1f6bd2_31123816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '940152357160e647ef17170b140e89575d5153de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainer\\templates\\addHandoutOnly.tpl',
      1 => 1514617584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a49c64e1f6bd2_31123816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/addHandoutOnly.js"><?php echo '</script'; ?>
>  
<fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <br>
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    <center>
    <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>
    <br>
    <form action='addHandoutOnly.php' method='POST' enctype="multipart/form-data">
        <input type="text" id="Tname" name="Tname" />
        </br>
        </br>
        <div id="handout_tr" name='handout_tr'> 
    الحقيبة التدريبية للمدرب      
        <input type='file' id='handout[]' name='handout[]'  accept='application/pdf , application/vnd.wordperfect , application/msword'/>
        </div>
        </br>
        <div id="handout_te" name='handout_te'> 
    الحقيبة التدريبية للمتدرب       
        <input type='file' id='handout[]' name='handout[]'  accept='application/pdf , application/vnd.wordperfect , application/msword'/>
        </div>
        </br>
        <div id="handout_pr" name='handout_pr'> 
    العرض التقديمي     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type='file' id='handout[]' name='handout[]'  accept="application/vnd.openxmlformats-officedocument.presentationml.presentation, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf, image/*"/>
        </div>
        </br>
        <div id="handout_sci" name='handout_sci'> 
    المادة العلمية      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type='file' id='handout[]' name='handout[]'  accept='application/pdf , application/vnd.wordperfect , application/msword'/>
        </div>
        </br>             
        </br>
        <input type="submit" value="إضافة"  name = "addHandout" id='addHandout' class='btn'/> 
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
