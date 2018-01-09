$(document).ready(function () {
    $("#close").jqxButton({ width: '120px', height: '35px'});
    
    $("#back").jqxButton({ width: '120px', height: '35px'});
    });
    

//table 
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
            { name: 'boolstatus' },
            { name: 'boolstatus_reject' },
            { name: 'rid',type: 'number' },
            { name: 'missed',type: 'number' },
            { name: 'excused',type: 'number' }],
        id: 'id',
        url: "getTCRegisterTrainee.php",
 
    updaterow: function (rowid, rowdata, commit) {               
                    $.ajax({
                        type : 'GET',
                        url : 'getTCRegisterTrainee.php',
                        data: {
                            update:true,
                            boolstatus:rowdata.boolstatus,
                            boolstatusReject:rowdata.boolstatus_reject,
                            rid:rowdata.rid
                              },
                        success : function(data){
                            commit(true);
                            $("tcRegisterTrainee").jqxGrid('updatebounddata');
                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown) 
                        {alert (errorThrown);}
                            }); 
                   
                    }
    };
                       
    var dataAdapter = new $.jqx.dataAdapter(source);
    $("#tcRegisterTrainee").jqxGrid({
        source: dataAdapter,
        rtl:true,
        autorowheight: true,
        autoheight: true,
        editable: true,           
        selectionmode: 'singlecell',
        width:'75%',                                                         
        columns: [
            { text: 'اسم المتدرب',editable:false, datafield: 'ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الرتبة العلمية',editable:false,datafield: 'rank',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التخصص العام',editable:false,datafield: 'major',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الكلية التابع لها',editable:false, datafield: 'department',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد مرات الغياب',editable:false, datafield: 'missed',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد مرات الاعتذار', editable:false,datafield: 'excused',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الطلب', editable:false,datafield: 'status',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'قبول الطلب',datafield: 'boolstatus',columntype:'checkbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'رفض الطلب',datafield: 'boolstatus_reject',columntype:'checkbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer }
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