$(window).scroll(function() {    

    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $(".header").addClass("header-scroll");
    } else {
        $(".header").removeClass("header-scroll")    
    }
});

