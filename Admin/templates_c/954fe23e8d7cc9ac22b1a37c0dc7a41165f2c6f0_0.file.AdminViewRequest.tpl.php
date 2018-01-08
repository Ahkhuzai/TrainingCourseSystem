<?php
/* Smarty version 3.1.30, created on 2018-01-07 22:18:07
  from "/opt/lampp/htdocs/rtp/Admin/templates/AdminViewRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a528e8f96fef0_56644243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954fe23e8d7cc9ac22b1a37c0dc7a41165f2c6f0' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Admin/templates/AdminViewRequest.tpl',
      1 => 1515323304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a528e8f96fef0_56644243 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <center>
                    <h2>
                    استعراض الطلبات
                    </h2>
                    </center>
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
            </div>
        </div>
</section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
