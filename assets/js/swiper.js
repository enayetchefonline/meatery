
if ((".slider-page-title-home").length > 0) {
    var swiper = new Swiper(".slider-page-title-home", {
        spaceBetween: 0,
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: ".btn-slider-home.btn-next",
            prevEl: ".btn-slider-home.btn-prev",
        },
    });
}
if ($(".page-product-slider-home").length > 0) {
    var swiper = new Swiper(".page-product-slider-home", {
        slidesPerView: 5,
        centeredSlides: true,
        initialSlide: 2,
        loop: true,
        spaceBetween: 50,
        breakpoints: {
            1: {
                slidesPerView: 1,

            },
            425: {
                slidesPerView: 1,

            },
            550: {
                slidesPerView: 1,

            },
            767: {
                slidesPerView: 3,
            },

            1300: {
                slidesPerView: 5,
            },

        },
    });
}
if ($(".page-product-slider").length > 0) {
    var swiper = new Swiper(".page-product-slider", {
        slidesPerView: 5,
        spaceBetween: 10,
        initialSlide: 2,
        centeredSlides: true,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,

            },
            450: {
                slidesPerView: 1,

            },
            550: {
                slidesPerView: 2,

            },
            780: {
                slidesPerView: 3.5,

            },
            991: {
                slidesPerView: 4,

            },
            1280: {
                slidesPerView: 5,
            },
        },
        navigation: {
            nextEl: ".btn-slider-product.btn-next",
            prevEl: ".btn-slider-product.btn-prev",
        },
    })
}

if ($('.discovery-shop-3').length > 0) {
    var swiper = new Swiper(".discovery-shop-3", {
        slidesPerView: 3,
        spaceBetween: 30,
        initialSlide: 0,
        centeredSlides: false,
        navigation: {
            nextEl: ".btn-discovery-shop.btn-next",
            prevEl: ".btn-discovery-shop.btn-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,

            },
            550: {
                slidesPerView: 1.3,

            },
            767: {
                slidesPerView: 2.5,

            },
            1200: {
                slidesPerView: 3,
            },
            1920: {
                slidesPerView: 3,
            },
        },
    });
}
if ($('.testimonials-slider-3').length > 0) {
    var swiper = new Swiper(".testimonials-slider-3", {
        slidesPerView: 3,
        spaceBetween: 26,
        pagination: {
            el: ".testimonials-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,

            },
            767: {
                slidesPerView: 2,

            },
            991: {
                slidesPerView: 3,
            },
        },

    })
}
if ($('.slider-our-news-3').length > 0) {
    var swiper = new Swiper(".slider-our-news-3", {
        slidesPerView: 3,
        spaceBetween: 30,
        initialSlide: 0,
        centeredSlides: false,
        navigation: {
            nextEl: ".btn-our-news.style-index.btn-next",
            prevEl: ".btn-our-news.style-index.btn-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,

            },
            550: {
                slidesPerView: 1.5,

            },
            767: {
                slidesPerView: 2.5,

            },
            1200: {
                slidesPerView: 3,
            },
            1920: {
                slidesPerView: 3,
            },
        },
        on: {
            slideChange: function () {

                updateNavigationButtons(swiper);
            }
        },
    })
}

if ($('.slider-our-news-3-home-2').length > 0) {
    var swiper = new Swiper(".slider-our-news-3-home-2", {
        slidesPerView: 3,
        spaceBetween: 30,
        initialSlide: 0,
        centeredSlides: false,
        navigation: {
            nextEl: ".btn-our-news.style-home-2.btn-next",
            prevEl: ".btn-our-news.style-home-2.btn-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,

            },
            550: {
                slidesPerView: 1.2,

            },
            767: {
                slidesPerView: 2.5,
            },
            1200: {
                slidesPerView: 3,
            },
            1920: {
                slidesPerView: 3,
            },
        },
    })

}





if ($('.slider-sevice-list-4').length > 0) {
    var swiper = new Swiper(".slider-sevice-list-4", {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: false,
        breakpoints: {
            1: {
                slidesPerView: 1,
                initialSlide: 1,
                loop: true,
            },
            650: {
                slidesPerView: 1.5,

            },
            850: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1440: {
                slidesPerView: 3.5,
            },
            1600: {
                slidesPerView: 4,
            },
        }
    })
}
if ($(".slide-gallery").length > 0) {

    var swiper = new Swiper(".slide-gallery", {
        slidesPerView: 6,
        spaceBetween: 30,
        breakpoints: {
            0: {
                slidesPerView: 2.2,
            },
            400: {
                slidesPerView: 3.2,
            },
            750: {
                slidesPerView: 4.2,
            },
            1280: {
                slidesPerView: 6,
            },
        },
    })
}


if ($(".partner-slide").length > 0) {
    var swiper = new Swiper(".partner-slide", {
        slidesPerView: 6,
        observer: true,
        observeParents: true,
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        speed: 10000,
        breakpoints: {
            0: {
                slidesPerView: 3,
                spaceBetween: 10,

            },
            450: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            868: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
            1400: {
                slidesPerView: 6,
                spaceBetween: 90,
            },
        },
    })
}
if ($(".portfolio-slider").length > 0) {
    var swiper = new Swiper(".portfolio-slider", {
        spaceBetween: 25,
        slidesPerView: 1,
        breakpoints: {
            0: {
                slidesPerView: 1.1,
            },
            400: {
                slidesPerView: 1.2,
            },
            600: {
                slidesPerView: 1.5,
            },
            750: {
                slidesPerView: 2.2,
            },
            991: {
                slidesPerView: 2.5,
            },
            1280: {
                slidesPerView: 3.2
            },
            1500: {
                slidesPerView: 4
            },
        },
    })
}