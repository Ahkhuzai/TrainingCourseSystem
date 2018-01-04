<?php
/* Smarty version 3.1.30, created on 2018-01-04 07:49:53
  from "C:\xampp\htdocs\rtp\Trainer\templates\hoContract.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4dce91d354e4_37833507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e85d958a8f28148766db059ae11c355b7930dd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainer\\templates\\hoContract.tpl',
      1 => 1515048588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4dce91d354e4_37833507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/hoContract.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
<section id="intro" class="main">
    <div class="spotlight">
            <div class="content align-right">
            <section class="main">
    <form action='hoContract.php' method='POST'>

    <h3>تعليمات هامة</h3>
    
    <ul>
      <li> البند الاول
      </li>
       <li> البند الثاني
      </li>
       <li> البند الثالث
      </li>
       <li> البند الراابع
      </li>
       <li> البند الخامس
      </li>
       <li> البند السادس
      </li>
       <li> البند السابع
      </li>
    </ul>
  <center>
          <input type='submit' id='notAgree' name='notAgree'  value="تراجع "  >
    <input type='submit' id='agree' name='agree'  value="متابعة"  >

            </br>
            </br>
    </center>
</section>
</div>
</div>
</section>				
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
