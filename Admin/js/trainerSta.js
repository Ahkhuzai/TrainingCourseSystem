$(document).ready(function () {
    $("#print").jqxButton({ width: '10%', height: '35px'});
    $("#print").click(function () { 
                var gridContent = $("#teList").jqxGrid('exportdata', 'html');
                var contentRank = $('#chartRank')[0].outerHTML;
                var contentGrnder = $('#chartGender')[0].outerHTML;
                var contentDepartment = $('#chartDepartment')[0].outerHTML;
                var newWindow = window.open('', ''),
                document = newWindow.document.open(),
                pageContent =
                    '<!DOCTYPE html>\n' +
                    '<html>\n' +
                    '<head>\n' +
                    '<meta charset="utf-8" />\n' +
                    '<title>Complete Tc</title>\n' +
                    '</head>\n' +
                   
                    '<br><br><br><br><br><br><h3>قائمة المدربين  </h3> \n' + gridContent +
                    '<br><br><br><br><br><br><h3>معدل المدربين حسب الرتبة العلمية</h3>\n' + contentRank +
                    '<br><br><br><br><br><br><br><h3>معدل المدربين من الجنسين</h3>\n' + contentGrnder +
                    '<br><br><br><br><br><br><h3>معدل المدريبن حسب الكلية </h3>\n' + contentDepartment +
                   
                    '</center></body>\n</html>';
            
                document.write(pageContent);
                document.close();
                newWindow.print();
            });
            

       var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'user_id',type: 'number' },
            { name: 'ar_name',type: 'string' },
            { name: 'department',type: 'string' },
            { name: 'major',type: 'string' },
            { name: 'total_rate',type: 'number' },
            { name: 'tc_counts',type: 'number' }],
        url: "getStatistic.php?type=2",

         };               
    var dataAdapter = new $.jqx.dataAdapter(source);
    $("#teList").jqxGrid({
        source: dataAdapter,
        rtl:true,
        autorowheight: true,
        width:'90%',
        autoheight: true,
        showfilterrow: true,
        filterable: true,
     columns: [
            { text: 'اسم المدرب', datafield: 'ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الكلية التابع لها', datafield: 'department',columntype: 'textbox',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التخصص', datafield: 'major',columntype: 'textbox',filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التقييم العام للمدرب', datafield: 'total_rate',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'عدد الدورات المقدمة',datafield: 'tc_counts',filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer }
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
            // prepare chart data as an array
            var source =
            {
                datatype: "json",
                datafields: [
                    { name: 'Gender' },
                    { name: 'Total' }
                ],
                url: 'getGender.php?type=2'
            };
            var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error); } });
            // prepare jqxChart settings
            var settings = {
                title: $('#nameOfTC').text(),
                description: "معدل المدربين من الجنسين ",
                enableAnimations: true,
                showLegend: true,
                showBorderLine: true,
                legendLayout: { left: 700, top: 160, width: 300, height: 200, flow: 'vertical' },
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 0, top: 0, right: 0, bottom: 10 },
                source: dataAdapter,
                colorScheme: 'scheme03',
                seriesGroups:
                    [
                        {
                            type: 'pie',
                            showLabels: true,
                            series:
                                [
                                    { 
                                        dataField: 'Total',
                                        displayText: 'Gender',
                                        labelRadius: 170,
                                        initialAngle: 15,
                                        radius: 145,
                                        centerOffset: 0,
                                        formatFunction: function (value) {
                                            if (isNaN(value))
                                                return value;
                                            return parseFloat(value) + '%';
                                        },
                                    }
                                ]
                        }
                    ]
            };
            
            // setup the chart
            $('#chartGender').jqxChart(settings);
        });
        
               $(document).ready(function () {
            // prepare chart data as an array
            var source =
            {
                datatype: "json",
                datafields: [
                    { name: 'Rank' },
                    { name: 'Total' }
                ],
                url: 'getRank.php?type=2'
            };
            var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error); } });
            // prepare jqxChart settings
            var settings = {
                title: $('#nameOfTC').text(),
                description: "معدل المدربين حسب الرتبة العلمية ",
                enableAnimations: true,
                showLegend: true,
                showBorderLine: true,
                legendLayout: { left: 700, top: 160, width: 300, height: 200, flow: 'vertical' },
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 0, top: 0, right: 0, bottom: 10 },
                source: dataAdapter,
                colorScheme: 'scheme03',
                seriesGroups:
                    [
                        {
                            type: 'pie',
                            showLabels: true,
                            series:
                                [
                                    { 
                                        dataField: 'Total',
                                        displayText: 'Rank',
                                        labelRadius: 170,
                                        initialAngle: 15,
                                        radius: 145,
                                        centerOffset: 0,
                                        formatFunction: function (value) {
                                            if (isNaN(value))
                                                return value;
                                            return parseFloat(value)+ '%';
                                        },
                                    }
                                ]
                        }
                    ]
            };
            
            // setup the chart
            $('#chartRank').jqxChart(settings);
        });
$(document).ready(function () {
            var source =
		{
                    datatype: "json",
                    datafields: [
                    { name: 'department'},
                    { name: 'total'}
                    ],
		url: "getDepartment.php?type=2"
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
                description: "معدل المدريبن حسب الكلية",
                
		enableAnimations: true,
                showLegend: true,
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: dataAdapter,
                xAxis:
                    {
                        dataField: 'department',
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
                                unitInterval: 10,
                                showGridLines: false,
                                minValue: 0,
                                maxValue:100,
                                displayValueAxis: true,
                                description: 'عدد المدربين',
                                axisSize: 'auto',
                                tickMarksColor: '#888888'
                            },
                            series: [
                                    { dataField: 'total', displayText: 'العدد',labels:
                                    {
                                        visible: true
                                    }}
                                ]
                        }
                    ]
            };
            // setup the chart
            $('#chartDepartment').jqxChart(settings);
            
        });     