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

    // Smoothscroll
    if ($('body.home').length) {
        $('a[href^="/#"]').on('click', function (event) {
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
    }

    /**
     * Packages form
     */
    $('#packages-form').submit(function (e) {
        e.preventDefault()

        var formFilled = false

        $('#packages-form .input').each(function() {
            if ($(this).val() !== '')
            formFilled = true
        })

        if (formFilled) {
            var packages = $('.box__form-counter').html()
            packages = parseInt(packages)
    
            if ($('.box__form-check').is(':checked')) {
                if (packages > 0) {
                    packages = parseInt(packages) - 1
        
                    $('.box__form-counter').html(packages)
                                
                    var ajaxurl = 'http://' + window.location.host + '/wp-admin/admin-ajax.php'
                    var form = "#packages-form"
                
                    $.ajax({
                        url: ajaxurl + "?action=packages_function",
                        type: 'POST',
                        data: {'packages' : packages},
                        success: function(data) {
                            $('.box__form-submit').attr('value', '✓ THANKS FOR YOUR ENERGY!')
                            $('.box__form-submit').attr('disabled', 'disabled')
                        },
                        error: function(data) {
                            alert("Something went wrong, please try again.")
                        }
                    })
                } else {
                    alert("There are no more free sticker packages.")
                }
            } else {
                alert("We need the checkbox field checked to know that you understand the Privacy Policy.")
            }
        } else {
            alert("Please fill all fields.")
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