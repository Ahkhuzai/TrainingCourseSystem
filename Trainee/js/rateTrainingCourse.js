$(document).ready(function () {
    // prepare the data
    var source ={
        datatype: "json",
        datafields: [
            { name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'tr_ar_name',type: 'string' },
            { name: 'rid',type: 'number' },
            { name: 'start_date'}],
        url: "getTCForRate.php"
    };
    $("#TCRate").jqxGrid({
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
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },     
            { text: 'تاريخ انعقاد الدورة', datafield: 'start_date',cellsformat: 'dd.MM.yyyy',filtertype: 'range',renderer: columnsrenderer, cellsrenderer: cellsrenderer },        
        ]
    });
        $("#TCRate").on('rowselect', function (event) {
        var TCID = event.args.row.id; 
        var RID = event.args.row.rid; 
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_id :TCID,
            rid:RID,
            page: 'tcForRate'
              },
        success : function(data){
          ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {
            alert ("Error Occured");
        }
            });       
        var url="SingleRate.php";
        window.location=url;     
        });              
});   
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
