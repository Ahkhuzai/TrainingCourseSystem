<?php
/* Smarty version 3.1.30, created on 2018-01-01 06:33:19
  from "C:\xampp\htdocs\rtp\Trainer\templates\viewRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a49c81fb19c63_86923169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f25744c943ec9ea04b86e87d6328716a1b2c15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainer\\templates\\viewRequest.tpl',
      1 => 1514617584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a49c81fb19c63_86923169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/viewRequest.js"><?php echo '</script'; ?>
>
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
<br>
<br>
</div>
<br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
