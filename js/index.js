/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    
    $("#menu").jqxMenu({ theme: 'office', width: '100%'});
    $("#menu").css('visibility', 'visible');
    var centerItems = function () {
    var firstItem = $($("#menu ul:first").children()[0]);
    firstItem.css('margin-left', 0);
    var width = 0;
    var borderOffset = 2;
    $.each($("#menu ul:first").children(), function () {
        width += $(this).outerWidth(true) + borderOffset;
    });
    var menuWidth = $("#menu").outerWidth();
    firstItem.css('margin-left', (menuWidth / 2 ) - (width / 2));
    }
    centerItems();
    $(window).resize(function () {
        centerItems();
                });
});