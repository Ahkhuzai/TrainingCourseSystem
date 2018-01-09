$(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'start_date' },
            {name:'close'},
            { name: 'counts',type: 'number' }],
        url: "getTCForClose.php",
    updaterow: function (rowid, rowdata, commit) {               
        $.ajax({
            type : 'GET',
            url : 'getTCForClose.php',
            data: {
                update:true,
                close:rowdata.close,
                id:rowdata.id
                  },
            success : function(data){
                commit(true);
                $("tcRegister").jqxGrid('updatebounddata');
            },
            error : function(XMLHttpRequest, textStatus, errorThrown) 
            {alert (errorThrown);}
                }); 
     }
    };
    $("#tcRegister").jqxGrid({
        source: source,
        rtl:true,
         autorowheight: true,
        autoheight: true,
        editable: true, 
        showfilterrow: true,
        filterable: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ بدء الدورة',datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: ' عدد طلبات الالتحاق', datafield: 'counts',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },   
            { text: 'اغلاق الدورة', datafield: 'close',columntype: 'checkbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },  
        ]
    });
       $("#tcRegister").on('cellendedit', function (event) 
    {
        $("#tcRegister").jqxGrid('updatebounddata');
    });
        
});
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
