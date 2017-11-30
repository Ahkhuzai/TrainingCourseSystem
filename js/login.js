
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {              
    $("#usrName").jqxInput({placeHolder: "اسم المستخدم", height: 25, width: 230, minLength: 1,  theme: 'office',rtl:true });
    $("#usrPass").jqxPasswordInput({ placeHolder: "كلمة المرور", height: 25, width: 230, minLength: 1, theme: 'office' ,rtl:true});
});

$(document).ready(function () {
    $("#login").jqxButton({ width: '120px', height: '35px', theme: 'office'});
});
