$(function() {

    let menu = $(".header");
    let html = $("body");

    $('#header-toggle').click(function(e) {

        if (menu.hasClass('open')) {
            menu.removeClass('open');
            html.css('overflow', 'auto');
        } else {
            menu.addClass('open');
            html.css('overflow', 'hidden');
        }

    });

});
