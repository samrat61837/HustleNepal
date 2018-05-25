jQuery("#gotodown").click(function () {
    jQuery("body,html").animate({
        scrollDown: 0
    }, 600);
});
jQuery(window).scroll(function () {
    if (jQuery(window).scrollDown() < 150) {
        jQuery("#gotodown").addClass("visible");
    } else {
        jQuery("#gotodown").removeClass("visible");
    }
});