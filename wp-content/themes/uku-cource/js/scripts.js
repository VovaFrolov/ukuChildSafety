jQuery(document).ready(function($) {



    // AOS.init();

    var $hamburger = $(".header__toggler");
    $hamburger.on("click", function(e) {

        $(this).toggleClass("active");
        $("body").toggleClass("mobile-menu-active");
        $('.left-modal__close').click()
    });
    $(window).scroll(function(e) {
        header_scroll = jQuery(window).scrollTop();
        if (header_scroll >= 50) $('body').addClass("sticky");
        else $('body').removeClass("sticky");
        var arrow_up = jQuery(".back-to-top"),
            scroll = jQuery(window).scrollTop();
        if (scroll >= 500) arrow_up.addClass("in");
        else arrow_up.removeClass("in");

    });

    accordion($('.accordion__title'))

    function accordion(accordionclass) {
        $(accordionclass).click(function() {
            var $_this = $(this);


            if ($_this.hasClass('in')) {
                $_this.removeClass('in').next().slideUp();
            } else {
                $(accordionclass).removeClass('in').next().slideUp();
                $_this.toggleClass('in').next().slideDown();
            }
            $(this).parent().addClass('in');
        });
    }
});