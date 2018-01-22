<?php
/* Smarty version 3.1.30, created on 2018-01-17 09:31:12
  from "C:\xampp\htdocs\rtp_s\Trainee\templates\prevTrainingCourse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f09d0e7b4a3_83249138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '830e260eb8c309819bbccc64ea3a58e6787e94c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rtp_s\\Trainee\\templates\\prevTrainingCourse.tpl',
      1 => 1516094994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a5f09d0e7b4a3_83249138 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src='js/prevTrainingCourse.js'><?php echo '</script'; ?>
>
	                       <!-- Introduction -->
                            <section id="intro" class="main">
                                <div class="spotlight">
                                    <div class="content align-right">
                                    <section class="main">
    <center>
        <h3>الدورات  والبرامج السابقة</h3>

        <div id='tabs'>
                        <ul>
                            <li>الدورات التدريبية</li>
                            <li>البرامج التدريبية</li>
                        </ul>
                        <div>
                        <center>
                         <h3>الدورات السابقة</h3>
<br>
        <div  id='CompleteTC'>      
                    </div> 

                    <p>لطباعة شهادة الدورة التي سبق حضورها - الرجاء الضغط على اسم الدورة</p>
                    </center>
                    </div>
                    <div>
                    <center>
                     <h3>البرامج السابقة</h3>
                     <br>
        <div  id='CompleteProgram'>      
                    </div> 
                    <p>لطباعة شهادة البرنامج  - الرجاء الضغط على اسم البرنامج</p>
                    </center>
                    </div>

</div>
    </center>
                    </section> 
                                    </div>
                                </div>
                            </section>  
    <br>
    <br>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
