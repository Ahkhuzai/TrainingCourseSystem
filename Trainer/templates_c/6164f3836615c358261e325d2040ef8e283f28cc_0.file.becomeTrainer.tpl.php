<?php
/* Smarty version 3.1.30, created on 2018-01-09 09:02:30
  from "C:\xampp\htdocs\rtp\Trainer\templates\becomeTrainer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a547716859b57_80091891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6164f3836615c358261e325d2040ef8e283f28cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Trainer\\templates\\becomeTrainer.tpl',
      1 => 1515484819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a547716859b57_80091891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
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
        <p>حجم الملفات المسموح به  5 ميغابايت</p>
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
