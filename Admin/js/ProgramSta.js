$(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'hours',type: 'string' },
            { name: 'ttids',type: 'string' },
            { name: 'status',type: 'string' },
            { name: 'psid',type: 'number' },
            { name: 'start_date' },
            { name: 'end_date' },
            
        ],
        url: "getProgramSta.php",
        pager: function (pagenum, pagesize, oldpagenum) {
                    // callback called when a page or page size is changed.
        }
    };
    $("#ProrgamList").jqxGrid({
        source: source,
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        sortable: true,
        pageable: true,
        showstatusbar: true,
        width:'100%',
        showaggregates: true,
                                                     
        columns: [
            { text: 'اسم البرنامج', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer , aggregates: ['count']},
             { text: 'حالة البرنامج', datafield: 'status',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
            { text: 'عدد ساعات البرنامج', datafield: 'hours',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
            { text: 'تاريخ البداية', datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
            { text: 'تاريخ النهاية', datafield: 'end_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
      
        ]
    });
        $("#ProrgamList").on('rowselect', function (event) {
        var tt_ids = event.args.row.ttids; 
        var p_id = event.args.row.id; 
        var psid = event.args.row.psid; 
        
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_ids :tt_ids,
            p_id :p_id,
            psid :psid, 
            page: 'Admin_ProgramSta'
              },
        success : function(data){
         ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert (textStatus);}
            });       
        var url="Single_Admin_ProgramSta.php";
        window.location=url;     
        });           
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}