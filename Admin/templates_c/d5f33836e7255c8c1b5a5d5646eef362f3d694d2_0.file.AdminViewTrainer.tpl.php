<?php
/* Smarty version 3.1.30, created on 2018-01-21 08:39:49
  from "C:\xampp\htdocs\rtp_s\Admin\templates\AdminViewTrainer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6443c5048fc5_34747458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f33836e7255c8c1b5a5d5646eef362f3d694d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Admin\\templates\\AdminViewTrainer.tpl',
      1 => 1516094902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a6443c5048fc5_34747458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminViewTrainer.js"><?php echo '</script'; ?>
>
<nav id="nav">
	<ul>
        <li><a href="AdminViewTrainer.php"> استعراض المدربين</a></li>
        <li><a href="AdminAddTrainer.php"> اضافة مدرب</a></li>                       
          
    </ul>
</nav>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">   
    <center>
    <h3>قائمة المدربين</h3>
    <div  id='trList'>      
    </div>
    <br>
    <form action="AdminViewTrainer.php" method="POST">
        <input type="submit" value="عودة"  name = "back" id='back' class='btn' /> 
    </form>
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
