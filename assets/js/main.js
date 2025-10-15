/**
    ** preloader();
    ** headerSticky();
    ** videoWrap();
    ** btnWelcome();
    ** openNavMobile();
    ** openSearchHeader();
    ** goTop();
    ** counter();
    ** btnQuantity();
    ** btnWishlist();
    ** tabs();
    ** changeValue();
    ** openInforContact();

**/

(function ($) {
    ("use strict");
    var preloader = function () {
        setTimeout(function () {
            $(".preload-container").fadeOut("slow", function () {
                $(this).remove();
            });
        }, 2000);
    };
    var videoWrap = function () {
        if ($("div").hasClass("video-wrap")) {
            $(".popup-youtube").magnificPopup({
                type: "iframe",
            });
        }
    };
    var retinaLogos = function () {
        var retina = window.devicePixelRatio > 1 ? true : false;
        if (retina) {
            var tfheader = $('#logo_header').data('retina');
            $('.logo').find('img').attr({ src: tfheader, width: '159px', height: '47px' });

            var tfmobile = $('#mobile-logo_header').data('retina');
            $('.main-logo').find('img').attr({ src: tfmobile, width: '150px', height: '47px' });

            var tffooter = $('#logo_footer').data('retina');
            $('.footer-logo').find('img').attr({ src: tffooter, width: '205px', height: '53px' });
        }
    };

    var btnWelcome = () => {
        const btnOpen = $(".btn-open-welcome");
        const welcomeOpen = $(".wg-welcome")
        const btnCloseWelcome = $(".btn-close-welcome")


        btnOpen.on("click", () => {
            welcomeOpen.toggleClass("active");
        });
        btnCloseWelcome.on("click", (e) => {
            welcomeOpen.removeClass("active");
            e.preventDefault();
        });

    }

    var headerSticky = function () {
        let didScroll;
        let lastScrollTop = 0;
        let delta = 5;
        let navbarHeight = $(".header").outerHeight();
        $(window).scroll(function (event) {
            if ($(this).scrollTop() >= 300) {
                didScroll = true;

            } else {
                didScroll = false;
                if ($(this).scrollTop() === 0) {
                    $(".header").removeClass("scrollHeader")
                }
            }
        });

        setInterval(function () {
            if (didScroll) {
                let st = $(this).scrollTop();
                // Make scroll more than delta
                if (Math.abs(lastScrollTop - st) <= delta) return;

                // If scrolled down and past the navbar, add class .nav-up.
                if (st > lastScrollTop && st > navbarHeight) {
                    // Scroll Down
                    $(".header").css("top", `-${navbarHeight}px`);

                } else {
                    // Scroll Up
                    if (st + $(window).height() < $(document).height()) {
                        $(".header").addClass("scrollHeader")
                        $(".header").css("top", `-1px`);
                    }
                }

                lastScrollTop = st;
                didScroll = false;
            }
        }, 250);
    };
    var openNavMobile = () => {
        if ($('.header').hasClass('header')) {

            $(".header-left .open-menu").on("click", () => {
                $('.mobile-nav-wrap').toggleClass("active")

            })
            $('.mobile-button').on("click", () => {
                $('.mobile-nav-wrap').toggleClass("active")
            })
            $('.overlay-mobile-nav').on("click", () => {
                $('.mobile-nav-wrap').toggleClass("active")
            })
            $(".mobile-nav-close").on('click', () => {
                $('.mobile-nav-wrap').toggleClass("active")

            })
            $(document).on("click", ".menu-item-has-children-mobile", function () {
                var args = { duration: 200 };
                if ($(this).hasClass("active")) {
                    $(this).children(".sub-menu-mobile").slideUp(args);
                    $(this).removeClass("active");
                } else {
                    $(".sub-menu-mobile").slideUp(args);
                    $(this).children(".sub-menu-mobile").slideDown(args);
                    $(".menu-item-has-children-mobile").removeClass("active");
                    $(this).addClass("active");
                }
            });


        }
    }
    var openInforContact = function () {
        $(document).on("click", ".open-infor", function () {

            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            } else {

                $(".open-infor.active").filter(function () {
                    return this !== event.currentTarget;
                }).removeClass("active");
                $(this).addClass("active");
            }
        });


    }
    var openSearchHeader = () => {

        $(document).on('click', function (e) {
            var clickID = e.target.id; if ((clickID !== 's')) {
                $('.form-search').removeClass('active');
            }
        });
        $(document).on('click', function (e) {
            var clickID = e.target.class; if ((clickID !== 'a111')) {
                $('.show-search').removeClass('active');
            }
        });

        $('.show-search').on('click', function (event) {
            event.stopPropagation();
        });
        $('.form-search').on('click', function (event) {
            event.stopPropagation();
        });
        $('.show-search').on('click', function (event) {
            if (!$('.form-search').hasClass("active")) {
                $('.form-search').addClass('active');
                event.preventDefault();
            }
            else
                $('.form-search').removeClass('active');
            event.preventDefault();
            if (!$('.show-search').hasClass("active"))
                $('.show-search').addClass('active');
            else
                $('.show-search').removeClass('active');
        })
            ;
    }

    var goTop = function () {
        if ($("div").hasClass("progress-wrap")) {
            var progressPath = document.querySelector(".progress-wrap path");
            var pathLength = progressPath.getTotalLength();
            progressPath.style.transition = progressPath.style.WebkitTransition =
                "none";
            progressPath.style.strokeDasharray = pathLength + " " + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition =
                "stroke-dashoffset 10ms linear";
            var updateprogress = function () {
                var scroll = $(window).scrollTop();
                var height = $(document).height() - $(window).height();
                var progress = pathLength - (scroll * pathLength) / height;
                progressPath.style.strokeDashoffset = progress;
            };
            updateprogress();
            $(window).scroll(updateprogress);
            var offset = 200;
            var duration = 200;
            jQuery(window).on("scroll", function () {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery(".progress-wrap").addClass("active-progress");
                } else {
                    jQuery(".progress-wrap").removeClass("active-progress");
                }
            });
            jQuery(".progress-wrap").on("click", function (event) {
                event.preventDefault();
                jQuery("html, body").animate({ scrollTop: 0 }, duration);
                return false;
            });
        }
    };
    var counter = function () {
        if ($(document.body).hasClass("counter-scroll")) {
            var a = 0;
            $(window).scroll(function () {
                var oTop = $(".wg-counter").offset().top - window.innerHeight;
                if (a == 0 && $(window).scrollTop() > oTop) {
                    if ($().countTo) {
                        $(".wg-counter")
                            .find(".number")
                            .each(function () {
                                var to = $(this).data("to"),
                                    speed = $(this).data("speed");
                                $(this).countTo({
                                    to: to,
                                    speed: speed,
                                });
                            });
                    }
                    a = 1;
                }
            });
        }
    };
    var btnQuantity = function () {
        $(".minus-btn").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest("div").find("input");
            var value = parseInt($input.val());

            if (value > 1) {
                value = value - 1;
            }

            $input.val(value);
        });

        $(".plus-btn").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest("div").find("input");
            var value = parseInt($input.val());

            if (value > 0) {
                value = value + 1;
            }

            $input.val(value);
        });
    };

    var btnWishlist = () => {
        $('.add-wishlist').on("click", () => {
            $('.add-wishlist i').toggleClass("active");
        })
    }
    var tabs = function () {
        $(".wg-tabs").each(function () {
            $(this).find(".widget-content-tab").children().hide();
            $(this).find(".widget-content-tab").children(".active").show();
            $(this)
                .find(".menu-tab")
                .children(".item")
                .on("click", function () {
                    var liActive = $(this).index();
                    var contentActive = $(this)
                        .siblings()
                        .removeClass("active")
                        .parents(".wg-tabs")
                        .find(".widget-content-tab")
                        .children()
                        .eq(liActive);
                    contentActive.addClass("active").fadeIn("slow");
                    contentActive.siblings().removeClass("active");
                    $(this)
                        .addClass("active")
                        .parents(".wg-tabs")
                        .find(".widget-content-tab")
                        .children()
                        .eq(liActive)
                        .siblings()
                        .hide();
                });
        });
    };

    var changeValue = function () {
        if ($(".tf-dropdown-sort").length > 0) {
            $(".select-item").click(function (event) {
                $(this)
                    .closest(".tf-dropdown-sort")
                    .find(".text-sort-value")
                    .text($(this).find(".text-value-item").text());

                $(this)
                    .closest(".dropdown-menu")
                    .find(".select-item.active")
                    .removeClass("active");

                $(this).addClass("active");
            });
        }
    };
    // Dom Ready
    $(function () {
        headerSticky();
        videoWrap();
        btnWelcome();
        openNavMobile();
        openSearchHeader();
        goTop();
        counter();
        btnQuantity();
        btnWishlist();
        tabs();
        changeValue();
        retinaLogos();
        preloader();
        openInforContact();
    });
})(jQuery);
