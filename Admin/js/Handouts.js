/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'name',type: 'string' },
            { name: 'status' },
            { name: 'ar_name',type: 'string' }],
        url: "getAllHandouts.php"
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
            { text: 'مقدم الحقيبة التدريبية', datafield: 'ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الحقيبة التدريبية', datafield: 'status',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            
              
        ]
    });
        $("#hoRequest").on('rowselect', function (event) {
        var RID = event.args.row.id;   
        $.ajax({
        type : 'GET',
        url : 'setSession.php',
        data: {
            ho_Req_id :RID,
            page: 'Admin_hoRequest'
              },
        success : function(data){
          ;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert ("Error Occured");}
            });       
        var url="Single_Admin_handouts.php";
        window.location=url;     
        });              
});
var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
