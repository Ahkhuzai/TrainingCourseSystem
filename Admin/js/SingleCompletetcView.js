$(document).ready(function () {
    $("#print").jqxButton({ width: '10%', height: '35px'});
    $("#print").click(function () {
                var contents = $("#pr_content").html();
                var gridContent = $("#tcRegisterTrainee").jqxGrid('exportdata', 'html');
                var contentRate = $('#jqxChart')[0].outerHTML;
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
                    '<body><center>'+ contents+
                    '<br><br><br><br><br><br><h3>قائمة المسجلين في الدورة </h3> \n' + gridContent +
                    '<br><br><br><br><br><br><h3>معدل الحضور حسب الرتبة العلميةفي الدورة التدريبية</h3>\n' + contentRank +
                    '<br><br><br><br><br><br><br><h3>معدل الحضور من الجنسين في الدورة التدريبية</h3>\n' + contentGrnder +
                    '<br><br><br><br><br><br><h3>معدل الحضور حسب الكلية في الدورة التدريبية</h3>\n' + contentDepartment +
                    '<br><br><br><br><br><br><h3>معدل الرضى عن الدورة التدريبية</h3>\n' + contentRate +
                    '</center></body>\n</html>';
            
                document.write(pageContent);
                document.close();
                newWindow.print();
            });
            
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
       $(document).ready(function () {
            // prepare chart data as an array
            var source =
            {
                datatype: "json",
                datafields: [
                    { name: 'Gender' },
                    { name: 'Total' }
                ],
                url: 'getTCGender.php'
            };
            var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error); } });
            // prepare jqxChart settings
            var settings = {
                title: $('#nameOfTC').text(),
                description: "معدل الحضور من الجنسين في الدورة التدريبية",
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
                url: 'getTCRank.php'
            };
            var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error); } });
            // prepare jqxChart settings
            var settings = {
                title: $('#nameOfTC').text(),
                description: "معدل الحضور حسب الرتبة العلمية في الدورة التدريبية",
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
		url: "getTCDepartment.php"
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
                description: "معدل الحضور حسب الكلية",
                
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