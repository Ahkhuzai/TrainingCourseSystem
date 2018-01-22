$(document).ready(function () {
    $("#back").jqxButton({ width: '15%', height: '35px'});
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'pname',type: 'string' },
            { name: 'tr_ar_name',type: 'string' },
            { name: 'status',type: 'string' },
            { name: 'sid',type: 'number' },
            { name: 'start_date' },
            { name: 'counts',type: 'number' }],
        url: "getTCComplete.php"
    };
    $("#tcCompleteList").jqxGrid({
        source: source,
      
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'100%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الدورة', datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ بدء الدورة',datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد الحاضرين/المسجلين', datafield: 'counts',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },   
        ]
    });
        $("#tcCompleteList").on('rowselect', function (event) {
        var tt_id = event.args.row.id; 
        var sid = event.args.row.sid;
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_id :tt_id,
            page: 'Admin_tcComplete'
              },
        success : function(data){
          ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="Single_Admin_tcComplete_print.php";
        window.location=url;     
        });           
});

   $(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'hours',type: 'string' },
            { name: 'ttids',type: 'string' },
            { name: 'status',type: 'string' },
      
            { name: 'start_date' },
            { name: 'end_date' },
            
        ],
        url: "getProgramPrint.php",
        pager: function (pagenum, pagesize, oldpagenum) {
                    // callback called when a page or page size is changed.
        }
    };
    $("#ProgramCompleteList").jqxGrid({
        source: source,
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'100%',                                        
        columns: [
            { text: 'اسم البرنامج', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer , aggregates: ['count']},
               { text: 'عدد ساعات البرنامج', datafield: 'hours',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
            { text: 'تاريخ البداية', datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
            { text: 'تاريخ النهاية', datafield: 'end_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
      
        ]
    });
    $("#ProgramCompleteList").on('rowselect', function (event) {
        var tt_ids = event.args.row.ttids; 
        var p_id = event.args.row.id; 
        var sdate = event.args.row.start_date; 
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_ids:tt_ids,
            p_id :p_id, 
             page: 'Admin_ProgramComplete'
              },
        success : function(data){
          ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="ProgramCerPrint.php";
        window.location=url;     
        });  
});

        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}


