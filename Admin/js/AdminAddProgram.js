
    
    $(document).ready(function () {
    $("#addProgram").jqxButton({ width: '10%', height: '35px', theme: 'office'});
    $("#back").jqxButton({ width: '10%', height: '35px', theme: 'office'});
        });

$(document).ready(function () {     
    $("#Tname").jqxInput({placeHolder: "اسم البرنامج باللغة العربية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true });  
    $("#engname").jqxInput({placeHolder: "اسم البرنامج باللغة الانجليزية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#Hours").jqxInput({placeHolder: "عدد ساعات البرنامج الكلية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
    $("#abstract").jqxInput({width: '70%', height: 80, placeHolder: 'ملخص البرنامج',theme: 'office' ,rtl : true }); 
    $("#Goals").jqxInput({width: '70%', height: 200, placeHolder: 'أهداف البرنامج',theme: 'office' ,rtl : true });   
    $("#tc_id").jqxInput({placeHolder: "اسم البرنامج باللغة العربية", height: 25, width: '70%', minLength: 1, theme: 'office',rtl : true }); 
});

$(document).ready(function () {   
        var source ={
        datatype: "json",
        datafields: [{ name: 'id',type: 'number' },
            { name: 'tc_ar_name',type: 'string' },
            { name: 'tr_ar_name',type: 'string' },
            { name: 'choose',type: 'bool' },
            { name: 'start_date'}
            ],
        id: 'id',
        url: "getTCToProgram.php"
                       };
   $("#tc").jqxGrid({
        source: source,
        theme: 'office',
        rtl:true,
        autorowheight: true,
        autoheight: true,
        showfilterrow: true,
        filterable: true,
        editable: true,           
        selectionmode: 'singlecell',
        width:'75%',                                                         
        columns: [
            { text: 'اضافة', datafield: 'choose',columntype: 'checkbox', filtertype: 'checkbox',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'اسم الدورة', datafield: 'tc_ar_name',columntype: 'textbox',editable:false, filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'مقدم الدورة', datafield: 'tr_ar_name',columntype: 'textbox',editable:false, filtertype: 'input',renderer: columnsrenderer, cellsrenderer: cellsrenderer },
            { text: 'تاريخ  الدورة',datafield: 'start_date',filtertype: 'range',editable:false,cellsformat: 'dd.MM.yyyy',renderer: columnsrenderer, cellsrenderer: cellsrenderer },   
        ]
    });    
    $("#addProgram").on('click', function ()
    {
      var rows = $('#tc').jqxGrid('getrows');
      var x=0;
      var ids=new Array();
      for(var i=0;i<rows.length;i++)
      {
          if(rows[i]['choose']==true)
          {
              ids[x]=rows[i]['id'];
              x++;
          }
      }
    $("#tc_id").jqxInput('val', ids.join('-'));
    });
});


var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin:5px;">' + value + '</div>';
}
