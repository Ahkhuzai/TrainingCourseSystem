<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="libs/jq_libs/jqwidgets-ver5.3.2/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // prepare the data
            var data = new Array();
            var names =
            [
                "Andrew", "Nancy", "Shelley", "Regina", "Yoshi", "Antoni", "Mayumi", "Ian", "Peter", "Lars", "Petra", "Martin", "Sven", "Elio", "Beate", "Cheryl", "Michael", "Guylene"
            ];
            var genders =
            [
                "Male", "Female", "Female", "Female", "Male", "Male", "Male", "Male", "Male", "Male", "Female", "Male", "Male", "Male", "Female", "Female", "Male", "Male"
            ];

            for (var i = 0; i < 100; i++) {
                var row = {};
                row["name"] = names[Math.floor(Math.random() * names.length)];
                row["gender"] = genders[Math.floor(Math.random() * genders.length)];
                data[i] = row;
            }
            var source =
            {
                localdata: data,
                datatype: "array"
            };
            var dataAdapter = new $.jqx.dataAdapter(source, {
                loadComplete: function (data) { },
                loadError: function (xhr, status, error) { }
            });
            $("#jqxgrid").jqxGrid(
            {
                source: dataAdapter,
                width: 300,
                columns: [
                  { text: 'Names', datafield: 'name', width: 150 },
                  { text: 'Genders', datafield: 'gender', width: 150 }
                ]
            });
            $("#columntablejqxgrid").children("div:eq(0)").css("background-color", "green");
            $("#columntablejqxgrid").children("div:eq(1)").css("background-color", "red");
        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div id="jqxgrid"></div>
    </div>
</body>
</html>