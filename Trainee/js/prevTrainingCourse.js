
       $(document).ready(function () {
            $('#tabs').jqxTabs({ width:'100%', position: 'top', rtl:'true'});     
        });   //////////////////////////////

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
            { name: 'attendance_status',type: 'string' },
            { name: 'attendance_id',type: 'number' },
            { name: 'r_id',type: 'number' },
            
        ],
        url: "getPrevTCForTrainee.php"
    };
    $("#CompleteTC").jqxGrid({
        source: source1,
  
        rtl:true,
        autorowheight: true,
        autoheight: true,
        width:'100%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ الدورة ', datafield: 'start_date',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'الزمان ', datafield: 'start_at',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'المدة ', datafield: 'duration',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'المكان ', datafield: 'location',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'النوع ', datafield: 'type',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الحضور ', datafield: 'attendance_status',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            
        ]
    }); 
    $("#CompleteTC").on('rowselect', function (event) {
        var tt_ID = event.args.row.id; 
        var r_id=event.args.row.r_id;
        var attendance_id=event.args.row.attendance_id; 
        if(attendance_id==12)
        {
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
        }
        });
});
//////////////////
   $(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'hours',type: 'string' },
            { name: 'ttids',type: 'string' },
            { name: 'status',type: 'string' },
            { name: 'psid',type: 'number' },
            { name: 'start_date' },
            { name: 'end_date' },
            
        ],
        url: "getTraineeCompleteProgram.php",
        pager: function (pagenum, pagesize, oldpagenum) {
                    // callback called when a page or page size is changed.
        }
    };
    $("#CompleteProgram").jqxGrid({
        source: source,
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'100%',                                        
        columns: [
            { text: 'اسم البرنامج', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer , aggregates: ['count']},
             { text: 'حالة البرنامج', datafield: 'status',filtertype: 'chickedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
            { text: 'عدد ساعات البرنامج', datafield: 'hours',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
            { text: 'تاريخ البداية', datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
            { text: 'تاريخ النهاية', datafield: 'end_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
      
        ]
    });
    $("#CompleteProgram").on('rowselect', function (event) {
        var tt_ids = event.args.row.ttids; 
        var p_id = event.args.row.id; 
        var sdate = event.args.row.start_date; 
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_ids:tt_ids,
            p_id :p_id, 
            sdate:sdate,
            page: 'SingleProgram',
              },
        success : function(data){
        
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert (textStatus);}
            });       
        var url="SingleProgram.php";
        window.location=url;    
        
        });
});
///////////////
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}