<?php
/* Smarty version 3.1.30, created on 2018-01-04 06:51:10
  from "C:\xampp\htdocs\rtp\Admin\templates\rePresentTC.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4dc0ced18af7_55638514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6a82a2e35479b49619c403c2cd8fd4669498e9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\rePresentTC.tpl',
      1 => 1515045067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4dc0ced18af7_55638514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/rePresentTC.js"><?php echo '</script'; ?>
>
<nav id="nav">
	<ul>
		<li><a href="AdminCertificate.php">الشهادات</a></li>
		<li><a href="rePresentTC.php">اعادة تقديم دورة سابقة</a></li>
 	    <li><a href="AdminAddTrainingCourse.php"> اضافة دورة تدريبية</a></li>
        <li><a href="AdminAddProgram.php"> اضافة برنامج تدريبي</a></li>
        <li><a href="ApproveTrainingCourse.php">اعتماد الدورات والبرامج التدريبية</a></li>
        <li><a href="AdminviewTC.php"> استعراض الدورات</a></li>                          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    
                    <center>
                        <h2> اعادة تقديم دورة سابقة </h2>
                         <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
                    <div id='tcList' ></div>
                    </center>
                    <form action="rePresentTC.php" method="POST" enctype="multipart/form-data">
                    <div id='info' style="display:none" >           
                    <center>
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
                        وقت بداية الدورة
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
                         <div> 
           الحقيبة التدريبية  <br>
           <input type="file" name="hout" id="hout"  accept='application/pdf , application/vnd.wordperfect , application/msword' >     <br> <br>
            </div>
            <br>
            <br>
            <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
            <input type="submit" value="إضافة"  name = "addTraining" id='addTraining' class='btn'/> 
            
           
            <input type="hidden" id="stime" name="stime"/>
            <input type="hidden" id="etime" name="etime"/>
            <input type="hidden" id="start_at" name="start_at"/>
                    </center>
            </form>

                    </div>
                         </section> 
                        </div>
        </div>
               
                        
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
