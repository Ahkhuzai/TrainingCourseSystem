 $(document).ready(function () {
            // prepare chart data as an array
            var  sampleData = [
                    { creteria:'البرنامج التدريبي', agree:30, somewhat:15, notAgree: 25},
                    { creteria:'مقدم الدورة التدريبية', agree:25, somewhat:25, notAgree: 30},
                    { creteria:'وسائل العرض', agree:30, somewhat:48, notAgree: 25},
                    { creteria:'مكان الدورة', agree:35, somewhat:45, notAgree: 20},
                    { creteria:'التنظيم للدورة التدريبية', agree:20, somewhat:20, notAgree: 25},
                    
                ];
            // prepare jqxChart settings
            var settings = {
                title: "دورة بناء وإدارة الفريق البحثي",
                description: "ضمن برنامج مستشار في البحث العلمي",
                
		enableAnimations: true,
                showLegend: true,
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: sampleData,
                xAxis:
                    {
                        dataField: 'creteria',
                        showGridLines: true
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 50,
                            seriesGapPercent: 0,
                            valueAxis:
                            {
                                unitInterval: 10,
                                minValue: 0,
                                maxValue:100,
                                displayValueAxis: true,
                                description: 'عدد المصوتين',
                                axisSize: 'auto',
                                tickMarksColor: '#888888'
                            },
                            series: [
                                    { dataField: 'agree', displayText: 'موافق',labels:
                                    {
                                        visible: true,
                                    }},
                                    { dataField: 'somewhat', displayText: 'الى حد ما',labels:
                                    {
                                        visible: true,
                                    }},
                                    { dataField: 'notAgree', displayText: 'غير موافق',labels:
                                    {
                                        visible: true,
                                    }}
                                ]
                        }
                    ]
            };
           
            // setup the chart
            $('#jqxChart').jqxChart(settings);
            $("#pdf").jqxButton({ width: '120px', height: '35px', theme: 'office'});
            $("#pdfButton").click(function () {
            // call the export server to create a PDF
            $('#jqxChart').jqxChart('saveAsPDF', 'http://localhost:81/myChart.pdf');
  });
        });
        

