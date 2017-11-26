    $(document).ready(function () {
            $('#tabs').jqxTabs({ width:'75%', height: 200, position: 'top', theme:'office', rtl:'true'});     
        });
        
    $(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'hours',type: 'number' }],
        url: "getProgram.php"
    };
    $("#AvailableProgram").jqxGrid({
        source: source,
        theme: 'office',
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم البرنامج', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: ' عدد الساعات الكلية للبرنامج', datafield: 'hours',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },        
        ]
    });
        $("#AvailableProgram").on('rowselect', function (event) {
        var PID = event.args.row.id;   
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            program_id :PID,
            page: 'SingleProgram'
              },
        success : function(data){
           alert(PID);
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="SingleProgram.php";
        window.location=url;     
        });              
});


    $(document).ready(function () {
      var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'start_date'}],
        url: "getPrevTc.php"
    };
    $("#AvailableTC").jqxGrid({
        source: source,
        theme: 'office',
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        width:'75%',                                                         
        columns: [
            { text: 'اسم الدورة', datafield: 'name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'مقدم الدورة', datafield: '',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ الدورة ', datafield: 'start_date',cellsformat: 'dd.MM.yyyy',filtertype: 'range',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'الزمان ', datafield: 'id',cellsformat: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
            { text: 'المكان ', datafield: 'id',cellsformat: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'العدد ', datafield: 'id',cellsformat: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }, 
             
        ]
    });
        $("#AvailableTC").on('rowselect', function (event) {
        var TCID = event.args.row.id;   
        $.ajax({
        type : 'GET',
        url : 'setPrevVariable.php',
        data: {
            ttid :TCID
              },
        success : function(data){
           ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="oldSingleTC.php";
        window.location=url;     
        }); 
});
   
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
