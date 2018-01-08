<?php
/* Smarty version 3.1.30, created on 2018-01-07 19:57:02
  from "/opt/lampp/htdocs/rtp/Trainer/templates/viewRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a526d7ef05af9_79925332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5716c8daa20119875cfcbbbeb05183d90800a04e' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Trainer/templates/viewRequest.tpl',
      1 => 1515323304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a526d7ef05af9_79925332 (Smarty_Internal_Template $_smarty_tpl) {
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
