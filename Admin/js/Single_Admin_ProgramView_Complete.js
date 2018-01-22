$(document).ready(function () {
    $("#print").jqxButton({ width: '10%', height: '35px'});
    $("#print").click(function () {
                var contents = $("#pr_content").html();
                var gridContent = $("#tcTraineeRegister").jqxGrid('exportdata', 'html');
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
                    '<title>Complete Program</title>\n' +
                    '</head>\n' +
                    '<body><center>'+ contents+
                    '<br><br><br><br><br><br><h3>قائمة المسجلين في البرنامج </h3> \n' + gridContent +
                    '<br><br><br><br><br><br><h3>معدل الحضور حسب الرتبة العلميةفي البرنامج التدريبي</h3>\n' + contentRank +
                    '<br><br><br><br><br><br><br><h3>معدل الحضور من الجنسين في البرنامج التدريبي</h3>\n' + contentGrnder +
                    '<br><br><br><br><br><br><h3>معدل الحضور حسب الكلية في البرنامج التدريبي/h3>\n' + contentDepartment +
                    '<br><br><br><br><br><br><h3>معدل الرضى عن البرنامج التدريبي</h3>\n' + contentRate +
                    '</center></body>\n</html>';
            
                document.write(pageContent);
                document.close();
                newWindow.print();
            });
            
    $("#back").jqxButton({ width: '10%', height: '35px'});
    });

$(document).ready(function () {

    var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },     
            { name: 'tr_ar_name',type: 'string' },
            { name: 'status',type: 'string' },
            { name: 'start_date' },
           ],
        url: "getProgramTC.php"
    };
    $("#tcList").jqxGrid({
        source: source,
      
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        editable:true,
        showstatusbar: true,
        selectionmode: 'multiplecellsextended',
        width:'100%',
        showaggregates: true,
               
        columns: [
             { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer,  aggregates: ['count']},
             { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox', filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'حالة الدورة', datafield: 'status',columntype: 'textbox', filtertype: 'checkedlist',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ بدء الدورة',datafield: 'start_date',filtertype: 'range',cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
      ]
    }); 

    
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
            { name: 'missed',type: 'number' },
            { name: 'excused',type: 'number' }],
        id:'id',
        url: "getProgramAtten.php",
                       };
                       
    var dataAdapter = new $.jqx.dataAdapter(source);
    $("#tcTraineeRegister").jqxGrid({
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
        url: "getStaProgramRate.php"
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
                url: 'getProgramGender.php'
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
                url: 'getProgramRank.php'
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
        url: "getProgramDepartment.php"
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
