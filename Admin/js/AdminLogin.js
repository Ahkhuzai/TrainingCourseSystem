$(document).ready(function () {              
    $("#usrName").jqxInput({placeHolder: "اسم المستخدم", height: 25, width: 230, minLength: 1, rtl:true });
    $("#usrPass").jqxPasswordInput({ placeHolder: "كلمة المرور", height: 25, width: 230, minLength: 1, rtl:true});
});

$(document).ready(function () {
    $("#login").jqxButton({ width: '120px', height: '35px'});
});
