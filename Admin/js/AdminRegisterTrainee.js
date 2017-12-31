$(document).ready(function () {
    $("#trainee").jqxInput({placeHolder: "رقم المنسوب", height: 25, width: 230, minLength: 1,  theme: 'office',rtl:true });

    $("#back").jqxButton({ width: '10%', height: '35px', theme: 'office'});
    $("#search").jqxButton({ width: '10%', height: '35px', theme: 'office'});
});

$(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'pname',type: 'string' },
            { name: 'tr_ar_name',type: 'string' },
            { name: 'status',type: 'string' },
            { name: 'sid',type: 'number' },
            { name: 'start_date' },
            { name: 'boolRegister' }],
        url: "getTCAvailableForTrainee.php",
        
         updaterow: function (rowid, rowdata, commit) {               
            $.ajax({
                type : 'GET',
                url : 'getTCAvailableForTrainee.php',
                data: {
                    update:true,
                    id:rowdata.id
                      },
                success : function(data){
                    commit(true);
                    $("TraineeTC").jqxGrid('updatebounddata');
                },
                error : function(XMLHttpRequest, textStatus, errorThrown) 
                {alert (errorThrown);}
                    }); 

            }
                       };
    $("#TraineeTC").jqxGrid({
        source: source,
        theme: 'office',
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        editable: true,           
        selectionmode: 'singlecell',
        width:'75%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الدورة', datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ بدء الدورة',datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التسجيل', datafield: 'boolRegister',columntype: 'checkbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },   
        ]
    });   
    $("#TraineeTC").on('cellendedit', function (event) 
    {
        $("#TraineeTC").jqxGrid('updatebounddata');
        alert("تم تسجيل المتدرب في الدورة بنجاح");
    });
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}