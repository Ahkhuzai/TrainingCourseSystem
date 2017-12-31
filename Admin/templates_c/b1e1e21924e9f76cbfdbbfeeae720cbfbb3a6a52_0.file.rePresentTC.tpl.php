<?php
/* Smarty version 3.1.30, created on 2017-12-30 04:54:04
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/rePresentTC.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a470ddc89e8c4_54558114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1e1e21924e9f76cbfdbbfeeae720cbfbb3a6a52' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/rePresentTC.tpl',
      1 => 1514606038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a470ddc89e8c4_54558114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/rePresentTC.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    <h2> اعادة تقديم دورة سابقة </h2>
                    <center>
                    <div id='tcList' ></div>
                    <form action="rePresentTC.php" method="POST" >
                    <div id='info' style="display:none" >           
                        
                        <label>ملخص الدورة</label>

                        <input type='text' id='abstract' name='abstract' />
                        <label>اهداف الدورة</label>
                        <input type='text' id='Goals' name='Goals' />

                        <br>
                        <div id='trainer'>
                        </div>
                        <input type="hidden" id="tr_id" name="tr_id"/> 
                        <input type="hidden" id="tc_id" name="tc_id"/> 
                        <br>
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
                                    <input type="hidden" id="p_id" name="p_id"/> 
            <br>
            <br>

             <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
            <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
           
            <input type="hidden" id="stime" name="stime"/>
            <input type="hidden" id="etime" name="etime"/>
            <input type="hidden" id="start_at" name="start_at"/>
            </form>

                    </div>
                </center>
                </section>          
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
