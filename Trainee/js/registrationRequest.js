$(document).ready(function () {
    $("#back").jqxButton({ width: '15%', height: '35px', theme: 'office'});
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'tr_ar_name',type: 'string' },
            { name: 'pname',type: 'string' },
            { name: 'start_date' },
            { name: 'status',type: 'string' },
            { name: 'sid',type: 'string' },
        
        ],
        url: "getTraineeTC.php"
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
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ انعقاد الدورة',datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة التسجيل', datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
        ]
    });
    
    $("#tcList").on('rowselect', function (event) {
        var Tt_ID = event.args.row.id;
        var StatusID=event.args.row.sid;
      
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_id :Tt_ID,
            sid:StatusID,
            page:'SingleRegistration'
              },
        success : function(data){
           ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="SingleRegister.php";
        window.location=url;     
        });
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}