
$(document).ready(function () {
            var source1 =
            {
                datatype: 'json',
                datafields: [
                    {name: 'name', type: 'string'},
                    {name: 'major', type: 'string'},
                    {name: 'rank', type: 'string'},
                    {name: 'department', type: 'string'}
                ],
                url: 'getTrainee.php'
            };
            $('#traineelist').jqxGrid(
                {
                    width: '90%',
                   
                    source: source1,
                    rtl:true,
                    showfilterrow: true,
                    filterable: true,
                    autorowheight: true,
                    autoheight: true,
                    theme:'office',
                    columns: [
                        { text: 'اسم المتدرب', datafield: 'name', columntype: 'text' ,renderer: columnsrenderer, cellsrenderer: cellsrenderer},
                        { text: "التخصص", datafield: "major" ,filtertype: 'checkedlist'  ,renderer: columnsrenderer, cellsrenderer: cellsrenderer},
                        { text: "الرتبة العلمية",filtertype: 'checkedlist', datafield: "rank",renderer: columnsrenderer, cellsrenderer: cellsrenderer},
                         { text: "الكلية التابع لها", datafield: "department" ,renderer: columnsrenderer, cellsrenderer: cellsrenderer} 
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
    $("#print").jqxButton({ width: '120px', height: '35px', theme: 'office'});
    $("#back").jqxButton({ width: '120px', height: '35px', theme: 'office'});
    $("#print").click(function () {
                var gridContent = $("#traineelist").jqxGrid('exportdata', 'html');
                var newWindow = window.open('', '', 'width=800, height=500'),
                document = newWindow.document.open(),
                pageContent =
                    '<!DOCTYPE html>\n' +
                    '<html>\n' +
                    '<head>\n' +
                    '<meta charset="utf-8" />\n' +
                    '<title>dtm</title>\n' +
                    '</head>\n' +
                    '<body>\n' + gridContent + '\n</body>\n</html>';
                document.write(pageContent);
                document.close();
                newWindow.print();
            });

});