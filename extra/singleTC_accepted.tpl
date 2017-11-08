{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}
<script type="text/javascript" src={$url}></script>

    <form action='addTraining.php' method='POST'>
        <fieldset style="margin:0 auto; width:75%" dir='rtl'>
    <legend>لطلب تقديم دورة تدريبية, الرجاء إكمال النموذج التالي:</legend>
    <br>
    <center>
       
            <input type="text" id="Tname" name="Tname"/>
            </br>
            </br>
            <input type="text" id="Trname" name="Trname"/>       
            </br>
            </br>
            <textarea id='Subjects' name='Subjects' ></textarea>       
            </br>
            </br>
            <input type="text" id="ForWho" name="ForWho"/>       
            </br>
            </br>
            <input type="text" id="Location" name="Location"/>       
            </br>
            </br>
             <div id='jqxWidget'>
             </div>   
        <div style='margin-top: 10px; font-size: 13px; font-family: Verdana;' id='selection'></div>  
            </br>
            </br>
            <input type="text" id="Weekday" name="Weekday"/>       
            </br>
            </br>
            <input type="text" id="Time" name="Time"/>       
            </br>
            </br>
            <input type="text" id="Hourse" name="Hourse"/>       
            </br>
            </br>
            <input type="text" id="Capacity" name="Capacity"/>       
            </br>
            </br>
            <input type="submit" value="طباعة"  name = "print" id='print' class='btn'/>
           
            <input type="button" value="استعراض المسجلين"  name = "viewRegistred" id='viewRegistred' class='btn'/> 
            </br>
            </br>
    </center>
    </fieldset>
    </form>
    <br>

    <br>
</div>
    <br>
  
    {include file='footer.tpl'}



