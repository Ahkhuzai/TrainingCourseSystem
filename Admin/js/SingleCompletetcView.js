$(document).ready(function () {
    $("#print").jqxButton({ width: '10%', height: '35px'});
    $("#back").jqxButton({ width: '10%', height: '35px'});
    $("#comments").jqxExpander({ width: '75%',  rtl: true,expanded: false});
    });
    $(document).ready(function () {
    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'user_id',type: 'number' },
            { name: 'ar_name',type: 'string' },
            { name: 'major',type: 'string' },
            { name: 'department',type: 'string' },
            { name: 'rank',type: 'string' },
            { name: 'nationality',type: 'string' },
            { name: 'sid',type: 'number' },
            { name: 'status',type: 'string' },
            { name: 'rid',type: 'number' },
            { name: 'missed',type: 'number' },
            { name: 'excused',type: 'number' }],
        id: 'id',
        url: "getTCAttenTrainee.php",
                       };
                       
    var dataAdapter = new $.jqx.dataAdapter(source);
    $("#tcRegisterTrainee").jqxGrid({
        source: dataAdapter,
        rtl:true,
        autorowheight: true,
        autoheight: true,

        width:'75%',                                                         
        columns: [
            { text: 'اسم المتدرب',editable:false, datafield: 'ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الرتبة العلمية',editable:false,datafield: 'rank',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التخصص العام',editable:false,datafield: 'major',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الكلية التابع لها',editable:false, datafield: 'department',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: '  الجنسية',editable:false, datafield: 'nationality',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد مرات الغياب',editable:false, datafield: 'missed',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد مرات الاعتذار', editable:false,datafield: 'excused',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الحضور', editable:false,datafield: 'status',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            ]
    });
});

var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
$(document).ready(function () {
            var source =
		{
                    datatype: "json",
                    datafields: [
                    { name: 'criteria'},
                    { name: 'score'}
                    ],
		url: "getSingleRate.php"
		};
	   var dataAdapter = new $.jqx.dataAdapter(source,
		{
			autoBind: true,
			async: false,
			downloadComplete: function () { },
			loadComplete: function () { },
			loadError: function () { }
		});

            // prepare jqxChart settings
            var settings = {
                title: $('#nameOfTC').text(),
                description: "معدل رضى المستفيدين عن الدورة التدريبية",
                
		enableAnimations: true,
                showLegend: true,
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: dataAdapter,
                xAxis:
                    {
                        dataField: 'criteria',
                        showGridLines: true
                    },
                colorScheme: 'scheme13',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 50,
                            seriesGapPercent: 0,
                            valueAxis:
                            {
                                unitInterval: 5,
                                minValue: 0,
                                maxValue:100,
                                displayValueAxis: true,
                                description: 'متوسط الدرجة المستحقة',
                                axisSize: 'auto',
                                tickMarksColor: '#888888'
                            },
                            series: [
                                    { dataField: 'score', displayText: 'الدرجة',labels:
                                    {
                                        visible: true
                                    }}
                                ]
                        }
                    ]
            };
           
            // setup the chart
            $('#jqxChart').jqxChart(settings);
            
        });
        