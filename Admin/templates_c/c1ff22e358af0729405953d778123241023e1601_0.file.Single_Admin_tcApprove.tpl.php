<?php
/* Smarty version 3.1.30, created on 2017-12-30 02:21:32
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/Single_Admin_tcApprove.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a46ea1ccbb611_59666157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1ff22e358af0729405953d778123241023e1601' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/Single_Admin_tcApprove.tpl',
      1 => 1514596888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a46ea1ccbb611_59666157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/Single_Admin_tcApprove.js"><?php echo '</script'; ?>
>

<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                        <h2>اعتماد الدورة التدريبية</h2>
    
    <center>
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>
        <form action='Single_Admin_tcApprove.php' method='POST' enctype="multipart/form-data">
             <label> مقدم الدورة : <?php echo $_smarty_tpl->tpl_vars['trname']->value;?>
</label>
            <div id='trainer'>
            </div>
            <input type="hidden" id="tr_id" name="tr_id" value='<?php echo $_smarty_tpl->tpl_vars['trid']->value;?>
'/> 
            <br>
            اسم الدورة: 
            <input type="text" id="Tname" name="Tname" value='<?php echo $_smarty_tpl->tpl_vars['tcname']->value;?>
'/>
            </br>
            </br>    
            اسم الدورة باللغة الانجليزية  :
            <input type="text" id="engname" name="engname" value='<?php echo $_smarty_tpl->tpl_vars['tcEngname']->value;?>
'/>            
            </br>
            </br> 
            ملخص الدورة:
            <textarea id='abstract' name='abstract' ><?php echo $_smarty_tpl->tpl_vars['abstract']->value;?>
</textarea>       
            </br>
            </br>
            اهداف الدورة :
            <textarea id='Goals' name='Goals' ><?php echo $_smarty_tpl->tpl_vars['goals']->value;?>
</textarea>       
            </br>
            </br>
            عدد ساعات الدورة:
            <input type="text" id="Hours" name="Hours" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
"/> 
            </br>
            </br>
            <label> تاريخ البداية:  <?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</label>
        <div id='dates'>
        </div> 
            <br>
           <label>تاريخ النهاية: <?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
</label>
        <div id='datee'>
        </div>
    
            </br>
            <label> وقت بداية الدورة :  <?php echo $_smarty_tpl->tpl_vars['start_at']->value;?>
</label>
            <div id='startAt'></div>
            </br>
            مكان اقامة الدورة :
            <input type="text" id="Location" name="Location" value='<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
'/>       
            </br>
            </br>
            عدد المقاعد:
            <input type="text" id="capacity" name="capacity" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value='<?php echo $_smarty_tpl->tpl_vars['capacity']->value;?>
'/>       
            </br>
            </br>
             <label>مقر الحضور : <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</label>
            <div id='TypeTc'>
            </div>
           
            <input type="hidden" id="type" name="type" value='<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
'/> 
            </br>
            <div> 
                الحقيبة التدريبية: <?php echo $_smarty_tpl->tpl_vars['url_act']->value;?>
  <br>
                <br>
                <input type="hidden" id="url" name="url" value='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'/> 
                
          </div>
           <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
           
            <input type="submit" value="اعتمادالدورة"  name = "approve" id='approve' class='btn'/> 
            
            <input type="hidden" id="stime" name="stime" value="<?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
"/>
            <input type="hidden" id="etime" name="etime" value="<?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
"/>
            <input type="hidden" id="start_at" name="start_at" value="<?php echo $_smarty_tpl->tpl_vars['start_at']->value;?>
"/>
            </form>
       
            <br>
               <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
              
    </center>
</center>
                </section>          
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
