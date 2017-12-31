<?php
/* Smarty version 3.1.30, created on 2017-12-29 18:01:36
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/main/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4674f07d8ab8_97144428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a43b9f45b410a51d18f791dc3760dfc843c74fc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/main/templates/index.tpl',
      1 => 1513842668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4674f07d8ab8_97144428 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>

    <br>
    <center>
    <form action="index.php" method="POST" >
    <input id="trainee" name="trainee" value="المتدربين" type="submit"/>
     <input id="trainer" name="trainer" value="المدربين" type="submit"/>
     </center>
     </form>
        <br>
        <br>
</div>
    <br>
  
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
