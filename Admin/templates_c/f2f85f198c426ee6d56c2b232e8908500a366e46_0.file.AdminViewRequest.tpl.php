<?php
/* Smarty version 3.1.30, created on 2017-12-21 07:30:53
  from "C:\xampp\htdocs\dsr_rtp\Admin\templates\AdminViewRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b551d9b8370_20055457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f85f198c426ee6d56c2b232e8908500a366e46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Admin\\templates\\AdminViewRequest.tpl',
      1 => 1512307959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminMain.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3b551d9b8370_20055457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:AdminMain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminViewRequest.js"><?php echo '</script'; ?>
>

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
<br>
<br>
</div>
<br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
