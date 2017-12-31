<?php
/* Smarty version 3.1.30, created on 2017-12-26 08:03:06
  from "C:\xampp\htdocs\dsr_rtp\Trainer\templates\SingleTCRequest_InComplete.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a41f42a2127d6_34966840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db779125ed9ceb383e519e191733e28393290796' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Trainer\\templates\\SingleTCRequest_InComplete.tpl',
      1 => 1514271785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a41f42a2127d6_34966840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/SingleTCRequest_InComplete.js"><?php echo '</script'; ?>
>

    
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    
    <center>
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>
        <form action='SingleTCRequest_InComplete.php' method='POST' enctype="multipart/form-data">
             
            <input type="text" id="Tname" name="Tname" value='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
'/>
            </br>
            </br>      
            <input type="text" id="engname" name="engname" value='<?php echo $_smarty_tpl->tpl_vars['eng_name']->value;?>
'/>            
            </br>
            </br> 
            <textarea id='abstract' name='abstract' ><?php echo $_smarty_tpl->tpl_vars['abstract']->value;?>
</textarea>       
            </br>
            </br>
            <textarea id='Goals' name='Goals' ><?php echo $_smarty_tpl->tpl_vars['goals']->value;?>
</textarea>       
            </br>
            </br>
            <input type="text" id="Hours" name="Hours" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
"/> 
            </br>
            </br>
            <label>تاريخ البداية : <?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</label>
        <div id='dates'>
        </div> 
            <br>
           <label>تاريخ النهاية: <?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
</label>
        <div id='datee'>
        </div>
    
            </br>
             <label>مقر الحضور:  <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 </label>
            <input type="hidden" id="type" name="type" value='<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
'/> 
            <div id='TypeTc'>
            </div>
            
            </br>
            
            <div> 
                الحقيبة التدريبية: <?php echo $_smarty_tpl->tpl_vars['url_act']->value;?>
  <br>
                <br>
                <input type="hidden" id="url" name="url" value='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'/> 
                
                 <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
   <br>
           <input type="file" name="hout" id="hout"  accept='application/pdf , application/vnd.wordperfect , application/msword' >     <br> <br>
            </div>
                </br>
                </br>
            <input type="submit" value="حفظ"  name = "saveTraining" id='saveTraining' class='btn'/> 
            <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
            <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
           
            <input type="hidden" id="stime" name="stime" value="<?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
"/>
            <input type="hidden" id="etime" name="etime" value="<?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
"/>
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
