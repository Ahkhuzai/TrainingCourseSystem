$(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'hours',type: 'string' },
            { name: 'counts',type: 'string' },
            
        ],
        url: "getProgramView.php",
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
            { text: 'عدد ساعات البرنامج', datafield: 'hours',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
            { text: 'عدد الدورات', datafield: 'counts',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer},   
      
        ]
    });
        $("#ProrgamList").on('rowselect', function (event) {
        var p_id = event.args.row.id; 
        
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            p_id :p_id,
          
            page: 'Admin_ProgramView'
              },
        success : function(data){
          ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert (textStatus);}
            });       
        var url="Single_Admin_ProgramView.php";
        window.location=url;     
        });           
});
        var cellsrenderer = function (row, column, value) {
            return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
    var columnsrenderer = function (value) {
        return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}