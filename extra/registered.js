
$(document).ready(function () {
            var initialData = [
                { 'name' : "احلام الخزاعي", 'major':'لغة عربية', 'rank': 'دكتور' , 'department': 'كلية اللغة العربية'},
                { 'name' : "احلام", 'major':'كيمياء عضوية', 'rank': "استاذ مساعد", 'department': 'كلية العلوم التطبيقية' },
                { 'name' : "احلام حسن", 'major':'أحياء دقيقة', 'rank': "محاضر", 'department': 'كلية العلوم التطبيقية' },
                { 'name' : "احلام حسن الخزاعي", 'major':'حاسب آلي', 'rank': "استاذ مشارك", 'department': 'كلية الحاسب الآلي ونظم المعلومات' }            
            ];

            var source1 =
            {
                datatype: 'json',
                localdata: initialData,
                datafields: [
                    {name: 'name', type: 'string'},
                    {name: 'major', type: 'string'},
                    {name: 'rank', type: 'string'},
                    {name: 'department', type: 'string'}
                ]
            };


            var dataAdapter = new $.jqx.dataAdapter(source1);
            $('#traineelist').jqxGrid(
                {
                    width: '90%',
                   
                    source: dataAdapter,
                    rtl:true,
                    showfilterrow: true,
                    filterable: true,
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
});