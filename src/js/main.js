$(document).ready(function () {
    // Smoothscroll
    $('a[href^="#"]').on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
    
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            })
        }
    })

    /**
     * Refresh sliders for resizes
     */
    $(window).resize(function(){
        $('.slick-slider')[0].slick.refresh();
    })

    /**
     * Testimonials slider
     */
    $('.testimonials__slider').slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        responsive: []
    })

})