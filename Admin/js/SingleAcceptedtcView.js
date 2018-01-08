$(document).ready(function () {
    $("#print").jqxButton({ width: '10%', height: '35px'});
        $("#print").click(function () {
                var contents = $("#pr_content").html();
              
                var newWindow = window.open('', ''),
                document = newWindow.document.open(),
                pageContent =
                    '<!DOCTYPE html>\n' +
                    '<html>\n' +
                    '<head>\n' +
                    '<meta charset="utf-8" />\n' +
                    '<title> Tc</title>\n' +
                    '</head>\n' +
                    '<body><center>'+ contents+
         
                    '</center></body>\n</html>';
                document.write(pageContent);
                document.close();
                newWindow.print();
            });
    $("#back").jqxButton({ width: '10%', height: '35px'});
    });
