
$(document).ready(function () {
            var data={};
            var source =
            {
                
                datatype: 'json',
               
                datafields: [
                    {name: 'name', type: 'string'},
                    {name: 'usr_id'},
                    {name: 'id'},
                    {name: 'registration_status'},
                    {name: 'tt_id'},
                    {name: 'certificateApprove'}
                ],
                id: 'id',
                url:'getTrainee.php',
                updaterow: function (rowid, rowdata, commit) {
                    // synchronize with the server - send update command                   
                    $.ajax({
                        type : 'GET',
                        url : 'getTrainee.php',
                        data: {
                            update:true,
                            certificate_approved: + rowdata.certificateApprove,
                            id:rowdata.id
                              },
                        success : function(data){
                         commit(true);
                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown) 
                        {alert (errorThrown);}
                            }); 
                   
                    }
            };
            
            $('#traineelist').jqxGrid(
                {
                    width: '90%',
                    height:'250px',
                    source: source,
                    rtl:true,
                    editable: true,
                   
                     selectionmode: 'singlecell',
                    theme:'office',
                    columns: [
                        { text: 'اعتماد الشهادة', datafield: 'certificateApprove', columntype: 'checkbox', width:'20%' ,renderer: columnsrenderer, cellsrenderer: cellsrenderer},
                        { text: "اسم المتدرب", datafield: "name"  ,editable:false,width:'80%',renderer: columnsrenderer, cellsrenderer: cellsrenderer}                   
                    ]
                }
            );
    
        });
        var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}

$(document).ready(function () {
    $("#back").jqxButton({ width: '120px', height: '35px', theme: 'office'});
});