$(document).ready(function () {
    $("#create").jqxButton({ width: '15%', height: '35px'});
    $("#ids").jqxInput({rtl:true });
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'pname',type: 'string' },
            { name: 'tr_ar_name',type: 'string' },
            { name: 'status',type: 'string' },
            { name: 'sid',type: 'number' },
            { name: 'start_date' },
            {name:'select'},
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
        editable:true,
        showstatusbar: true,
        selectionmode: 'multiplecellsextended',
        width:'100%',
        showaggregates: true,
               
        columns: [
            { text: 'اختيار', datafield: 'select',columntype: 'checkbox', filtertype: 'bool'},
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer,  aggregates: ['count']
      },
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الدورة', datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ بدء الدورة',datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد الحاضرين/المسجلين', datafield: 'counts',columntype: 'input', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer,aggregates: ['sum'] },   
        ]
    }); 
    
    $('#create').click(function () {
    var rows = $('#tcCompleteList').jqxGrid('getrows');
    var result = "";
    for(var i = 0; i < rows.length; i++)
    {
        var row = rows[i];
        if(row.select==true)
          result += row.id +"-";        
    }
     $("#ids").val(result);
 });
    
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}


