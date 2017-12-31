
    
    $(document).ready(function () {
    $("#addTraining").jqxButton({ width: '10%', height: '35px', theme: 'office'});
    $("#back").jqxButton({ width: '10%', height: '35px', theme: 'office'});
        });

$(document).ready(function () {     

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
    $("#TypeTc").jqxDropDownList({ autoDropDownHeight: true,source: dataAdapter,width: '70%', height: '25' ,theme: 'office' ,rtl:true });
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
                    theme:'office', source: dataAdapter, displayMember: "ar_name", valueMember: "id", width: '70%',autoDropDownHeight: true,rtl:true
                });
                    $("#trainer").jqxDropDownList({placeHolder: "مقدم الدورة"});
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

$(document).ready(function () {
   
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'pname',type: 'string' },
            { name: 'pid',type: 'string' },
            { name: 'abstract',type: 'string' },
            { name: 'goals',type: 'string' },

            ],
        url: "getTrainingCourse.php"
    };
    $("#tcList").jqxGrid({
        source: source,
        theme: 'office',
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            ]
    });
$("#tcList").on('rowselect', function (event) {
        var tc_id = event.args.row.id; 
        document.getElementById('info').style.display = 'block';
        $("#tc_id").val(tc_id);
        $("#abstract").val(event.args.row.abstract);
        $("#Goals").val(event.args.row.goals);
        $("#pid").val(event.args.row.pid);


        });           
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}