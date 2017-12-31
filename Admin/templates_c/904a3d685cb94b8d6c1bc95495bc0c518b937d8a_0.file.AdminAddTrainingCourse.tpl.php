<?php
/* Smarty version 3.1.30, created on 2017-12-21 07:38:02
  from "C:\xampp\htdocs\dsr_rtp\Admin\templates\AdminAddTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b56ca990b08_38490951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '904a3d685cb94b8d6c1bc95495bc0c518b937d8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Admin\\templates\\AdminAddTrainingCourse.tpl',
      1 => 1513838268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminMain.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b56ca990b08_38490951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:AdminMain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminAddTrainingCourse.js"><?php echo '</script'; ?>
>

    
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
            <br>
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    
    <center>
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>
        <form action='AdminAddTrainingCourse.php' method='POST' enctype="multipart/form-data">
             <label> مقدم الدورة</label>
            <div id='trainer'>
            </div>
            <input type="hidden" id="tr_id" name="tr_id"/> 
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
            <label>تاريخ البداية</label>
        <div id='dates'>
        </div> 
            <br>
           <label>تاريخ النهاية</label>
        <div id='datee'>
        </div>
    
            </br>
            <label>وقت بداية الدورة</label>
            </br>
            <div id='startAt'></div>
            </br>
            <input type="text" id="Location" name="Location"/>       
            </br>
            </br>
            <input type="text" id="capacity" name="capacity" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>       
            </br>
            </br>
            <div id='TypeTc'>
            </div>
            <input type="hidden" id="type" name="type"/> 
            </br>
            
            <div> 
           الحقيبة التدريبية  <br>
           <input type="file" name="hout" id="hout"  accept='application/pdf , application/vnd.wordperfect , application/msword' >     <br> <br>
            </div>
             <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
            <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
           
            <input type="hidden" id="stime" name="stime"/>
            <input type="hidden" id="etime" name="etime"/>
            <input type="hidden" id="start_at" name="start_at"/>
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
