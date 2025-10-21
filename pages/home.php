<style>
    .hero-header {
        position: relative;
        height: 80vh;
        min-height: 500px;
        overflow: hidden;
        color: #fff;
    }

    .hero-slides {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .hero-slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 700ms ease;
        display: grid;
        place-items: center;
    }

    .hero-slide.is-active {
        opacity: 1;
        z-index: 2;
    }

    .hero-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, .35), rgba(0, 0, 0, .7));
    }

    .hero-content {
        position: relative;
        z-index: 3;
        text-align: center;
        padding: 0 1rem;
        max-width: 900px;
        animation: fadeUp 600ms ease both;
    }

    .hero-title {
        font-size: clamp(28px, 4vw, 52px);
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1rem;
    }

    .hero-sub {
        font-size: clamp(16px, 1.6vw, 20px);
        color: #e5e7eb;
        margin-bottom: 1.8rem;
    }

    .hero-btn {
        display: inline-block;
        padding: .9rem 2.4rem;
        border-radius: 999px;
        background: linear-gradient(90deg, #d4af37, #b98f26);
        color: #0b1020;
        font-weight: 700;
        text-decoration: none;
        letter-spacing: .3px;
        box-shadow: 0 0 12px rgba(212, 175, 55, .25);
        transition: transform .3s, box-shadow .3s;
    }

    .hero-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 18px rgba(212, 175, 55, .35);
    }

    .hero-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(0, 0, 0, .45);
        color: #fff;
        border: 1px solid rgba(255, 255, 255, .25);
        display: grid;
        place-items: center;
        cursor: pointer;
        z-index: 5;
        transition: background .2s, transform .2s;
    }

    .hero-prev {
        left: 16px;
    }

    .hero-next {
        right: 16px;
    }

    .hero-nav:hover {
        background: rgba(0, 0, 0, .6);
        transform: translateY(-50%) scale(1.05);
    }

    .hero-dots {
        position: absolute;
        left: 50%;
        bottom: 18px;
        transform: translateX(-50%);
        display: flex;
        gap: 8px;
        z-index: 5;
    }

    .hero-dot {
        width: 9px;
        height: 9px;
        border-radius: 999px;
        border: 1px solid rgba(255, 255, 255, .55);
        background: rgba(255, 255, 255, .25);
        cursor: pointer;
        transition: transform .2s, background .2s, border-color .2s;
    }

    .hero-dot.is-active {
        background: #d4af37;
        border-color: #d4af37;
        transform: scale(1.1);
    }

    .product-item .image img {
        border-radius: 30px;
    }

    .img-fluid {
        height: 500px !important;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .hero-header {
            height: 70vh;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .hero-slide {
            transition: none;
        }

        .hero-content {
            animation: none;
        }
    }
</style>

<!-- ===== HERO SLIDER (Vanilla JS, no dependencies) ===== -->
<section class="hero-header hero-slider" aria-roledescription="carousel" aria-label="Hero">
    <div class="hero-slides">
        <article class="hero-slide is-active" aria-roledescription="slide" aria-label="1 of 2">
            <img src="assets/images/slider/slider-1.webp" alt="Steakhouse with Indian flavours" class="hero-bg"
                loading="eager">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="hero-title">Where the bold flavours of India meet the timeless art of the steakhouse.</h1>
                <p class="hero-sub">In Central London, we serve prime cuts with spices, crafted with passion and fire.
                </p>
                <!-- <a href="menu.html" class="hero-btn">Explore Menu</a> -->
            </div>
        </article>

        <article class="hero-slide" aria-roledescription="slide" aria-label="2 of 2">
            <img src="assets/images/slider/slider-2.webp" alt="Halal steak in London" class="hero-bg" loading="lazy">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h2 class="hero-title">Best Halal Steak in London<br> Where East Meets West</h2>
                <p class="hero-sub">Enjoy a dining experience where East and West come together on every plate.</p>
                <!-- <a href="menu.html" class="hero-btn">Explore Menu</a> -->
            </div>
        </article>
    </div>

    <button class="hero-nav hero-prev" aria-label="Previous slide">‹</button>
    <button class="hero-nav hero-next" aria-label="Next slide">›</button>

    <div class="hero-dots" role="tablist" aria-label="Choose slide"></div>
</section>

<!-- section discovery -->
<section class="section-discovery-product tf-spacing-14">
    <div class="tf-container w-1712">
        <div class="row">
            <div class="heading-section style-2 wow fadeInUp" data-wow-delay="0s">
                <p class="sub-title">DISCOVER OUR MENU</p>
                <h2 class="title">
                    Indulge in an unforgettable dining experience where East meets West on every plate.
                </h2>
            </div>

            <div class="wg-slider-product style-2 wow fadeInUp" data-wow-delay="0s">
                <div class="swiper-container page-product-slider-home">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="image">
                                    <img class="ls-is-cached lazyloaded" src="assets/images/item/4.png"
                                        data-src="assets/images/item/4.png" alt="none">
                                </div>
                                <div class="product-detail">
                                    <p class="name-product">Cutlet Lamb Chop</p>
                                    <p class="text">Marinated lamb chop, grilled to perfection</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="image">
                                    <img class="ls-is-cached lazyloaded" src="assets/images/item/1.png"
                                        data-src="assets/images/item/1.png" alt="none">
                                </div>
                                <p class="name-product">Chicken 65</p>
                                <p class="text">Crispy Chicken tossed in onions peppers chilli</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="image">
                                    <img class="ls-is-cached lazyloaded" src="assets/images/item/2.jpg"
                                        data-src="assets/images/item/2.jpg" alt="none">
                                </div>
                                <p class="name-product">Meatery Lamb</p>
                                <p class="text">Slow cooked mince meat and lamb cubes bhuna style medium spice</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="image">
                                    <img class="ls-is-cached lazyloaded" src="assets/images/item/3.jpg"
                                        data-src="assets/images/item/3.jpg" alt="none">
                                </div>
                                <p class="name-product">Lamb Shank</p>
                                <p class="text">Served with mash potato and gravy</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="bottom-section aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">
                <a href="<?php echo base_url('menu'); ?>"
                    class="btn-view-more tf-btn font-cerebri style-2 style-4 wow fadeInUp" data-wow-delay="0s">EXPLORE
                    OUR MENU</a>
            </div>
        </div>
    </div>
</section>

<!-- History / Trending Dishes -->
<section class="section-box-history py-5">
    <div class="tf-container">
        <div class="row align-items-center flex-lg-row-reverse">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Savour the Flavour: Premium Steak Perfection</h2>
                <p class="mb-4">
                    We source only the highest quality meats, fresh seasonal produce, and authentic spices to create
                    bold, unforgettable flavours. Every dish is a celebration of premium ingredients, expertly prepared
                    and beautifully served.

                </p>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/home/meatery_lamb.jpg" alt="Restaurant Interior"
                    class="img-fluid rounded shadow" style="border-radius: 30px !important;">
            </div>
        </div>
    </div>
</section>

<section class="section-box-history py-5">
    <div class="tf-container">
        <div class="row align-items-center flex-lg-row-reverse">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/home/meatery_lamb.jpg" alt="Restaurant Interior"
                    class="img-fluid rounded shadow" style="border-radius: 30px !important;">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Flavours with a Story</h2>
                <p class="mb-4">
                    At the heart of our kitchen are chefs who blend time-honoured Indian spices with modern culinary
                    techniques, creating a truly unforgettable experience. Discover the story, the passion, and the
                    people behind every plate.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- section discovery shop -->
<section class="section-discovery-shop tf-spacing-1">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="discovery-shop-wrap">
                    <div class="heading-section wow fadeInUp" data-wow-delay="0s">
                        <p class="sub-title">EXPLORE OUR MENU</p>
                        <h2 class="title fs-45">Top Dishes</h2>
                        <p class="desc">
                            Explore our menu of Halal steak, seafood, and seasonal produce in Central London.
                        </p>
                        <a href="<?php echo base_url('menu'); ?>"
                            class="btn-readmore btn-switch-text tf-btn font-cerebri wow fadeInUp" data-wow-delay="0s">
                            <span><span class="btn-double-text" data-text="Browse our
                                    menu">Browse our
                                    menu</span></span>
                        </a>
                    </div>


                    <!-- <div class="swiper-container discovery-shop-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="wg-product-item hover-img wow fadeInUp" data-wow-delay="0s">
                                    <div class="image-wrap">
                                        <img class="ls-is-cached lazyloaded" src="assets/images/item/1.png"
                                            data-src="assets/images/item/1.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="product-name fw-bold"><a href="">Chicken 65</a></h3>
                                        <p class="type"><a href="#" class="font-cerebri">Crispy Chicken tossed in onions
                                                peppers chilli</a>,</p>
                                        <p class="price fw-book"> £12.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wg-product-item hover-img wow fadeInUp" data-wow-delay="0s">
                                    <div class="image-wrap">
                                        <img class="ls-is-cached lazyloaded" src="assets/images/item/2.jpg"
                                            data-src="assets/images/item/2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="product-name fw-bold"><a href="">Meatery Lamb</a></h3>
                                        <p class="type"><a href="#" class="font-cerebri">Slow cooked mince meat and lamb
                                                cubes bhuna medium spice</a></p>
                                        <p class="price fw-book"> £22.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wg-product-item hover-img wow fadeInUp" data-wow-delay="0s">
                                    <div class="image-wrap">
                                        <img class="ls-is-cached lazyloaded" src="assets/images/item/3.jpg"
                                            data-src="assets/images/item/3.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="product-name fw-bold"><a href="">Lamb Shank</a></h3>
                                        <p class="type"><a href="#" class="font-cerebri">Served with mash potato and
                                                gravy</a></p>
                                        <p class="price fw-book"> £25.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-slider btn-discovery-shop home-1 btn-next">
                        <i class="icon-uniE919 "></i>
                    </div>
                    <div class="btn-slider btn-discovery-shop home-1 btn-prev">
                        <i class="icon-left-chevron "></i>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section discovery now -->
<section class="section-discovery-shop-now">
    <div class="tf-container w-1712">
        <div class="discovery-now">
            <h2 class="title fw-bold wow fadeInUp" data-wow-delay="0s">British Steaks. Indian Heat. Unforgettable Taste.
            </h2>
            <a href="<?php echo base_url('reservation'); ?>"
                class="btn-readmore btn-switch-text tf-btn font-cerebri wow fadeInUp" data-wow-delay="0s">
                <span><span class="btn-double-text" data-text="BOOK A TABLE NOW">BOOK A TABLE NOW</span></span>
            </a>
        </div>
    </div>
</section>

<!-- section testimonials -->
<section class="section-testimonials tf-spacing-1">
    <div class="tf-container">
        <div class="testimonials-main">
            <div class="swiper-container testimonials-slider-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-item wow fadeInUp" data-wow-delay="0s">
                            <div class="content">
                                <div class="icon-quote"><img src="assets/icons/block-quite.png" alt=""></div>
                                <p class="text fw-medium font-cormorant">“ I love this store! … This the birthplace of
                                    Cubze ”</p>
                                <p class="sub-text">D.e.l.i.c.i.o.u.s. cubed servings of truffle that are hand wrapped
                                    and include an inspirational message about happiness!</p>
                            </div>
                            <div class="author-item">
                                <div class="author-image"><img class="lazyloaded ls-is-cached"
                                        src="assets/image/author/author-1.jpg"
                                        data-src="assets/image/author/author-1.jpg" alt=""></div>
                                <div class="author-infor">
                                    <a href="#" class="name fw-medium">Jacqueline. D</a>
                                    <p class="duty fw-book">National Operations Technician</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonials-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="content">
                                <div class="icon-quote"><img src="assets/icons/block-quite.png" alt=""></div>
                                <p class="text fw-medium font-cormorant">“ I love the quality of your chocolate, your
                                    graphics ”</p>
                                <p class="sub-text">Thanks very much. Angela did a fantastic job walking us through the
                                    tasting and the history of chocolate.</p>
                            </div>
                            <div class="author-item">
                                <div class="author-image"><img class="lazyloaded ls-is-cached"
                                        src="assets/image/author/author-2.jpg"
                                        data-src="assets/image/author/author-2.jpg" alt=""></div>
                                <div class="author-infor">
                                    <a href="#" class="name fw-medium">Katte Mart. A</a>
                                    <p class="duty fw-book">Product Group Analyst</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonials-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="content">
                                <div class="icon-quote"><img src="assets/icons/block-quite.png" alt=""></div>
                                <p class="text fw-medium font-cormorant">“ Madelaine chocolate is creamy and silky and a
                                    favorite with my customers. ”</p>
                                <p class="sub-text">Our team had an awesome experience. The history snippets were super
                                    informative.</p>
                            </div>
                            <div class="author-item">
                                <div class="author-image"><img class="lazyloaded ls-is-cached"
                                        src="assets/image/author/author-3.jpg"
                                        data-src="assets/image/author/author-3.jpg" alt=""></div>
                                <div class="author-infor">
                                    <a href="#" class="name fw-medium">Liania. M</a>
                                    <p class="duty fw-book">Forward Implementation</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonials-item">
                            <div class="content">
                                <div class="icon-quote"><img src="assets/icons/block-quite.png" alt=""></div>
                                <p class="text fw-medium font-cormorant">“ I love this store! … This the birthplace of
                                    Cubze ”</p>
                                <p class="sub-text">D.e.l.i.c.i.o.u.s. cubed servings of truffle that are hand wrapped
                                    and include an inspirational message.</p>
                            </div>
                            <div class="author-item">
                                <div class="author-image"><img class="lazyloaded ls-is-cached"
                                        src="assets/image/author/author-1.jpg"
                                        data-src="assets/image/author/author-1.jpg" alt=""></div>
                                <div class="author-infor">
                                    <a href="#" class="name fw-medium">Jacqueline. D</a>
                                    <p class="duty fw-book">National Operations Technician</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonials-item">
                            <div class="content">
                                <div class="icon-quote"><img src="assets/icons/block-quite.png" alt=""></div>
                                <p class="text fw-medium font-cormorant">“ I love the quality of your chocolate, your
                                    graphics ”</p>
                                <p class="sub-text">Great feedback about the event. Thanks to you and your team.</p>
                            </div>
                            <div class="author-item">
                                <div class="author-image"><img class="lazyloaded ls-is-cached"
                                        src="assets/image/author/author-2.jpg"
                                        data-src="assets/image/author/author-2.jpg" alt=""></div>
                                <div class="author-infor">
                                    <a href="#" class="name fw-medium">Jacqueline. D</a>
                                    <p class="duty fw-book">National Operations Technician</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination testimonials-pagination"></div>
            </div>
        </div>
    </div>
</section>

<!-- section infor store  -->
<section class="section-infor-store tf-spacing-5">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-3">
                <div class="infor-left wow fadeInUp" data-wow-delay="0s">
                    <h2 class="title fs-45 fw-bold">Find Us?</h2>
                    <div class="line"></div>
                    <p class="text fw-bold">21 Edgware Road,<br>London W2 2JE</p>
                    <p class="text-1 fw-bold">info@themeatery.co.uk</p>
                    <p class="text-2 fw-bold">020 7123 4567</p>
                </div>
            </div>

            <!-- Replace image with Google Map -->
            <div class="col-lg-6">
                <div class="map-center wow fadeInUp" data-wow-delay="0.1s">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1989.1791572292444!2d-0.16325828403023988!3d51.5152448796361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ab51f22e201%3A0xd4b47b4c3a741e91!2s21%20Edgware%20Rd%2C%20London%20W2%202JE%2C%20UK!5e0!3m2!1sen!2sbd!4v1739817297003!5m2!1sen!2sbd"
                        width="100%" height="300" style="border:0; border-radius:10px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="infor-left wow fadeInUp" data-wow-delay="0s">
                    <h2 class="title fs-45 fw-bold">Open Time</h2>
                    <div class="line"></div>
                    <p class="text fw-bold">Monday - Sunday: 12pm - 12am</p>
                    <!-- <p class="text-1 fw-bold">Last reservations 11pm</p> -->
                    <!-- <p class="text-2 fw-bold">Last orders 11.30pm</p> -->
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    (() => {
        const root = document.querySelector('.hero-slider');
        const slides = Array.from(root.querySelectorAll('.hero-slide'));
        const prevBtn = root.querySelector('.hero-prev');
        const nextBtn = root.querySelector('.hero-next');
        const dotsWrap = root.querySelector('.hero-dots');

        let idx = 0,
            timer = null,
            hovering = false;
        const DURATION = 5000;

        slides.forEach((_, i) => {
            const b = document.createElement('button');
            b.className = 'hero-dot' + (i === 0 ? ' is-active' : '');
            b.type = 'button';
            b.setAttribute('role', 'tab');
            b.setAttribute('aria-label', `Go to slide ${i+1}`);
            b.addEventListener('click', () => go(i, true));
            dotsWrap.appendChild(b);
        });
        const dots = Array.from(dotsWrap.children);

        function go(n, user = false) {
            slides[idx].classList.remove('is-active');
            dots[idx].classList.remove('is-active');
            idx = (n + slides.length) % slides.length;
            slides[idx].classList.add('is-active');
            dots[idx].classList.add('is-active');
            if (user) restart();
        }
        const next = () => go(idx + 1);
        const prev = () => go(idx - 1);

        function start() {
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
            stop();
            timer = setInterval(() => {
                if (!hovering) next();
            }, DURATION);
        }

        function stop() {
            if (timer) clearInterval(timer);
            timer = null;
        }

        function restart() {
            stop();
            start();
        }

        nextBtn.addEventListener('click', next);
        prevBtn.addEventListener('click', prev);
        root.addEventListener('mouseenter', () => {
            hovering = true;
        });
        root.addEventListener('mouseleave', () => {
            hovering = false;
        });

        root.setAttribute('tabindex', '0');
        root.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') next();
            if (e.key === 'ArrowLeft') prev();
        });

        let startX = 0,
            dx = 0;
        root.addEventListener('touchstart', e => {
            startX = e.touches[0].clientX;
            dx = 0;
        }, {
            passive: true
        });
        root.addEventListener('touchmove', e => {
            dx = e.touches[0].clientX - startX;
        }, {
            passive: true
        });
        root.addEventListener('touchend', () => {
            if (Math.abs(dx) > 50)(dx < 0 ? next() : prev());
        });

        start();
        document.addEventListener('visibilitychange', () => {
            document.hidden ? stop() : start();
        });
    })();
</script>