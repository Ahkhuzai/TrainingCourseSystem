<?php
/* Smarty version 3.1.30, created on 2018-01-02 08:57:35
  from "C:\xampp\htdocs\rtp\Admin\templates\AdminAddProgram.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b3b6f6e1548_07969854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce25514a1753a7847f8d022a29d92bfc544cefda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp\\Admin\\templates\\AdminAddProgram.tpl',
      1 => 1514879829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a4b3b6f6e1548_07969854 (Smarty_Internal_Template $_smarty_tpl) {
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
            </div>
        </div>
            </section>              
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<?php }
}
