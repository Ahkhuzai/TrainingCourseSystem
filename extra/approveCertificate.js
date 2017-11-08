$(document).ready(function () {
    // prepare the data
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'start_date'}],
        url: 'getOld_tc.php'
    };
    $("#oldTC").jqxGrid({
        source: source,
        theme: 'office',
        rtl:true,
        showfilterrow: true,
        filterable: true,
        width:'70%',
        height:'250px',
        columns: [
            { text: 'اسم الدورة', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },       
        ]
    });
        $("#oldTC").on('rowselect', function (event) {
        var TCID = event.args.row.id;
        var url="certificate.php?id=".concat(TCID);    
        window.location=url;               
});
});
   
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
