$(document).ready(function () {
    $("#back").jqxButton({ width: '120px', height: '35px'  });
    $("#send").jqxButton({ width: '120px', height: '35px'  });
    $("#r1").jqxRating({ width: 350, height: 35  });
    $("#r2").jqxRating({ width: 350, height: 35  });
    $("#r3").jqxRating({ width: 350, height: 35  });
    $("#r4").jqxRating({ width: 350, height: 35  });
    $("#r5").jqxRating({ width: 350, height: 35  });
    $("#r6").jqxRating({ width: 350, height: 35  });
    $("#r7").jqxRating({ width: 350, height: 35  });
    $("#r8").jqxRating({ width: 350, height: 35  });
    $("#r9").jqxRating({ width: 350, height: 35  });
    $("#r10").jqxRating({ width: 350, height: 35  });
    $("#r12").jqxRating({ width: 350, height: 35  });
    $("#r13").jqxRating({ width: 350, height: 35  });
    $("#r14").jqxRating({ width: 350, height: 35  });
    $("#r15").jqxRating({ width: 350, height: 35  });
    $("#r16").jqxRating({ width: 350, height: 35  });
    $("#r17").jqxRating({ width: 350, height: 35  });
    $("#r11").jqxRating({ width: 350, height: 35  });
    
    $("#r18").jqxRating({ width: 350, height: 35  });
    $("#r19").jqxRating({ width: 350, height: 35  });
    $("#r20").jqxRating({ width: 350, height: 35  });
    $("#r21").jqxRating({ width: 350, height: 35  });
    
    $("#r22").jqxRating({ width: 350, height: 35  });
    $("#r23").jqxRating({ width: 350, height: 35  });
    
    $("#r24").jqxRating({ width: 350, height: 35  });
    $("#r25").jqxRating({ width: 350, height: 35  });
    $("#r26").jqxRating({ width: 350, height: 35  });
    $("#r27").jqxRating({ width: 350, height: 35  });
    $("#r28").jqxRating({ width: 350, height: 35  });
var total_Place=0;
var total_Program=0;
var total_Presentation=0;
var total_Presenter=0;
var total_orgnization=0;

  $("#send").click(function () {
      total_Program=$('#r1').jqxRating('getValue')+$('#r2').jqxRating('getValue')+$('#r3').jqxRating('getValue')+$('#r4').jqxRating('getValue')+$('#r5').jqxRating('getValue')+$('#r6').jqxRating('getValue')+$('#r7').jqxRating('getValue')
                    +$('#r8').jqxRating('getValue')+$('#r9').jqxRating('getValue')+$('#r10').jqxRating('getValue')+$('#r11').jqxRating('getValue');
      total_Presenter=$('#r12').jqxRating('getValue')+$('#r13').jqxRating('getValue')+$('#r14').jqxRating('getValue')+$('#r15').jqxRating('getValue')+$('#r16').jqxRating('getValue')+$('#r17').jqxRating('getValue');
      total_Presentation=$('#r18').jqxRating('getValue')+$('#r19').jqxRating('getValue')+$('#r20').jqxRating('getValue')+$('#r21').jqxRating('getValue');
      total_Place=$('#r22').jqxRating('getValue')+$('#r23').jqxRating('getValue');
      total_orgnization=$('#r24').jqxRating('getValue')+$('#r25').jqxRating('getValue')+$('#r26').jqxRating('getValue')+$('#r27').jqxRating('getValue')+$('#r28').jqxRating('getValue');
      
      total_Program=(total_Program*100)/55;
      total_Presenter=(total_Presenter*100)/30;
      total_Presentation=(total_Presentation*100)/20;
      total_Place=(total_Place*100)/10;
      total_orgnization=(total_orgnization*100)/25;
      
      total_Program= Math.round( total_Program * 100 + Number.EPSILON ) / 100;
      total_Presenter=Math.round( total_Presenter * 100 + Number.EPSILON ) / 100;
      total_Presentation=Math.round( total_Presentation * 100 + Number.EPSILON ) / 100;
      total_Place=Math.round( total_Place * 100 + Number.EPSILON ) / 100;
      total_orgnization=Math.round( total_orgnization * 100 + Number.EPSILON ) / 100;
      
    $('#Program_rate').val(total_Program);
    $('#Presenter_rate').val(total_Presenter);
    $('#presentation_rate').val(total_Presentation);
    $('#place_rate').val(total_Place);
    $('#orgnization_rate').val(total_orgnization);
    });
  
});     


$(document).ready(function () {
    $("#comments").jqxTextArea({ theme: 'office', rtl:true ,placeHolder: "  أضفـ/ي تعليق او ملاحظات او مقترحات يمكن أن تسهم في تحسين مستوى دورات وبرامج عمادة البحث العلمي  ", height: 150, width: '80%', minLength: 1});
    $("#Program").jqxExpander({ width: '75%',  rtl: true ,expanded: true});
    $("#place").jqxExpander({ width: '75%',  rtl: true ,expanded: false});
    $("#Presenter").jqxExpander({ width: '75%',  rtl: true ,expanded: false});
    $("#presentation").jqxExpander({ width: '75%',  rtl: true ,expanded: false});
    $("#orgnization").jqxExpander({ width: '75%',  rtl: true ,expanded: false});
    
    $("#place_rate").jqxInput({ width: '75%',  rtl: true ,expanded: false});
    $("#orgnization_rate").jqxInput({ width: '75%',  rtl: true ,expanded: false});
    $("#presentation_rate").jqxInput({ width: '75%',  rtl: true ,expanded: false});
    $("#Presenter_rate").jqxInput({ width: '75%',  rtl: true ,expanded: false});
    $("#Program_rate").jqxInput({ width: '75%',  rtl: true ,expanded: false});
});
