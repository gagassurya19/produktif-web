// navbar-scroll
$(window).scroll(function() {    

    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".navbar").addClass("navbar-scroll");
    } else {
        $(".navbar").removeClass("navbar-scroll")    
    }
});