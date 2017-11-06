$(document).ready(function () {              
    $("#major").jqxInput({placeHolder: "التخصص العام ", height: 25, width: '70%', minLength: 1,  theme: 'office',rtl:true });
    $("#special").jqxInput({ placeHolder: "التخصص الدقيق ", height: 25,width: '70%', minLength: 1, theme: 'office' ,rtl:true});
});

$(document).ready(function () {
    $("#submit").jqxButton({ width: '120px', height: '35px', theme: 'office'});
});

$(document).ready(function () {
    $('#resume').jqxFileUpload({ width: '70%', uploadUrl: 'newUsrUqu.php', fileInputName:'fileToUpload',theme: 'office' ,rtl:true });
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
});