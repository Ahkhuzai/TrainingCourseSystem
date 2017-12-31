    $(document).ready(function () {
            $('#tabs').jqxTabs({ width:'75%', height: 200, position: 'top', theme:'office', rtl:'true'});     
        });
        
    $(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'hours',type: 'number' }],
        url: "getPrevProgramForTrainee_trainee.php"
    };
    $("#CompleteProgram").jqxGrid({
        source: source,
        theme: 'office',
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم البرنامج', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: ' عدد الساعات الكلية للبرنامج', datafield: 'hours',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },        
        ]
    });
        $("#CompleteProgram").on('rowselect', function (event) {
        var PID = event.args.row.id;   
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            program_id :PID,
            page: 'SingleProgram'
              },
        success : function(data){
          ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="SingleProgram.php";
        window.location=url;     
        });              
});

//////////////////////////////

    $(document).ready(function () {
        var source1 ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'sid',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'tr_ar_name',type: 'string' },
            { name: 'start_at'},
            { name: 'duration'},
            { name: 'type'},
            { name: 'pname'},
            { name: 'start_date'},
            { name: 'location',type: 'string' },
            { name: 'reg_status',type: 'string' },
            { name: 'r_id',type: 'number' },
            
        ],
        url: "getPrevTCForTrainee.php"
    };
    $("#CompleteTC").jqxGrid({
        source: source1,
        theme: 'office',
        rtl:true,
        autorowheight: true,
        autoheight: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ الدورة ', datafield: 'start_date',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'الزمان ', datafield: 'start_at',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'المدة ', datafield: 'duration',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'المكان ', datafield: 'location',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'النوع ', datafield: 'type',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة التسجيل ', datafield: 'reg_status',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            
        ]
    }); 
    $("#CompleteTC").on('rowselect', function (event) {
        var tt_ID = event.args.row.id; 
        var r_id=event.args.row.r_id; 
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_id :tt_ID,
            r_id:r_id,
            page: 'SingleTCCompleteTrainee'
              },
        success : function(data){

        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });  
            var url="SinglePrevTrainingCourseView.php";
            window.location=url;    
      
        });
});
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}