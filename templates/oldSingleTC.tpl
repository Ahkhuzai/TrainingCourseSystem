{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/oldSingleTC.js"></script>
<p id="url" hidden="true">{$url}</p>
    <center>
    <fieldset style="width:70%; margin:0 auto;">      
   <legend align="right">بيانات الدورة</legend>
    <h3>اسم الدورة</h3> 
    <p id="nameOfTC">{$name}</p>
    <h3> تاريخ الانعقاد</h3>
    <p>{$start_date}</p>
    <h3> التقييم العام للمدرب</h3>
    <p>{$trAllRate}</p>
    <h3> التقييم العام للدورة</h3>
    <p>{$tcAllRate}</p>   
    </br>
    </br> <div style='height: 100%; width: 100%;'>
        <div id='host' style="margin: 0 auto; width:600px; height:300px;">
        <div id='jqxChart' style="width:600px; height:300px; position: relative; left: 0px; top: 0px;">
        </div>
    </div>
         </BR>
    </fieldset>
    </br>
    </br>
</div>
    <br>
{include file='footer.tpl'}


