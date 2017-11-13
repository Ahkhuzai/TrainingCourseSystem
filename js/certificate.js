
$(document).ready(function () {

            var source =
            {
                datatype: 'json',
                url:'getRegister.php',
                datafields: [
                    {name: 'name', type: 'string'},
                    {name: 'trainee_id'},
                    {name: 'major'},
                    {name: 'rank'},
                    {name: 'department'},
                    {name: 'attended', type: 'string'},
                    {name: 'certificateApprove'}
                ]
            };


   
            $('#traineelist').jqxGrid(
                {
                    width: '90%',
                    height:'250px',
                    source: source,
                    rtl:true,
                    editable: true,
                    editmode: 'click',
                    selectionmode: 'singlecell',
                    theme:'office',
                    columns: [
                        { text: 'اعتماد الشهادة', datafield: 'certificateApprove', columntype: 'checkbox', width:'20%' ,renderer: columnsrenderer, cellsrenderer: cellsrenderer},
                        { text: "اسم المتدرب", datafield: "name"  ,width:'80%',renderer: columnsrenderer, cellsrenderer: cellsrenderer}                   
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