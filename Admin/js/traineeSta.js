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
                   
                    '<br><br><br><br><br><br><h3>قائمة المتدربين  </h3> \n' + gridContent +
                    '<br><br><br><br><br><br><h3>معدل المتدربين حسب الرتبة العلمية</h3>\n' + contentRank +
                    '<br><br><br><br><br><br><br><h3>معدل المتدربين من الجنسين</h3>\n' + contentGrnder +
                    '<br><br><br><br><br><br><h3>معدل المتدريبن حسب الكلية </h3>\n' + contentDepartment +
                   
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
            { name: 'major',type: 'string' },
            { name: 'department',type: 'string' },
            { name: 'rank',type: 'string' },
            { name: 'nationality',type: 'string' },
            { name: 'sid',type: 'number' },
            { name: 'status',type: 'string' },
            { name: 'reg_status',type: 'string' },
            { name: 'rid',type: 'number' },
            { name: 'missed',type: 'number' },
            { name: 'excused',type: 'number' },
            { name: 'attend',type: 'number' },
            { name: 'request',type: 'number' }],
        id: 'id',
        url: "getStatistic.php?type=1",

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
            { text: 'اسم المتدرب',editable:false, datafield: 'ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الرتبة العلمية',editable:false,datafield: 'rank',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الكلية ',editable:false, datafield: 'department',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'التخصص ',editable:false, datafield: 'major',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الجنسية ',editable:false, datafield: 'nationality',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة التسجيل',editable:false, datafield: 'reg_status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },            
            { text: 'الغياب',editable:false,width:'5%' ,datafield: 'missed',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: ' الاعتذار', editable:false,width:'5%',datafield: 'excused',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'الحضور ', editable:false,width:'5%',datafield: 'attend',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: ' تحت الدراسة ', editable:false,width:'9%',datafield: 'request',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },   
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
                url: 'getGender.php?type=1'
            };
            var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error); } });
            // prepare jqxChart settings
            var settings = {
                title: $('#nameOfTC').text(),
                description: "معدل المتدربين من الجنسين ",
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
                url: 'getRank.php?type=1'
            };
            var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error); } });
            // prepare jqxChart settings
            var settings = {
                title: $('#nameOfTC').text(),
                description: "معدل المتدربين حسب الرتبة العلمية ",
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
		url: "getDepartment.php?type=1"
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
                description: "معدل المتدريبن حسب الكلية",
                
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
                                description: 'عدد الحاضرين',
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