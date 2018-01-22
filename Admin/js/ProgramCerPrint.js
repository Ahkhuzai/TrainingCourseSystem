$(document).ready(function () {
    $("#back").jqxButton({ width: '10%', height: '35px'});
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
            { name: 'nationality',type: 'string' },
            { name: 'missed',type: 'number' },
            { name: 'excused',type: 'number' }],
        id:'id',
        url: "getProgramAtten.php",
                       };
                       
    var dataAdapter = new $.jqx.dataAdapter(source);
    $("#tcTraineeRegister").jqxGrid({
        source: dataAdapter,
        rtl:true,
        autorowheight: true,
        autoheight: true,

        width:'100%',                                                         
        columns: [
            { text: 'اسم المتدرب',editable:false, datafield: 'ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الرتبة العلمية',editable:false,datafield: 'rank',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التخصص العام',editable:false,datafield: 'major',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الكلية التابع لها',editable:false, datafield: 'department',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: '  الجنسية',editable:false, datafield: 'nationality',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد مرات الغياب',editable:false, datafield: 'missed',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد مرات الاعتذار', editable:false,datafield: 'excused',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            ]
    });
    
    
    $("#tcTraineeRegister").on('rowselect', function (event) {
     
        var user_id=event.args.row.user_id; 
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            trainee:user_id,
            page: 'Certificate_print_program'
              },
        success : function(data){
        alert(data);
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            }); 
      
        var url="SingleProgramCerPrint.php";
        window.location=url; 
       
        });     
});

        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
} 