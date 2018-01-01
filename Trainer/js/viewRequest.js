    $(document).ready(function () {
            $('#tabs').jqxTabs({ width:'75%',height:600, position: 'top', theme:'office', rtl:'true'});     
        });
////////////////////////
//Tab2
$(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'add_date' },
            { name: 'sid' },
            { name: 'status',type: 'string' }],
        url: "getTCRequestOfTrainer.php"
    };
    $("#tcRequest").jqxGrid({
        source: source,
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الطلب', datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ تقديم الطلب',datafield: 'add_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer }
              
        ]
    });
    $("#tcRequest").on('rowselect', function (event) {
        var TCID = event.args.row.id;
        var StatusID=event.args.row.sid;
      
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            tt_id :TCID,
            sid:StatusID,
            page:'SingleTCRequest',
              },
        success : function(data){
           ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="SingleTCRequest.php";
        window.location=url;     
        });
    
});

///////////////////////
//Tab3
$(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'sid',type: 'number' },
            { name: 'add_date' },
            { name: 'status',type: 'string' }],
        url: "getHORequestOfTrainer.php"
    };
    $("#hoRequest").jqxGrid({
        source: source,
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الطلب', datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ تقديم الطلب',datafield: 'add_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer }
        ]
    });
    
    $("#hoRequest").on('rowselect', function (event) {
        var ho = event.args.row.id;
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            ho_id :ho,
            page:'SingleHORequest'
              },
        success : function(data){
           ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });    
        var url="SingleHORequest.php";
        window.location=url;     
        });
    
});
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
