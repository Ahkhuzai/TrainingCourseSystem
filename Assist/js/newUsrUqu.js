$(document).ready(function () {              
    $("#major").jqxInput({placeHolder: "التخصص العام ", height: 25, width: 230, minLength: 1,  theme: 'energyblue',rtl:true });
    $("#special").jqxInput({ placeHolder: "التخصص الدقيق ", height: 25, width: 230, minLength: 1, theme: 'energyblue' ,rtl:true});
});

$(document).ready(function () {
    $("#submit").jqxButton({ width: '120px', height: '35px', theme: 'energyblue'});
});

$(document).ready(function () {
    $('#resume').jqxFileUpload({ width: 230, uploadUrl: 'newUsrUqu.php', fileInputName:'fileToUpload',theme: 'energyblue' ,rtl:true });
});

$(document).ready(function () {                
    var source = [
        "المؤهل العلمي",
        "دكتوراه",
        "ماجيستير",
        "بكالوريوس"
            ];
    // Create a jqxDropDownList
    $("#qualification").jqxDropDownList({ source: source, selectedIndex: 0, width: '230', height: '25' ,theme: 'energyblue' ,rtl:true });
});