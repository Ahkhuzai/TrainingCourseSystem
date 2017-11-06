$(document).ready(function () {
    $("#print").jqxButton({ width: '120px', height: '35px', theme: 'office'});
    $("#send").jqxButton({ width: '120px', height: '35px', theme: 'office'});
     $("#delete").jqxButton({ width: '120px', height: '35px', theme: 'office'});
});

$(document).ready(function () {              
    $("#Tname").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Trname").jqxInput({placeHolder: "مقدم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#ForWho").jqxInput({placeHolder: "الفئة المستهدفة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Location").jqxInput({placeHolder: "موقع الدورة", height: 25, width:'70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Time").jqxInput({placeHolder: "وقت الدورة", height: 25, width: '70%', minLength: 1, theme: 'office' ,rtl : true}); 
    $("#Hourse").jqxInput({placeHolder: "عدد ساعات الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Capacity").jqxInput({placeHolder: "عدد المقاعد الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Subjects").jqxInput({width: '70%', height: 150, placeHolder: 'محتوى الدورة',theme: 'office' ,rtl : true });
    $("#Weekday").jqxInput({placeHolder: "ايام الاسبوع  ", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
});

$(document).ready(function () {                
    // create jqxcalendar.
    $("#jqxWidget").jqxDateTimeInput({ width: '70%', height: 25,  selectionMode: 'range', theme: 'office' });
    $("#jqxWidget").on('change', function (event) {
        var selection = $("#jqxWidget").jqxDateTimeInput('getRange');
        if (selection.from != null) {
            $("#selection").html("<div>من: " + selection.from.toLocaleDateString() + " <br/>الى: " + selection.to.toLocaleDateString() + "</div>");
        }
    });
    var date1 = new Date();
    date1.setFullYear(2017, 7, 7);
    var date2 = new Date();
    date2.setFullYear(2017, 7, 15);
    $("#jqxWidget").jqxDateTimeInput('setRange', date1, date2);
});