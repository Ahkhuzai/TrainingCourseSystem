<?php
/* Smarty version 3.1.30, created on 2018-01-04 07:10:14
  from "C:\xampp\htdocs\rtp\Admin\templates\AdminAddTrainer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4dc546d024b7_18919117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7afdc3acaa7edefc576fbdc5305bd83bd2338996' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\AdminAddTrainer.tpl',
      1 => 1515046199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4dc546d024b7_18919117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminAddTrainer.js"><?php echo '</script'; ?>
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
    <h2>الرجاء تعبئة البيانات التالية:</h2>
    
    <center> 
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>  
        </br>
        <form action='AdminAddTrainer.php' method='POST' enctype="multipart/form-data">
        <input type='text' id='trainer' name='trainer' />
        <br>
        <input type='submit' id='search' name='search'  value='بحث'/>
        <br>
        <br>
        <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
        <div id="info" name="info" style="display:<?php echo $_smarty_tpl->tpl_vars['display']->value;?>
" >
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
           <input type='submit' id='back' name='back'  value="عودة"  >
        <input type='submit' id='AddTrainer' name='AddTrainer'  value="اضافة مدرب"  >
        
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
