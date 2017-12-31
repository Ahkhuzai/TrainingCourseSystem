       
    $(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'tr_ar_name',type: 'string' },
            { name: 'start_at' },
             { name: 'duration' },
            { name: 'start_date' },
            { name: 'location',type: 'string' },
            { name: 'capacity',type: 'string' },
        ],
        url: "getProgramTC.php"
    };
    $("#prog_tc").jqxGrid({
        source: source,
        theme: 'office',
        rtl:true,
        autorowheight: true,
        autoheight: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },  
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ الدورة ', datafield: 'start_date',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'الزمان ', datafield: 'start_at',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'المدة ', datafield: 'duration',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'المكان ', datafield: 'location',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'العدد ', datafield: 'capacity',cellsformat: 'textbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },       
        ]
    });      
});

var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}

  $(document).ready(function () {
    $("#register").jqxButton({ width: '120px', height: '35px', theme: 'office'});
    $("#back").jqxButton({ width: '120px', height: '35px', theme: 'office'});
        });