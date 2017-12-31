$(document).ready(function () {

    $("#back").jqxButton({ width: '10%', height: '35px', theme: 'office'});
    });
    $(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'user_id',type: 'number' },
            { name: 'ar_name',type: 'string' },
            { name: 'major',type: 'string' },
            { name: 'department',type: 'string' },
            { name: 'rank',type: 'string' },
            { name: 'sid',type: 'number' },
            { name: 'status',type: 'string' },
            { name: 'certificate' },
            { name: 'certificate_status',type:'string' },
            { name: 'rid',type: 'number' }
             ],
        id: 'id',
        url: "getTCCompleteRegister.php",
          updaterow: function (rowid, rowdata, commit) { 
                var cer_status= rowdata.certificate==true ? 1 : 0;
                    $.ajax({
                        type : 'GET',
                        url : 'getTCCompleteRegister.php',
                        data: {
                            update:true,
                            rid:rowdata.rid,
                            certificate:cer_status
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
    var dataAdapter = new $.jqx.dataAdapter(source);
    $("#tcRegisterTrainee").jqxGrid({
        source: dataAdapter,
        theme: 'office',
        rtl:true,
        autorowheight: true,
        autoheight: true,
        editable: true, 
        showfilterrow: true,
        filterable: true,        
        width:'75%',                                                         
        columns: [
            { text: 'اسم المتدرب',editable:false, datafield: 'ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الرتبة العلمية',editable:false,datafield: 'rank',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التخصص العام',editable:false,datafield: 'major',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الكلية التابع لها',editable:false, datafield: 'department',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الطلب', editable:false,datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الشهادة', editable:false,datafield: 'certificate_status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'اعتماد الشهادة', editable:true,datafield: 'certificate',columntype: 'checkbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            ]
    });
     $("#tcRegisterTrainee").on('cellendedit', function (event) 
    {
        $("#tcRegisterTrainee").jqxGrid('updatebounddata');
    });
});

var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
