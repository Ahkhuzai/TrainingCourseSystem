<?php
/* Smarty version 3.1.30, created on 2017-12-30 02:33:12
  from "/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/AdminAddProgram.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a46ecd8218798_58229466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82945f8a3c3ec6722e2f482e08557090247e3f13' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/rtp/Admin/templates/AdminAddProgram.tpl',
      1 => 1514597568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a46ecd8218798_58229466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/AdminAddProgram.js"><?php echo '</script'; ?>
>
<!-- Introduction -->
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content align-right">
                <section class="main">
                    
    <h2> الرجاء إكمال النموذج التالي:</h2>  
    <center>
        <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
        <p><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></p>
        
        <form action='AdminAddProgram.php' method='POST' enctype="multipart/form-data">
            <br>
            <input type="text" id="Tname" name="Tname"/>   
            </br>
           
            <input type="text" id="engname" name="engname"/>            
            </br>
         
            <textarea id='abstract' name='abstract' ></textarea>       
            </br>
          
            <textarea id='Goals' name='Goals' ></textarea>       
            </br>
    
            <input type="text" id="Hours" name="Hours" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/> 
            </br>
            
            </br>
             <input type="submit" value="عودة"  name = "back" id='back' class='btn'/>
            <input type="submit" value="إضافة"  name = "addProgram" id='addProgram' class='btn'/> 
           
            </form>
            <br>            
    </center>
                   </section>          
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
