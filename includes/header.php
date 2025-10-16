<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />

    <title>The Meatery</title>

    <meta name="author" content="chefonline.co.uk" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css" />


    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />

    <!-- Font -->
    <link rel="stylesheet" href="assets/font/fonts.css" />

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/icons/icomoon/style.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="icons/leaf.svg" />
    <link rel="apple-touch-icon-precomposed" href="assets/images/logo/favicon.html" />
</head>

<body class="counter-scroll" style="overflow-x: hidden !important">

    <div id="wrapper" class="wrapper has-bg">

        <!-- header -->
        <div class="header" id="header_main">


            <div class="tf-container w-1712">

                <div class="header-inner ">

                    <div class="header-left">
                        <a class="logo" href="<?php echo base_url(); ?>">
                            <img id="logo_header" src="assets/images/logo/logo.webp" alt=""
                                data-retina="assets/images/logo/logo.webp">
                        </a>
                    </div>
                    <div class="header-center">
                        <ul class="nav-list">
                            <li class="item">
                                <a href="<?php echo base_url('home'); ?>" class="name-nav">Home</a>
                            </li>
                            <li class="item">
                                <a href="menu" class="name-nav">Menu</a>
                            </li>
                            <li class="item">
                                <a href="about" class="name-nav">About Us</a>
                            </li>
                            <li class="item">
                                <a href="contact" class="name-nav">Contact Us</a>
                            </li>
                            <li class="item">
                                <a href="reservation" class="name-nav">Reservation</a>
                            </li>
                            <li class="item">
                                <a href="blog" class="name-nav">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <!-- <a href="<?php echo base_url(); ?>" class="btn-order tf-btn font-cerebri ">ORDER ONLINE<i
                                class="icon-arrow-down"></i></a> -->
                        <div class="header-sidebar">
                            <div class="btn-open-welcome">
                                <span></span>
                            </div>
                            <div class="wg-welcome">
                                <div class="inner">
                                    <div class="btn-close-welcome">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="ls-is-cached lazyloaded" src="assets/images/logo/logo.webp"
                                        data-src="assets/image/logo/welcome-logo.png" alt="">
                                    <p class="text" style="font-size: 20px;">British Steaks. Indian Heat. Unforgettable
                                        Taste.</p>
                                    <div class="contact">
                                        <p class="number-call fw-bold font-cormorant letter-space-06 mb-8">
                                            +020 7123 4567
                                        </p>
                                        <p class="address mb-3">The Meatery
                                            21 Edgware Road,
                                            London W2 2JE</p>
                                        <p class="email">info@themeatery.co.uk</p>
                                    </div>
                                    <div class="sort-line"></div>
                                    <div class="schedule">
                                        <p class="mb-3">Monday - Sunday: 12pm - 12am</p>
                                        <!-- <p class="mb-3">Saturday - Sunday: 9.00am - 22.00pm</p> -->
                                        <p>Last reservations 11pm</p>
                                        <p>Last orders 11.30pm</p>
                                    </div>
                                    <ul class="social">
                                        <li><a href="#">
                                                <i class="icon-fb"></i>
                                            </a></li>
                                        <li><a href="https://www.instagram.com/themeaterylondon/">
                                                <i class="icon-instagram2"></i>
                                            </a></li>
                                        <li><a href="https://www.tiktok.com/@themeaterylondon">
                                                <i class="icon-tiktok"></i>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-button">
                        <span></span>
                    </div>
                </div>
                <div class="mobile-nav-wrap">
                    <div class="overlay-mobile-nav"></div>
                    <div class="inner-mobile-nav overflow-y-auto">
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>" rel="home" class="main-logo">
                                <img id="mobile-logo_header" alt="" src="assets/images/logo/logo.webp"
                                    data-retina="assets/images/logo/logo.webp">
                            </a>
                            <div class="mobile-nav-close">
                                <i class="icon-close"></i>
                            </div>
                        </div>
                        <nav id="mobile-main-nav" class="mobile-main-nav">
                            <ul id="menu-mobile-menu" class="menu">
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a href="menu">Menus</a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a href="about">About Us</a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a href="contact">Contact Us</a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a href="reservation">Reservation</a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a href="blog">Blog</a>
                                </li>
                                <!-- <li class="menu-item menu-item-has-children-mobile">

                                    <a class="item-menu-mobile current" href="javascript:void(0)">HOME <i
                                            class="icon-arrow_down"></i></a>

                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item current"><a href="index-2.html">HOME 1</a></li>
                                        <li class="menu-item"><a href="home-2.html">HOME 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile " href="javascript:void(0)">PAGES <i
                                            class="icon-arrow_down"></i></a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item "><a href="about-us.html">ABOUT US</a></li>
                                        <li class="menu-item "><a href="404.html">404</a></li>
                                        <li class="menu-item "><a href="history.html">HISTORY</a></li>
                                        <li class="menu-item "><a href="meet-the-chef.html">MEET THE CHEF</a></li>
                                        <li class="menu-item "><a href="our-menu.html">OUR MENU</a></li>
                                        <li class="menu-item "><a href="our-service.html">OUR SERVICE</a></li>
                                        <li class="menu-item "><a href="portfolio.html">PORTFOLIO</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="javascript:void(0)">PRODUCT <i
                                            class="icon-arrow_down"></i></a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item "><a href="shop.html">SHOP</a></li>
                                        <li class="menu-item "><a href="shop-detail.html">SHOP DETAILS</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="javascript:void(0)">BLOG <i
                                            class="icon-arrow_down"></i></a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item "><a href="blog.html">BLOG</a></li>
                                        <li class="menu-item "><a href="blog-single.html">BLOG SINGLE</a></li>
                                    </ul>
                                </li> 
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a href="contact-us.html">CONTACT</a>
                                </li> -->
                            </ul>

                        </nav>
                        <ul class="social">
                            <li><a href="#">
                                    <i class="icon-fb"></i>
                                </a></li>
                            <li><a href="https://www.instagram.com/themeaterylondon/">
                                    <i class="icon-instagram2"></i>
                                </a></li>
                            <!-- <li><a href="#">
                                    <i class="icon-twitter"></i>
                                </a></li>
                            <li><a href="#">
                                    <i class="icon-pinterest"></i>
                                </a></li> -->
                            <li><a href="https://www.tiktok.com/@themeaterylondon">
                                    <i class="icon-tiktok"></i>
                                </a></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
        <!-- /header -->

        <!-- main content -->
        <div class="main-content">