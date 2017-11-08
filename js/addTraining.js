
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    
    $(document).ready(function () {
    $("#addTraining").jqxButton({ width: '120px', height: '35px', theme: 'office'});
    $("#saveTraining").jqxButton({ width: '120px', height: '35px', theme: 'office'});
     
        });

$(document).ready(function () {              
    $("#Tname").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Hours").jqxInput({placeHolder: "عدد ساعات الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#abstract").jqxInput({width: '70%', height: 80, placeHolder: 'ملخص الدورة',theme: 'office' ,rtl : true }); 
    $("#Goals").jqxInput({width: '70%', height: 200, placeHolder: 'أهداف الدورة',theme: 'office' ,rtl : true });  
    $("#stime").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#etime").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
});
$(document).ready(function () {                
    // create jqxcalendar.
    $("#time").jqxDateTimeInput({ width: '70%', height: 25,  selectionMode: 'range', theme: 'office' });
    $("#time").on('change', function (event) {
        var selection = $("#time").jqxDateTimeInput('getRange');
        if (selection.from != null) {
            $("#selection").html("<div>من: " + selection.from.toLocaleDateString() + " <br/>الى: " + selection.to.toLocaleDateString() + "</div>");
            var sdate= selection.from.toLocaleDateString();
            var edate=selection.to.toLocaleDateString();
            sdate.replace('/','-');
            edate.replace('/','-');
            $("#stime").val(sdate);
            $("#etime").val(edate);
            
        }
    });

    var date1 = new Date();
    date1.setFullYear(2017, 7, 7);
    var date2 = new Date();
    date2.setFullYear(2017, 7, 15);
    $("#time").jqxDateTimeInput('setRange', date1, date2);
});
   