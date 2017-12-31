$(document).ready(function () {
    $("#back").jqxButton({ width: '15%', height: '35px'});
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'user_id',type: 'number' },
            { name: 'ar_name',type: 'string' },
            { name: 'department',type: 'string' },
            { name: 'major',type: 'string' },
            { name: 'total_rate',type: 'number' },
            { name: 'tc_counts',type: 'number' }],
        url: "getTrainer.php"
    };
    $("#trList").jqxGrid({
        source: source,
  
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم المدرب', datafield: 'ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الكلية التابع لها', datafield: 'department',columntype: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التخصص', datafield: 'major',columntype: 'textbox',filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التقييم العام للمدرب', datafield: 'totalRate',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد الدورات المقدمة',datafield: 'tcCounts',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }
            ]
    });
        $("#trList").on('rowselect', function (event) {
        var tr_id = event.args.row.user_id; 
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tr_id :tr_id,
            page: 'Admin_trView'
              },
        success : function(data){
          ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="Single_Admin_Trainer.php";
        window.location=url;     
        });           
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}