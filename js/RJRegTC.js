$(document).ready(function () {
    $("#print").jqxButton({ width: '120px', height: '35px', theme: 'office'});
      $("#back").jqxButton({ width: '120px', height: '35px', theme: 'office'});
     $("#delete").jqxButton({ width: '120px', height: '35px', theme: 'office'});
         $("#print").click(function () {
    printDiv('printend');
            });
});
function printDiv( name) 
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>' + document.title  + '</h1>');
    mywindow.document.write(document.getElementById(name).innerHTML);
    mywindow.document.write('</body></html>');
    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/
    mywindow.print();
    mywindow.close();
    return true;
}

