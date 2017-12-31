
    
    $(document).ready(function () {
    $("#addProgram").jqxButton({ width: '10%', height: '35px', theme: 'office'});
    $("#back").jqxButton({ width: '10%', height: '35px', theme: 'office'});
        });

$(document).ready(function () {     
    $("#Tname").jqxInput({placeHolder: "اسم البرنامج باللغة العربية", height: 25, width: '70%', minLength: 1, rtl : true });  
    $("#engname").jqxInput({placeHolder: "اسم البرنامج باللغة الانجليزية", height: 25, width: '70%', minLength: 1, rtl : true }); 
    $("#Hours").jqxInput({placeHolder: "عدد ساعات البرنامج الكلية", height: 25, width: '70%', minLength: 1, rtl : true }); 
    $("#abstract").jqxInput({width: '70%', height: 80, placeHolder: 'ملخص البرنامج',theme: 'office' ,rtl : true }); 
    $("#Goals").jqxInput({width: '70%', height: 200, placeHolder: 'أهداف البرنامج',theme: 'office' ,rtl : true });   
    });
