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