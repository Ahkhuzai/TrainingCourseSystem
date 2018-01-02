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
            { name: 'request',type: 'number' }],
        id: 'id',
        url: "getTrainee.php",

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
            { text: ' تحت الدراسة ', editable:false,width:'9%',datafield: 'request',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },   
        ]
    });
    
    $("#teList").on('rowselect', function (event) {
        var te_id = event.args.row.id; 
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            te_id :te_id,
            page: 'Admin_teView'
              },
        success : function(data){
            ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="Single_Admin_Trainee.php";
        window.location=url;     
        });
});
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}