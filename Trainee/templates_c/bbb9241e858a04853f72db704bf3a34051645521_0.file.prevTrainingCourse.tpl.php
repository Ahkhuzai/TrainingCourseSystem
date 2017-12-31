<?php
/* Smarty version 3.1.30, created on 2017-12-21 11:44:02
  from "C:\xampp\htdocs\dsr_rtp\Trainee\templates\prevTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b907212a4b9_12635908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbb9241e858a04853f72db704bf3a34051645521' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Trainee\\templates\\prevTrainingCourse.tpl',
      1 => 1513853038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b907212a4b9_12635908 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src='js/prevTrainingCourse.js'><?php echo '</script'; ?>
>
	
    <center>
        <div id='tabs'>
            <ul>
                
                <li>الدورات التدريبية</li>
                <li>البرامج التدريبية</li>
            </ul>
            <div>
                </br>
                <center>   
                     <div  id='CompleteTC'>      
                    </div>  
                                      
                </center>
            </div>
            <div>   
                </br>
                <center> 
                    <div  id='CompleteProgram'>      
                    </div>    
                </center>
            </div>   
        </div>  
    </center>
    <br>
    <br>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
