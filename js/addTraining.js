
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
    $("#Hours").jqxInput({placeHolder: "عدد ساعات الدورة في اليوم الواحد", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#abstract").jqxInput({width: '70%', height: 80, placeHolder: 'ملخص الدورة',theme: 'office' ,rtl : true }); 
    $("#Goals").jqxInput({width: '70%', height: 200, placeHolder: 'أهداف الدورة',theme: 'office' ,rtl : true });  
    $("#stime").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#etime").jqxInput({placeHolder: "اسم الدورة", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    
});

$(document).ready(function () {                
    // create jqxcalendar.
    $("#dates").jqxDateTimeInput({ width: '300px', height: '25px' ,formatString:'yyyy-M-dd'});
    $("#datee").jqxDateTimeInput({ width: '300px', height: '25px',formatString:'yyyy-M-dd' });
    $('#dates').on('change', function (event) 
    {    
        $("#stime").val($('#dates').val());
    }); 
       $('#datee').on('change', function (event) 
    {     
        $("#etime").val($('#datee').val());  
    }); 
   
   
   
});
