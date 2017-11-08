
$(document).ready(function () {
            var initialData = [
                { 'name' : "احلام الخزاعي", 'attended':'حاضر', 'certificateApprove': true },
                { 'name' : "احلام", 'attended':'حاضر', 'certificateApprove': true },
                { 'name' : "احلام حسن", 'attended':'غائب', 'certificateApprove': false },
                { 'name' : "احلام حسن الخزاعي", 'attended':'معتذر', 'certificateApprove': false }            
            ];

            var source1 =
            {
                datatype: 'json',
                localdata: initialData,
                datafields: [
                    {name: 'name', type: 'string'},
                    {name: 'attended', type: 'string'},
                    {name: 'certificateApprove', type: 'bool'}
                ]
            };


            var dataAdapter = new $.jqx.dataAdapter(source1);
            $('#traineelist').jqxGrid(
                {
                    width: '90%',
                    height:'250px',
                    source: dataAdapter,
                    rtl:true,
                    theme:'office',
                    columns: [
                        { text: 'اعتماد الشهادة', datafield: 'certificateApprove', columntype: 'checkbox', width:'20%' ,renderer: columnsrenderer, cellsrenderer: cellsrenderer},
                        { text: "اسم المتدرب", datafield: "name"  ,width:'60%',renderer: columnsrenderer, cellsrenderer: cellsrenderer},
                        { text: "حالة الحضور", datafield: "attended" , width:'20%',renderer: columnsrenderer, cellsrenderer: cellsrenderer}
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