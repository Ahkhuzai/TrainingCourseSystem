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
             { name: 'close' },
            { name: 'counts',type: 'number' }],
        url: "getTCClose.php",
        updaterow: function (rowid, rowdata, commit) { 
                var close= rowdata.close==true ? 1 : 0;
                    $.ajax({
                        type : 'GET',
                        url : 'getTCClose.php',
                        data: {
                            update:true,
                            id:rowdata.id,
                            close:close
                            },
                        success : function(data){
                            commit(true);
                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown) 
                        {
                            alert (errorThrown);
                        }
                    }); 
            }
    };
    $("#tcList").jqxGrid({
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
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الدورة', datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ بدء الدورة',datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد الحاضرين/المسجلين', datafield: 'counts',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'اتمام الدورة', datafield: 'close',columntype: 'checkbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },  
        ]
    });
    
    $("#tcList").on('cellendedit', function (event) 
    {
        $("#tcList").jqxGrid('updatebounddata');
    });
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}