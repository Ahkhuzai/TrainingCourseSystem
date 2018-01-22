
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
            { name: 'capacity',type: 'string' },
            { name: 'status',type: 'string' },
        ],
        url: "getTCAvailableForTrainee_trainee.php"
    };
    $("#AvailableTC").jqxGrid({
        source: source1,
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        sortable: true,
        pageable: true,
        width:'100%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ الدورة ', datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'الزمان ', datafield: 'start_at',cellsformat: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'المدة ', datafield: 'duration',cellsformat: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'المكان ', datafield: 'location',cellsformat: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'النوع ', datafield: 'type',cellsformat: 'textbox',filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'العدد ', datafield: 'capacity',cellsformat: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'حالة التسجيل ', datafield: 'status',cellsformat: 'textbox',filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            
        ]
    }); 
    $("#AvailableTC").on('rowselect', function (event) {
        var tt_ID = event.args.row.id;   
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_id :tt_ID,
            page: 'SingleTCTrainee'
              },
        success : function(data){
          ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });      
        if(event.args.row.sid==11 )
            alert("تم اغلاق التسجيل في الدورة");
        else
        {
            var url="SingleTrainingCourseView.php";
            window.location=url;    
        }
        });
});
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}