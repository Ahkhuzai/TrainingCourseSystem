
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    
    $(document).ready(function () {
    $("#addTraining").jqxButton({ width: '120px', height: '35px', theme: 'office'});
    $("#saveTraining").jqxButton({ width: '120px', height: '35px', theme: 'office'});
     
        });

$(document).ready(function () {              
    $("#Tname").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Hours").jqxInput({placeHolder: "عدد ساعات الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#abstract").jqxInput({width: '70%', height: 80, placeHolder: 'ملخص الدورة',theme: 'office' ,rtl : true }); 
    $("#Goals").jqxInput({width: '70%', height: 200, placeHolder: 'أهداف الدورة',theme: 'office' ,rtl : true });  
    $("#stime").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#etime").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#handout_url").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
});

$(document).ready(function () {
    $('#handout').jqxFileUpload({  width: '70%', uploadUrl: 'handout_upload.php', fileInputName:'TcHO',theme: 'office',accept: 'application/pdf , application/vnd.wordperfect , application/msword'  });
    $('#handout').on('uploadEnd', function (event) {
    var args = event.args;
    var serverResponce = args.response;
    alert(serverResponce);
});
});


$(document).ready(function () {                
    // create jqxcalendar.
    $("#time").jqxDateTimeInput({ width: '70%', height: 25,  selectionMode: 'range', theme: 'office' });
    $("#time").on('change', function (event) {
        var selection = $("#time").jqxDateTimeInput('getRange');
        if (selection.from != null) {
            $("#selection").html("<div>من: " + selection.from.toLocaleDateString() + " <br/>الى: " + selection.to.toLocaleDateString() + "</div>");
           
            var sdate = getDateFormat(selection.from.toLocaleDateString());
            
            var edate=getDateFormat(selection.from.toLocaleDateString());
          
            $("#stime").val(sdate);
            $("#etime").val(edate);
            
        }
    });

    var date1 = new Date();
    date1.setFullYear(2017, 7, 7);
    var date2 = new Date();
    date2.setFullYear(2017, 7, 15);
    $("#time").jqxDateTimeInput('setRange', date1, date2);
});
   
function getDateFormat( date)
{
    var s=date.split('/');
    
   
    var end=s[2];
    var start= s[0];
    s[0]=end;   
    s[2]=s[1];
    s[1]=start;
    s=s.join('-');
    return s;
}