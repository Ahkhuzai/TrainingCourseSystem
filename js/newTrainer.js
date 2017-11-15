$(document).ready(function () {              
    $("#major").jqxInput({placeHolder: "التخصص العام ", height: 25, width: '70%', minLength: 1,  theme: 'office',rtl:true });
    $("#special").jqxInput({ placeHolder: "التخصص الدقيق ", height: 25,width: '70%', minLength: 1, theme: 'office' ,rtl:true});
    $("#quali").jqxInput({height: 25,width: '70%', minLength: 1, theme: 'office' ,rtl:true});
    $("#cv_url").jqxInput({height: 25,width: '70%', minLength: 1, theme: 'office' ,rtl:true});
    $("#signature_url").jqxInput({height: 25,width: '70%', minLength: 1, theme: 'office' ,rtl:true});
});

$(document).ready(function () {
    $("#becomeTrainer").jqxButton({ width: '120px', height: '35px', theme: 'office'});
});

$(document).ready(function () {
    $('#resume').jqxFileUpload({  width: '70%', uploadUrl: 'cv_upload.php', fileInputName:'TrCV',theme: 'office',accept: 'application/pdf , application/vnd.wordperfect , application/msword'});
    $('#resume').on('uploadEnd', function (event) {
        var args = event.args;
        var serverResponce = args.response; 
        if (args != undefined) {
            var item = event.args.file;
            if (item != null) {
                alert("تم تحميل الملف بنجاح");
                $("#cv_url").val(serverResponce);
            }
        }
});

    $('#signture').jqxFileUpload({ width: '70%', uploadUrl: 'signature_upload.php', fileInputName:'TrSign',theme: 'office',accept: 'image/*' });
    $('#signture').on('uploadEnd', function (event) {
     var args = event.args;
        var serverResponce = args.response; 
        if (args != undefined) {
            var item = event.args.file;
            if (item != null) {
                 alert("تم تحميل الملف بنجاح");
                $("#signature_url").val(serverResponce);
            }
        }
});
});

$(document).ready(function () {                
    var source = [
        "المؤهل العلمي",
        "دكتوراه",
        "ماجيستير",
        "بكالوريوس"
            ];
    // Create a jqxDropDownList
    $("#qualification").jqxDropDownList({ source: source, selectedIndex: 0,width: '70%', height: '25' ,theme: 'office' ,rtl:true });
    $('#qualification').on('select', function (event) {
        var args = event.args;
        if (args != undefined) {
            var item = event.args.item;
            if (item != null) {           
                $("#quali").val(item.label);
            }
        }
    });

});