function showImages(el) {
    var windowHeight = jQuery(window).height();
    $(el).each(function() {
        var thisPos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (topOfWindow + windowHeight - 250 > thisPos) {
            $(this).addClass("fadeIn");
        }
    });
}

$(window).scroll(function() {
    showImages('#about-me');
    showImages('#work');
    showImages('#other-work');

});