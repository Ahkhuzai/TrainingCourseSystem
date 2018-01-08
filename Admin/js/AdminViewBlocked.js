$(document).ready(function () {
    $("#back").jqxButton({ width: '15%', height: '35px'});
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'user_id',type: 'number' },
            { name: 'ar_name',type: 'string' },
            { name: 'major',type: 'string' },
            { name: 'department',type: 'string' },
            { name: 'rank',type: 'string' },
            { name: 'nationality',type: 'string' },
            { name: 'sid',type: 'number' },
            { name: 'status',type: 'string' },
            { name: 'reg_status',type: 'string' },
            { name: 'rid',type: 'number' },
            { name: 'missed',type: 'number' },
            { name: 'excused',type: 'number' },
            { name: 'attend',type: 'number' },
            { name: 'end_date' }
        ],
        id: 'id',
        url: "getBlockedTrainee.php",

                       };               
    var dataAdapter = new $.jqx.dataAdapter(source);
    $("#teList").jqxGrid({
        source: dataAdapter,
        rtl:true,
        autorowheight: true,
        width:'90%',
        autoheight: true,
        showfilterrow: true,
        filterable: true,
                                                            
        columns: [
            { text: 'اسم المتدرب',editable:false, datafield: 'ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الرتبة العلمية',editable:false,datafield: 'rank',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الكلية ',editable:false, datafield: 'department',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التخصص ',editable:false, datafield: 'major',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الجنسية ',editable:false, datafield: 'nationality',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة التسجيل',editable:false, datafield: 'reg_status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },            
            { text: 'الغياب',editable:false,width:'5%' ,datafield: 'missed',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: ' الاعتذار', editable:false,width:'5%',datafield: 'excused',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الحضور ', editable:false,width:'5%',datafield: 'attend',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ نهاية الحظر', editable:false,datafield: 'end_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
        ]
    });

});
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}