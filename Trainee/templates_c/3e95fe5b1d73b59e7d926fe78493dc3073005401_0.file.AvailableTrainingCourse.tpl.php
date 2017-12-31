<?php
/* Smarty version 3.1.30, created on 2017-12-21 11:20:59
  from "C:\xampp\htdocs\dsr_rtp\Trainee\templates\AvailableTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b8b0bc9fe53_53444684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e95fe5b1d73b59e7d926fe78493dc3073005401' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Trainee\\templates\\AvailableTrainingCourse.tpl',
      1 => 1513672953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b8b0bc9fe53_53444684 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src='js/AvailableTrainingCourse.js'><?php echo '</script'; ?>
>
	
    <center>
        <div id='tabs'>
            <ul>
                <li>البرامج التدريبية</li>
                <li>الدورات التدريبية</li>
            </ul>
            <div>
                </br>
                <center>                   
                    <div  id='AvailableProgram'>      
                    </div>                       
                </center>
            </div>
            <div>   
                </br>
                <center> 
                    <div  id='AvailableTC'>      
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
