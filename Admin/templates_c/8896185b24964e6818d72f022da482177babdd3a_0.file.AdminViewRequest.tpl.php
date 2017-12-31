<?php
/* Smarty version 3.1.30, created on 2017-12-29 21:59:41
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/AdminViewRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a46acbd2a7990_94247475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8896185b24964e6818d72f022da482177babdd3a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/AdminViewRequest.tpl',
      1 => 1514581148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a46acbd2a7990_94247475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminViewRequest.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    <h2>
                    استعراض الطلبات
                    </h2>
                <center>
                    <div id='tabs'>
                        <ul>
                            <li>طلبات التسجيل في الدورات التدريبية</li>
                            <li>طلبات تقديم دورات تدريبية</li>
                            <li>طلبات تقديم حقائب تدريبية</li>
                        </ul>
                        <div>
                            </br>
                            <center>                   
                                <div  id='tcRegister'>      
                                </div>                       
                            </center>
                        </div>
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
</section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
