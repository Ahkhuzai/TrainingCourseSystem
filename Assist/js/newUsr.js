$(document).ready(function () {
        // create jqxRadioButton.     
    $("#isUqu").jqxRadioButton({ width: 120, height: 25 , rtl:true,  theme: 'energyblue' });
    $("#NotUqu").jqxRadioButton({ width: 120, height: 25, rtl:true,  theme: 'energyblue' });
        // bind to change event.
    $("#isUqu").bind('change', function (event) {
        $("#isUquForm").show();
    });
    $("#NotUqu").bind('change', function (event) {
        $("#isUquForm").hide();
    });
});

$(document).ready(function () {
    $("#signup").jqxButton({ width: '120px', height: '35px', theme: 'energyblue'});
});

$(document).ready(function () {              
    $("#usrName").jqxInput({placeHolder: "اسم المستخدم", height: 25, width: 230, minLength: 1,  theme: 'energyblue',rtl:true });
    $("#usrPass").jqxPasswordInput({ placeHolder: "كلمة المرور", height: 25, width: 230, minLength: 1, theme: 'energyblue' ,rtl:true});
});
