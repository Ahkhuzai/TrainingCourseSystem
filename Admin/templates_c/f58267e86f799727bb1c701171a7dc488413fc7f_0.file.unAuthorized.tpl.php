<?php
/* Smarty version 3.1.30, created on 2017-12-29 23:07:01
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/unAuthorized.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a46bc853df6b5_53724183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58267e86f799727bb1c701171a7dc488413fc7f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/unAuthorized.tpl',
      1 => 1512284604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a46bc853df6b5_53724183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/strict.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="ar">
<head>
    <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta name="msapplication-tap-highlight" content="no" />

    <link rel="stylesheet" href="css/style.css">   
    </head>
    <body bgcolor="#E5F2E5" >    
       
        <header style="background-color: #ffffff ;height:100%;width: 75% ;margin:0 auto;">
            <br>  
            <center>
            <h2>بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى&nbsp;&nbsp;&nbsp;
            </center>
            </br>
        </header>
        
        </br>
<div style="background-color:#ffffff ;height:100%;width:75%; margin:0 auto;"  >
    </br>
    <br>
    <center>
        <p><font color="red" ><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>   
    </center>
    
    <br>
    <br>
</div>
    <br>
  
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
