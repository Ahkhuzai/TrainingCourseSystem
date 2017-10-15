
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("#signup").jqxButton({ width: '120px', height: '35px', theme: 'office' });
        });
$(document).ready(function () {
    $("#login").jqxButton({ width: '120px', height: '35px', theme: 'office'});
        });
$(document).ready(function () {              
  $("#usrname").jqxInput({placeHolder: "اسم المستخدم", height: 25, width: 200, minLength: 1,theme: 'office',rtl : true });
  
   $("#usrname").blur(function(){
       var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
       if ($(this).val() == '') {
            alert("الرجاء ادخال البريد الالكتروني"); 
        }
    } );
  });     
$(document).ready(function () {              
    $("#usrpass").jqxInput({placeHolder: "كلمة المرور", height: 25, width: 200, minLength: 1, theme: 'office',rtl : true });  
       $("#usrpass").blur(function(){
       if ($(this).val() == '') {
            alert("الرجاء ادخال كلمة المرور"); 
        }
    } );  
});

 $(document).ready(function () {
   // create jqxCheckBox.
    $("#jqxcheckbox").jqxCheckBox({ width: 120, height: 25,rtl:true });
    // bind to change event.
    $("#jqxcheckbox").bind('change', function (event) { 
    var checked = event.args.checked;
    if(checked==true)
        $(":hidden#trainer").val('true');            
    });
});

