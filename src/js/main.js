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
     * Sticky hearder
     */
    $(window).scroll(function () {
        var scroll = $(window).scrollTop()

        if (scroll <= 5) {
            $('.header__bottom').removeClass('header__bottom--scrolling')
        } else {
            $('.header__bottom').addClass('header__bottom--scrolling')
        }
    })

    /**
     * Refresh sliders for resizes
     */
    $(window).resize(function(){
        $('.slick-slider')[0].slick.refresh();
    })

    /**
     * Search trigger
     */
    $('.main-search__btn').on('click touched', function () {
        $('.main-search__form').toggleClass('main-search__form--opened')
    })

    /**
     * Mobile menu
     */
    $('.header__burger-btn, .mobile-menu__button-link').on('click touched', function () {
        if ($('.mobile-menu').hasClass('mobile-menu--opened')) {
            $('.mobile-menu').removeClass('mobile-menu--opened')
            $('body').css('overflow', 'auto');
        } else {
            $('.mobile-menu').addClass('mobile-menu--opened')
            $('body').css('overflow', 'hidden');
        }
        
        if ($('.header__burger-btn').hasClass('header__burger-btn--opened')) {
            $('.header__burger-btn').removeClass('header__burger-btn--opened')
        } else {
            $('.header__burger-btn').addClass('header__burger-btn--opened')
        }
    })

    $('.mobile-menu__arrow-btn').on('click touched', function (e) {
        e.preventDefault()

        if ($(this).parent().find('.mobile-menu__sublist').hasClass('mobile-menu__sublist--opened')) {
            $(this).parent().find('.mobile-menu__sublist').removeClass('mobile-menu__sublist--opened')
        } else {
            $(this).parent().find('.mobile-menu__sublist').addClass('mobile-menu__sublist--opened')
        }

        if ($(this).parent().hasClass('mobile-menu__item--opened')) {
            $(this).parent().removeClass('mobile-menu__item--opened')
        } else {
            $(this).parent().addClass('mobile-menu__item--opened')
        }
    })

    /**
     * Testimonials slider
     */
    $('.testimonials__slider').slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        responsive: []
    })

    /**
     * Home Next Courses Slider
     */
    $('.home-ncourses__slider').slick({
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        dots: true,
        responsive: [
            {
                breakpoint: 992.5,
                settings: {
                    arrows: true,
                    prevArrow: '<button type="button" class="home-ncourses__arrow home-ncourses__arrow--left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-rule="evenodd" d="M16.127 20.13c.262-.26.262-.684.002-.943l-6.842-6.881 6.84-6.842c.262-.26.262-.684 0-.944-.26-.261-.682-.261-.943 0l-7.312 7.313c-.131.13-.196.301-.196.472 0 .17.065.34.195.47l7.312 7.352c.26.261.683.262.944.003"/></svg></button>',
                    nextArrow: '<button type="button" class="home-ncourses__arrow home-ncourses__arrow--right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-rule="evenodd" d="M7.873 4.518c-.262.26-.262.684-.002.943l6.842 6.88-6.84 6.843c-.262.26-.262.683 0 .944.26.261.682.261.943 0l7.312-7.313c.131-.13.196-.301.196-.472 0-.17-.065-.34-.195-.47L8.817 4.52c-.26-.262-.683-.263-.944-.003"/></svg></button>',
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 767.5,
                settings: {
                    arrows: true,
                    prevArrow: '<button type="button" class="home-ncourses__arrow home-ncourses__arrow--left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-rule="evenodd" d="M16.127 20.13c.262-.26.262-.684.002-.943l-6.842-6.881 6.84-6.842c.262-.26.262-.684 0-.944-.26-.261-.682-.261-.943 0l-7.312 7.313c-.131.13-.196.301-.196.472 0 .17.065.34.195.47l7.312 7.352c.26.261.683.262.944.003"/></svg></button>',
                    nextArrow: '<button type="button" class="home-ncourses__arrow home-ncourses__arrow--right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-rule="evenodd" d="M7.873 4.518c-.262.26-.262.684-.002.943l6.842 6.88-6.84 6.843c-.262.26-.262.683 0 .944.26.261.682.261.943 0l7.312-7.313c.131-.13.196-.301.196-.472 0-.17-.065-.34-.195-.47L8.817 4.52c-.26-.262-.683-.263-.944-.003"/></svg></button>',
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            }
        ]
    })

    /**
     * Home Staff Slider
     */
    $('.home-certified__slider').slick({
        arrows: false,
        slidesToShow: 6,
        slidesToScroll: 6,
        dots: true,
        responsive: [
            {
                breakpoint: 767.5,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            }
        ]
    })

    /**
     * About Us Certifications Slider
     */
    $('.aboutus__certifications').slick({
        arrows: false,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 767.5,
                settings: {
                    dots: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 640,
                settings: {
                    dots: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            }
        ]
    })

    /**
     * About Us Customers Slider
     */
    $('.aboutus__customers').slick({
        arrows: false,
        dots: true,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 767.5,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            }
        ]
    })

    /**
     * About Us GAllery Slider
     */
    $('.aboutus__gallery').slick({
        arrows: true,
        dots: false,
        prevArrow: '<button type="button" class="aboutus__arrow aboutus__arrow--left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-rule="evenodd" d="M16.127 20.13c.262-.26.262-.684.002-.943l-6.842-6.881 6.84-6.842c.262-.26.262-.684 0-.944-.26-.261-.682-.261-.943 0l-7.312 7.313c-.131.13-.196.301-.196.472 0 .17.065.34.195.47l7.312 7.352c.26.261.683.262.944.003"/></svg></button>',
        nextArrow: '<button type="button" class="aboutus__arrow aboutus__arrow--right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-rule="evenodd" d="M7.873 4.518c-.262.26-.262.684-.002.943l6.842 6.88-6.84 6.843c-.262.26-.262.683 0 .944.26.261.682.261.943 0l7.312-7.313c.131-.13.196-.301.196-.472 0-.17-.065-.34-.195-.47L8.817 4.52c-.26-.262-.683-.263-.944-.003"/></svg></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 767.5,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
    ]
    })

    /**
     * Honor Roll GAllery Slider
     */
    $('.honor__gallery').slick({
        arrows: true,
        dots: false,
        prevArrow: '<button type="button" class="honor__arrow honor__arrow--left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-rule="evenodd" d="M16.127 20.13c.262-.26.262-.684.002-.943l-6.842-6.881 6.84-6.842c.262-.26.262-.684 0-.944-.26-.261-.682-.261-.943 0l-7.312 7.313c-.131.13-.196.301-.196.472 0 .17.065.34.195.47l7.312 7.352c.26.261.683.262.944.003"/></svg></button>',
        nextArrow: '<button type="button" class="honor__arrow honor__arrow--right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-rule="evenodd" d="M7.873 4.518c-.262.26-.262.684-.002.943l6.842 6.88-6.84 6.843c-.262.26-.262.683 0 .944.26.261.682.261.943 0l7.312-7.313c.131-.13.196-.301.196-.472 0-.17-.065-.34-.195-.47L8.817 4.52c-.26-.262-.683-.263-.944-.003"/></svg></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 767.5,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    })



    /**
     * Sidebar filter trigger
     */
    $('.blogp__filter-btn, .blogp__filter-btn').click(function (e) {

        $(this).toggleClass('blogp__filter-btn--opened')
        $('.blogp__filter-mask').toggleClass('blogp__filter-mask--opened')
        
        var sidebarHiehgt = $('.blogp__filter-mask-container').outerHeight() + 50

        if ($('.blogp__filter-mask').hasClass('blogp__filter-mask--opened')) {
            $('.blogp__filter-mask').animate({height: sidebarHiehgt})
        } else {
            $('.blogp__filter-mask').animate({height: 0})
        }
    })

    $('.singlep__filter-btn, .singlep__filter-btn').click(function (e) {

        $(this).toggleClass('singlep__filter-btn--opened')
        $('.singlep__filter-mask').toggleClass('singlep__filter-mask--opened')
        
        var sidebarHiehgt = $('.singlep__filter-mask-container').outerHeight() + 50

        if ($('.singlep__filter-mask').hasClass('singlep__filter-mask--opened')) {
            $('.singlep__filter-mask').animate({height: sidebarHiehgt})
        } else {
            $('.singlep__filter-mask').animate({height: 0})
        }
    })

    /**
     * Single course pop up
     */
    $('.course__extra-btn--download').on('click touched', function (e) {
        e.preventDefault()

        $('.course__pp').toggleClass('course__pp--show')
    })

    $('.course__pp-close').on('click touched', function (e) {
        e.preventDefault()

        $('.course__pp').toggleClass('course__pp--show')
    })

   document.addEventListener( 'wpcf7mailsent', function(event) {
        if ( '385' == event.detail.contactFormId ) {
            var fileURL = $('.course__extra-btn--download').attr('href')

            var form = document.createElement("form");
            form.method = "GET";
            form.action = fileURL ;
            form.target = "_blank";
            document.body.appendChild(form);
            form.submit();
        }
    }, false );
})