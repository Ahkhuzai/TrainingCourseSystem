<?php
/* Smarty version 3.1.30, created on 2018-01-06 21:44:05
  from "/opt/lampp/htdocs/rtp/Trainer/templates/becomeTrainer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a513515aef3f4_61750646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6580d62c05e83db2f9659e01daa820f0abe0dfef' => 
    array (
      0 => '/opt/lampp/htdocs/rtp/Trainer/templates/becomeTrainer.tpl',
      1 => 1515180730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a513515aef3f4_61750646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/becomeTrainer.js"><?php echo '</script'; ?>
>

<!-- Introduction -->
<section id="intro" class="main">
        <div class="spotlight">
                <div class="content align-right">
                <section class="main">
    <h3>الرجاء تعبئة البيانات التالية</h3>
    
    <center> 
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>  
        </br>
        <form action='becomeTrainer.php' method='POST' enctype="multipart/form-data">
        <div id="info" name="info" >
        <div> 
            السيرة الذاتية
            <input type="file" name="cv" id="cv"  accept='application/pdf , application/vnd.wordperfect , application/msword' > 
        </div>
        </br>
        </br>
            التوقيع&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="file" name="sign" id="sign"  accept='image/*' > 
        </br>
        </br>
         
        </div>
           <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p> 
        <input type='submit' id='AddTrainer' name='AddTrainer'  value="تسجيل"  >
        <input type='submit' id='back' name='back'  value="عودة"  >
        </br>
        </br>
          </form>
    </center>
                  </section>
                </div>
        </div>
</section>				
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
