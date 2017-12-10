
    
    $(document).ready(function () {
    $("#addTraining").jqxButton({ width: '10%', height: '35px', theme: 'office'});
    $("#back").jqxButton({ width: '10%', height: '35px', theme: 'office'});
        });

$(document).ready(function () {     
    $("#Tname").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#engname").jqxInput({placeHolder: "اسم الدورة باللغة الانجليزية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Location").jqxInput({placeHolder: "مكان الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Hours").jqxInput({placeHolder: "عدد ساعات الدورة في اليوم الواحد", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#abstract").jqxInput({width: '70%', height: 80, placeHolder: 'ملخص الدورة',theme: 'office' ,rtl : true }); 
    $("#Goals").jqxInput({width: '70%', height: 200, placeHolder: 'أهداف الدورة',theme: 'office' ,rtl : true });  
    $("#stime").jqxInput({placeHolder: "تاريخ البداية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#etime").jqxInput({placeHolder: "تاريخ النهاية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#type").jqxInput({placeHolder: "مكان الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#tr_id").jqxInput({placeHolder: "مكان الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#start_at").jqxInput({placeHolder: "مكان الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#capacity").jqxInput({placeHolder: "عدد المقاعد المتاحة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
});

$(document).ready(function () {                
    var source = [
        "شطر الطالبات فقط",
        "شطر الطلاب فقط",
        "شطر الطلاب وشطر الطالبات معا"
            ];
            var dataAdapter = new $.jqx.dataAdapter(source);
    // Create a jqxDropDownList
    $("#TypeTc").jqxDropDownList({ autoDropDownHeight: true,source: dataAdapter, selectedIndex: 0,width: '70%', height: '25' ,theme: 'office' ,rtl:true });
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
    var source =
                {
                    datatype: "json",
                    datafields: [
                        { name: 'id' },
                        { name: 'ar_name'}
                    ],
                    url:"getTrainer.php",
                    async: true
                };
                var dataAdapter = new $.jqx.dataAdapter(source);
                // Create a jqxDropDownList
                $("#trainer").jqxDropDownList({
                    theme:'office',selectedIndex: 0, source: dataAdapter, displayMember: "ar_name", valueMember: "id", width: '70%',autoDropDownHeight: true
                });
                // subscribe to the select event.
                $("#trainer").on('select', function (event) {
                    if (event.args) {
                        var item = event.args.item;
                        if (item) {
                            $("#tr_id").val(item.value);
                        }
                    }
                });
});

$(document).ready(function () {                
    $("#startAt").jqxDateTimeInput({ width: '70%', height: '25px', formatString: 'HH:mm:ss', showTimeButton: true, showCalendarButton: false});
   $('#startAt').on('change', function (event) 
    {    
        $("#start_at").val($('#startAt').val());
    }); 
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
