
$(document).ready(function () {
            var data={};
            var source =
            {
                
                datatype: 'json',
                url:'getRegister.php',
                datafields: [
                    {name: 'name', type: 'string'},
                    {name: 'usr_id'},
                    {name: 'id'},
                    {name: 'registration_status'},
                    {name: 'tt_id'},
                    {name: 'certificateApprove'}
                ],
                id: 'id',
                url:'getRegister.php',
                updaterow: function (rowid, rowdata, commit) {
                    // synchronize with the server - send update command
                    
                    var data = "update=true&certificate_approved=" + rowdata.certificateApprove+ "&id=" + rowdata.id;
                    
                    $.ajax({
                    
                        dataType: 'json',
                        url: 'getRegister.php',
                        data: data,
                        success: function (data, status, xhr) {
                            commit(true);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                                alert(errorThrown);
                            commit(false);
                        }
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
    $("#approve").jqxButton({ width: '120px', height: '35px', theme: 'office'});
     $("#back").jqxButton({ width: '120px', height: '35px', theme: 'office'});
});