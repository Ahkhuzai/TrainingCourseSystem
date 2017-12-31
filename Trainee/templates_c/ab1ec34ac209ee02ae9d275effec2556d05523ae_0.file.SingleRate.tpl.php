<?php
/* Smarty version 3.1.30, created on 2017-12-24 07:17:13
  from "C:\xampp\htdocs\dsr_rtp\Trainee\templates\SingleRate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3f4669f3a180_83325255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab1ec34ac209ee02ae9d275effec2556d05523ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dsr_rtp\\Trainee\\templates\\SingleRate.tpl',
      1 => 1514096224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3f4669f3a180_83325255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="js/SingleRate.js"><?php echo '</script'; ?>
>

    <center>
    <fieldset style="width:70%; margin:0 auto;" id="printend" name="printend">      
   <legend align="right">بيانات الدورة</legend>
   <center>
            <h3><font color="green"><?php echo $_smarty_tpl->tpl_vars['added']->value;?>
</font></h3>
            <p><font color="red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font></p>
            </center>
  
    <h3>اسم الدورة</h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
    <h3>مقدم الدورة</h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['tr_name']->value;?>
</p>
    <h3> تاريخها </h3>
    <p><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
 من  
    <?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
 الى </p>
    <hr>
    <center>
        <h1>الرجاء التكرم بتقييم الدورة </h1>
        <div id='Program'>
            <div>
                البرنامج التدريبي</div>
            <div>
                <ul style="direction: rtl;">
                    <li>محتوى الدورة / البرنامج التدريبي يلبي احتياجي	
                            <div id='r1'></div>
                    </li>
                    <li>أهداف الدورة / البرنامج التدريبي محددة وشاملة	
                            <div id='r2'></div>
                    </li>
                    <li>أهداف الدورة / البرنامج التدريبي واضح ومطابق للمحتوى	
                            <div id='r3'></div>
                    </li>
                    <li>المادة العلمية المقدمة حققت أهداف الدورة / البرنامج التدريبي	
                            <div id='r4'></div>
                    </li>
                    <li>تم عرض موضوعات المادة التدريبية بطريقة مرتبة ومنطقية	
                            <div id='r5'></div>
                    </li>
                    <li>ارتبط الجانب العلمي التطبيقي بالمحتوى النظري	
                            <div id='r6'></div>
                    </li>
                    <li>الموضوعات المقدمة شيقة ومثيرة للاهتمام	
                            <div id='r7'></div>
                    </li>
                    <li>المعلومات المقدمة تتسم بالدقة والحداثة	
                            <div id='r8'></div>
                    </li>
                    <li>ساعدتني الدورة على اكتساب مهارات جديدة	
                            <div id='r9'></div>
                    </li>
                    <li>ساهمت الدورة في تطوير قدرتي على فهم واكتساب ثقافة البحث العلمي	
                            <div id='r10'></div>
                    </li>
                    <li>ينبغى تكرار هذه الدورة بصفة دورية لأنها مهمة ومفيدة	
                            <div id='r11'></div>
                    </li>
                </ul>
            </div>
        </div>
        <div id='Presenter'>
            <div>
                 مقدم الدورة</div>
            <div>
                <ul style="direction: rtl;">
                    <li>المدرب على مستوى عالٍ من الكفاءة والتميز	
                            <div id='r12'></div>
                    </li>
                    <li>التزم المدرب بالحضور في الموعد المحدد للدورة	
                            <div id='r13'></div>
                    </li>
                    <li>حرص المدرب على التأكد من استيعاب المتدربين لموضوعات البرنامج التدريبي قبل الانتقال من نقطة إلى أخرى	
                            <div id='r14'></div>
                    </li>
                    <li>خصص المدرب وقتا كافيا للتدريب العلمي على ما تم تقديمه نظرياً	
                            <div id='r15'></div>
                    </li>
                    <li>تجاوب المدرب مع مداخلات و أسئلة المتدربين بشكل إيجابي وفعال		
                            <div id='r16'></div>
                    </li>
                    <li>حرص المدرب على زرع الثقة والإيجابية لدى المتدربين	
                            <div id='r17'></div>
                    </li>
                </ul>
            </div> 
        </div>
        <div id='presentation'>
            <div>
                  وسائل العرض</div>
            <div>
                <ul style="direction: rtl;">
                    <li>طرق العرض اتسمت بالتنوع والجذب	

                            <div id='r18'></div>
                    </li>
                    <li>تم تفعيل الوسائل والتقنيات الحديثة في تقديم البرنامج التدريبي		
                            <div id='r19'></div>
                    </li>
                    <li>وسائل التقنية التي اُستخدمت كانت مجهزة بشكل جيد			
                            <div id='r20'></div>
                    </li>
                    <li>الصوت والصورة كانا واضحين	
                            <div id='r21'></div>
                    </li>

                </ul>
            </div>
        </div>
        <div id='place'>
            <div>
                  مكان الدورة</div>
            <div>
                <ul style="direction: rtl;">
                    <li>قاعة التدريب كانت مناسبة من حيث السعة لعدد المتدربين	
                            <div id='r22'></div>
                    </li>
                    <li>مكان انعقادالدورة /البرنامج التدريبي مجهز بصورة جيدة	
                            <div id='r23'></div>
                    </li>

                </ul>
            </div>
        </div>
        <div id='orgnization'>
            <div>
                  التنظيم للدورة التدريبية</div>
            <div>
                <ul style="direction: rtl;">
                   <li>وسائل الإعلان عن الدورة المقدمة كانت مناسبة	
                            <div id='r24'></div>
                    </li>
                    <li>طريقة التسجيل في الدورة كانت سهلة		
                            <div id='r25'></div>
                    </li>
                    <li>توقيت انعقاد الدورة كان مناسبا	
                            <div id='r26'></div>
                    </li>
                    <li>التنظيم كان على درجة عالية	
                            <div id='r27'></div>
                    </li>
                    <li>الوقت المخصص للدورة كان كافياً	
                            <div id='r28'></div>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <br>
    </center>    
   
    <form action="SingleRate.php" method="POST">
        <center>
            <textarea  type="text" id="comments" name="comments"></textarea>
        </center>
    </br>
    </br> 
    <input type="hidden"   name = "place_rate" id='place_rate' class='btn'/>
    <input type="hidden"   name = "orgnization_rate" id='orgnization_rate' class='btn'/>
    <input type="hidden"   name = "presentation_rate" id='presentation_rate' class='btn'/>
    <input type="hidden"   name = "Presenter_rate" id='Presenter_rate' class='btn'/>
    <input type="hidden"   name = "Program_rate" id='Program_rate' class='btn'/>
    <input type="submit" value="إرسال"  name = "send" id='send' class='btn'/>
    <input type="submit" value="عودة"  name = "back" id='back' class='btn'/> 
    </form>
    </br>
    </fieldset>
    </br>
    </br>
</div>
    <br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>







<?php }
}
