jQuery(document).ready(function($) {



    // AOS.init();

    var $hamburger = $(".header__toggler");
    $hamburger.on("click", function(e) {

        $(this).toggleClass("active");
        $("body").toggleClass("mobile-menu-active");
        $('.mobile-menu').slideToggle()
    });
    $(window).scroll(function(e) {
        header_scroll = jQuery(window).scrollTop();
        if (header_scroll >= 200) $('.header').addClass("sticky ");
        else $('.header').removeClass("sticky ");



        // Bind to scroll
        // Get container scroll position
        var fromTop = $(this).scrollTop();
        // Get id of current scroll item
        var cur = scrollItems.map(function() {
            if ($(this).offset().top - ($('.header').height() + 41) <= fromTop && $(this).offset().top + $(this).height() >= fromTop) {
                return this;
            }
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#" + id + "']").parent().addClass("active");
        }

    });


    // Cache selectors
    var lastId, topMenu = $(".anchor"),
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function() {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });


    // Bind click handler to menu items
    // so we can get a fancy scroll animation


    menuItems.click(function(e) {
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - ($('.header').height() + 40);
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 1000);
        e.preventDefault();
    });

    if ($(window).width() < 767) {
        $('.header__nav li a').click(function() {
            $(".header__toggler").removeClass("active");
            $(".mobile-menu").slideUp();
        })
    }
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