<?php
/* Smarty version 3.1.30, created on 2018-01-17 09:28:54
  from "C:\xampp\htdocs\rtp_s\Trainer\templates\viewRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f0946d3e1a8_44825688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a06a9cc16c23b466991c1d958b658a28b780cda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Trainer\\templates\\viewRequest.tpl',
      1 => 1516094947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a5f0946d3e1a8_44825688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/viewRequest.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">
<center>
    <div id='tabs'>
        <ul>
            <li>طلبات تقديم دورات تدريبية</li>
            <li>طلبات تقديم حقائب تدريبية</li>
        </ul>
        <div>   
            </br>
            <center> 
                <div  id='tcRequest'>      
                </div>  
            </center>
        </div>  
        <div>   
            </br>
            <center> 
                <div  id='hoRequest'>      
                </div>  
            </center>
        </div>  
    </div>  
</center>
                </section>
                </div>
        </div>
</section>				
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
