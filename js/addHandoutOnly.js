
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    
    $(document).ready(function () {
    $("#addTraining").jqxButton({ width: '120px', height: '35px', theme: 'office'});
    });

$(document).ready(function () {              
    $("#Tname").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
   
    $("#handout_trainer").jqxInput({height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true});  
    $("#handout_trainee").jqxInput({height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true}); 
    $("#handout_presentation").jqxInput({height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true}); 
    $("#handout_scichapter").jqxInput({height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true}); 
   
   
});
  
$(document).ready(function () {
    $('#handout_tr').jqxFileUpload({  width: '70%', uploadUrl: 'handout_upload.php', fileInputName:'TcHO',theme: 'office',accept: 'application/pdf , application/vnd.wordperfect , application/msword'  });
    $('#handout_te').jqxFileUpload({  width: '70%', uploadUrl: 'handout_upload.php', fileInputName:'TcHO',theme: 'office',accept: 'application/pdf , application/vnd.wordperfect , application/msword'  });
    $('#handout_pr').jqxFileUpload({  width: '70%', uploadUrl: 'handout_upload.php', fileInputName:'TcHO',theme: 'office',accept: 'application/pdf , application/vnd.wordperfect , application/msword'  });
    $('#handout_sci').jqxFileUpload({  width: '70%', uploadUrl: 'handout_upload.php', fileInputName:'TcHO',theme: 'office',accept: 'application/pdf , application/vnd.wordperfect , application/msword'  });
   
    $('#handout_tr').on('uploadEnd', function (event) {
    var args = event.args;
        var serverResponce = args.response; 
        if (args != undefined) {
            var item = event.args.file;
            if (item != null) {
                 alert("تم تحميل الملف بنجاح");
                $("#handout_url").val(serverResponce);
            }
        }
}   );

$('#handout_tr').on('uploadEnd', function (event) {
    var args = event.args;
        var serverResponce = args.response; 
        if (args != undefined) {
            var item = event.args.file;
            if (item != null) {
                 alert("تم تحميل الملف بنجاح");
                $("#handout_url").val(serverResponce);
            }
        }
}   );

$('#handout_te').on('uploadEnd', function (event) {
    var args = event.args;
        var serverResponce = args.response; 
        if (args != undefined) {
            var item = event.args.file;
            if (item != null) {
                 alert("تم تحميل الملف بنجاح");
                $("#handout_url").val(serverResponce);
            }
        }
}   );
$('#handout_sci').on('uploadEnd', function (event) {
    var args = event.args;
        var serverResponce = args.response; 
        if (args != undefined) {
            var item = event.args.file;
            if (item != null) {
                 alert("تم تحميل الملف بنجاح");
                $("#handout_url").val(serverResponce);
            }
        }
}   );
});


