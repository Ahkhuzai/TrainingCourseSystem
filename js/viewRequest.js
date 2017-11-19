$(document).ready(function () {
    // prepare the data
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'sid',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'status' ,type: 'string'},
            { name: 'add_date'}],
        url:"tc_get.php"
    };
    $("#grid").jqxGrid({
        source: source,
        theme: 'office',
        rtl:true,
        showfilterrow: true,
        filterable: true,
        width:'70%',
        columns: [
            { text: 'اسم الدورة', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ الاضافة', datafield: 'add_date',cellsformat: 'dd.MM.yyyy',filtertype: 'range',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الحالة', datafield: 'status',filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer}
        ]
    });
        $("#grid").on('rowselect', function (event) {
        var TCID = event.args.row.id;
        var StatusID=event.args.row.sid;
      
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            ttid :TCID,
            sid:StatusID
              },
        success : function(data){
           ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="singleTC.php";
        window.location=url;     
        });

});
    
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
