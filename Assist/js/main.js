
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {              
    $("#usrName").jqxInput({placeHolder: "اسم المستخدم", height: 25, width: 230, minLength: 1,  theme: 'energyblue',rtl:true });
    $("#usrPass").jqxPasswordInput({ placeHolder: "كلمة المرور", height: 25, width: 230, minLength: 1, theme: 'energyblue' ,rtl:true});
});

$(document).ready(function () {
    $("#login").jqxButton({ width: '120px', height: '35px', theme: 'energyblue'});
});
$(document).ready(function () {
    $("#newUser").jqxButton({ width: '120px', height: '35px', theme: 'energyblue',disabled: true });
     $("#isTrainer").jqxCheckBox({ width: 120, height: 25,rtl:true });
            // bind to change event.
            $("#isTrainer").bind('change', function (event) {
                var checked = event.args.checked;
                if(checked)
                    $('#newUser').jqxButton({disabled: false });
                else
                    $('#newUser').jqxButton({disabled: true });
                    
            });
});
