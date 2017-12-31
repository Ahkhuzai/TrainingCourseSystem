$(document).ready(function () {
    $("#back").jqxButton({ width: '15%', height: '35px', theme: 'office'});
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'pname',type: 'string' },
            { name: 'start_date' },
            { name: 'counts',type: 'number' },
            { name: 'rate',type: 'number' }],
        url: "getTrainerTC.php"
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
            { text: 'تاريخ انعقاد الدورة',datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد الحاضرين', datafield: 'counts',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'التقييم العام للدورة', datafield: 'rate',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
        ]
    });
         
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}