
    
    $(document).ready(function () {
    $("#saveTraining").jqxButton({ width: '10%', height: '35px', theme: 'office'});
    $("#addTraining").jqxButton({ width: '10%', height: '35px', theme: 'office'});
    $("#back").jqxButton({ width: '10%', height: '35px', theme: 'office'});
        });

$(document).ready(function () {     
    $("#Tname").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#engname").jqxInput({placeHolder: "اسم الدورة باللغة الانجليزية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Hours").jqxInput({placeHolder: "عدد ساعات الدورة في اليوم الواحد", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#abstract").jqxInput({width: '70%', height: 80, placeHolder: 'ملخص الدورة',theme: 'office' ,rtl : true }); 
    $("#Goals").jqxInput({width: '70%', height: 200, placeHolder: 'أهداف الدورة',theme: 'office' ,rtl : true });  
    $("#stime").jqxInput({placeHolder: "تاريخ البداية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#etime").jqxInput({placeHolder: "تاريخ النهاية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#type").jqxInput({placeHolder: "مكان الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 

});

$(document).ready(function () {                
    var source = [
        "شطر الطالبات فقط",
        "شطر الطلاب فقط",
        "شطر الطلاب وشطر الطالبات معا"
            ];
            var dataAdapter = new $.jqx.dataAdapter(source);
    // Create a jqxDropDownList
    $("#TypeTc").jqxDropDownList({autoDropDownHeight: true,source: dataAdapter,width: '70%', height: '25' ,theme: 'office' ,rtl:true });
    $("#TypeTc").jqxDropDownList({placeHolder: "مقر الحضور"}); 
    $('#TypeTc').on('select', function (event) {
        var args = event.args;
        if (args != undefined) {
            var item = event.args.item;
            if (item != null) {           
                $("#type").val(item.label);
            }
        }
    });
});
$(document).ready(function () {                

    // create jqxcalendar.
    $("#dates").jqxDateTimeInput({ width: '70%', height: '25px' ,formatString:'yyyy-M-dd'});
    $("#datee").jqxDateTimeInput({ width: '70%', height: '25px',formatString:'yyyy-M-dd' });
    $('#dates').on('change', function (event) 
    {    
        $("#stime").val($('#dates').val());
    }); 
       $('#datee').on('change', function (event) 
    {     
        $("#etime").val($('#datee').val());  
    }); 
   
   
   
});
