$(document).ready(function () {
    $("#back").jqxButton({ width: '15%', height: '35px'});
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'pname',type: 'string' },
            { name: 'tr_ar_name',type: 'string' },
            { name: 'status',type: 'string' },
            { name: 'sid',type: 'number' },
            { name: 'start_date' },
            { name: 'counts',type: 'number' }],
        url: "getTCView.php",
        pager: function (pagenum, pagesize, oldpagenum) {
                    // callback called when a page or page size is changed.
                }
    };
    $("#tcList").jqxGrid({
        source: source,
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        sortable: true,
        pageable: true,

        width:'75%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'اسم البرنامج', datafield: 'pname',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الدورة', datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ بدء الدورة',datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد الحاضرين/المسجلين', datafield: 'counts',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
        ]
    });
        $("#tcList").on('rowselect', function (event) {
        var tt_id = event.args.row.id; 
        var sid = event.args.row.sid;
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_id :tt_id,
            sid :sid,
            page: 'Admin_tcView'
              },
        success : function(data){
          ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert (textStatus);}
            });       
        var url="Single_Admin_tcView.php";
        window.location=url;     
        });           
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}