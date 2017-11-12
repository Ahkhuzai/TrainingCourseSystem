$(document).ready(function () {
            var source =
		{
                    datatype: "json",
                    datafields: [
                    { name: 'criteria'},
                    { name: 'score'}
                    ],
		url: $('#url').text()
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
                                maxValue:25,
                                displayValueAxis: true,
                                description: 'متوسط الدرجة المستحقة',
                                axisSize: 'auto',
                                tickMarksColor: '#888888'
                            },
                            series: [
                                    { dataField: 'score', displayText: 'الدرجة',labels:
                                    {
                                        visible: true,
                                    }}
                                ]
                        }
                    ]
            };
           
            // setup the chart
            $('#jqxChart').jqxChart(settings);
            
        });
        

