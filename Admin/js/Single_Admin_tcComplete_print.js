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
            { name: 'asid',type: 'number' },
            { name: 'attendance_status',type: 'string' },
            { name: 'certificate' },
            { name: 'certificate_status',type:'string' },
            { name: 'rid',type: 'number' }
             ],
        id: 'id',
        url: "getTCCompleteRegister.php",
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
            { text: 'حالة الطلب', editable:false,datafield: 'attendance_status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الشهادة', editable:false,datafield: 'certificate_status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            ]
    });
    
     $("#tcRegisterTrainee").on('rowselect', function (event) {
        var r_id = event.args.row.rid; 
        var certificate=event.args.row.certificate; 
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            r_id :r_id,
            page: 'Certificate_print'
              },
        success : function(data){
        
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            }); 
        if(certificate==1){
        var url="printCertificate.php";
        window.location=url; }
        else
            alert('لم يتم اعتماد الشهادة بعد');
        }); 
});

var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
