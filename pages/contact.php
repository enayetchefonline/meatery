<!-- ================== PAGE TITLE ================== -->
<div class="page-title">
    <div class="tf-container w-1712">
        <div class="wrap-content">
            <div class="content">
                <h1 class="fw-bold">Contact Us</h1>
                <p class="sub-title text-17-28">
                    Whether you’re booking a table, planning a special event, or simply have a question, we’re here to
                    help. <br />
                    Get in touch and let us make your dining experience unforgettable.
                </p>
                <div class="breadcrum-wrap">
                    <ul class="breadcrums">
                        <li><a href="index-2.html" class="font-cerebri">HOME</a></li>
                        <li><i class="icon-arrow-right2"></i></li>
                        <li>
                            <p>CONTACT US</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page-title -->

<!-- ================== MAIN CONTENT ================== -->
<div class="main-content tf-spacing-1">

    <!-- section contact us (info cards) -->
    <div class="section-contact-us tf-spacing-3">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="wg-box-icon style-2 wow fadeInUp" data-wow-delay="0s">
                        <div class="image-icon">
                            <img src="icons/phone-book.svg" alt="">
                        </div>
                        <h3 class="title fw-bold">Contact Us</h3>
                        <p class="phone-number">Phone: 020 7123 4567</p>
                        <p class="email">Email: info@themeatery.co.uk</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="wg-box-icon style-2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="image-icon">
                            <img src="icons/address-home.svg" alt="">
                        </div>
                        <h3 class="title fw-bold">Address Here</h3>
                        <p class="address">
                            The Meatery <br />
                            21 Edgware Road, <br />
                            London W2 2JE
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="wg-box-icon style-2 none-after wow fadeInUp" data-wow-delay="0.2s">
                        <div class="image-icon">
                            <img src="icons/time-sand.svg" alt="">
                        </div>
                        <h3 class="title fw-bold">Open Time</h3>
                        <p class="time-open">Monday - Sunday : 12.00pm - 12.00am</p>
                        <p class="time-close">Last reservations 11pm</p>
                        <p class="time-close">Last orders 11.30pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /section contact us (info cards) -->

    <!-- ================== CONTACT FORM (re-using Reservation form styles) ================== -->
    <section class="section-form-contact-us mt-5">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section has-line wow fadeInUp" data-wow-delay="0s">
                        <p class="sub-title">CONTACT US</p>
                        <h2 class="title">Send Us a Message</h2>
                    </div>

                    <!-- Same structure/classes as your reservation form -->
                    <form class="reservation" action="#" method="post" novalidate>
                        <div class="reservation-card" role="group" aria-labelledby="contactTitle">
                            <div class="reservation-head">
                                <h3 id="contactTitle">We’d love to hear from you</h3>
                                <p>Fill in your details and message. We’ll get back to you shortly.</p>
                            </div>

                            <div class="reservation-body grid grid-2">
                                <div class="field">
                                    <label class="label" for="c_full_name">Full Name</label>
                                    <input id="c_full_name" name="full_name" class="control" type="text"
                                        placeholder="John Doe" required />
                                </div>

                                <div class="field">
                                    <label class="label" for="c_email">Email</label>
                                    <input id="c_email" name="email" class="control" type="email"
                                        placeholder="you@example.com" required />
                                </div>

                                <div class="field" style="grid-column: 1 / -1;">
                                    <label class="label" for="c_phone">Phone Number</label>
                                    <input id="c_phone" name="phone" class="control" type="tel"
                                        placeholder="+8801XXXXXXXXX" required />
                                </div>

                                <div class="field" style="grid-column: 1 / -1;">
                                    <label class="label" for="c_message">Message</label>
                                    <textarea id="c_message" name="message" class="control"
                                        placeholder="Tell us how we can help…" required></textarea>
                                </div>
                            </div>

                            <div class="reservation-footer">
                                <button class="btn btn-primary" type="submit">Send Message</button>
                                <button class="btn btn-ghost" type="reset">Clear</button>
                                <span class="policy">We typically reply within 24 hours.</span>

                                <!-- Optional inline messages -->
                                <span class="note ok" id="c-msg-ok">Thanks! Your message has been sent.</span>
                                <span class="note err" id="c-msg-err">Please fill all required fields.</span>
                            </div>
                        </div>
                    </form>
                    <!-- /FORM -->
                </div>
            </div>
        </div>
    </section>
    <!-- /CONTACT FORM -->
</div>
<!-- ================== /MAIN CONTENT ================== -->

<!-- ================== FORM STYLES (same as Reservation) ================== -->
<style>
    .reservation {
        --bg: #0f172a;
        --card: #111827;
        --ink: #e5e7eb;
        --muted: #9ca3af;
        --line: #1f2937;
        --brand: #d4af37;
        --brand-ink: #0b1020;
        --ok: #10b981;
        --err: #ef4444;
        max-width: 920px;
        margin: 2.2rem auto 4rem;
        padding: 0 1rem;
        color: var(--ink)
    }

    .reservation-card {
        background: linear-gradient(180deg, rgba(255, 255, 255, .02), rgba(255, 255, 255, .01));
        border: 1px solid var(--line);
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .25);
        overflow: hidden
    }

    .reservation-head {
        padding: 1.35rem 1.35rem .75rem;
        border-bottom: 1px dashed var(--line)
    }

    .reservation-head h3 {
        margin: 0;
        font-size: 2.35rem;
        letter-spacing: .4px;
        line-height: 1.15
    }

    .reservation-head p {
        margin: .45rem 0 1.2rem;
        color: var(--muted);
        font-size: 1.5rem;
        line-height: 1.4
    }

    .reservation-body {
        padding: 1.35rem
    }

    .field input {
        background-color: var(--card) !important;
        padding: 0 20px !important
    }

    .grid {
        display: grid;
        gap: 1.1rem
    }

    @media (min-width:640px) {
        .grid-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .grid-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr))
        }
    }

    .field {
        display: flex;
        flex-direction: column;
        gap: .55rem
    }

    .label {
        font-size: 1.5rem;
        color: var(--muted)
    }

    .control {
        appearance: none;
        width: 100%;
        padding: 1rem 1.05rem;
        border-radius: 12px;
        border: 1px solid var(--line);
        background: var(--card);
        color: var(--ink);
        outline: none;
        font-size: 1.05rem;
        line-height: 1.5;
        transition: border-color .2s, box-shadow .2s
    }

    .control::placeholder {
        color: #6b7280
    }

    .control:focus {
        border-color: var(--brand);
        box-shadow: 0 0 0 3px rgba(212, 175, 55, .15)
    }

    .select {
        position: relative
    }

    .select:after {
        content: "▾";
        position: absolute;
        right: .95rem;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        color: var(--muted);
        font-size: 1rem
    }

    select.control {
        padding-right: 2.2rem;
        background-image: none
    }

    .hint {
        font-size: .98rem;
        color: var(--muted)
    }

    .reservation-footer {
        display: flex;
        gap: .9rem;
        padding: 1.35rem;
        border-top: 1px dashed var(--line);
        align-items: center;
        flex-wrap: wrap
    }

    .btn {
        cursor: pointer;
        border: none;
        border-radius: 999px;
        padding: 1rem 1.35rem;
        font-weight: 700;
        letter-spacing: .3px;
        font-size: 1.05rem;
        transition: transform .06s ease, box-shadow .2s ease, background .2s ease
    }

    .btn-primary {
        background: linear-gradient(180deg, var(--brand), #b98f26);
        color: var(--brand-ink);
        box-shadow: 0 8px 20px rgba(212, 175, 55, .25)
    }

    .btn-primary:hover {
        transform: translateY(-1px)
    }

    .btn-ghost {
        background: transparent;
        color: var(--ink);
        border: 1px solid var(--line)
    }

    .policy {
        margin-left: auto;
        font-size: 1rem;
        color: var(--muted)
    }

    .note {
        display: none;
        font-size: 1rem;
        margin-left: .5rem
    }

    .note.ok {
        color: var(--ok)
    }

    .note.err {
        color: var(--err)
    }

    .note.show {
        display: inline
    }

    textarea.control {
        min-height: 130px;
        resize: vertical
    }

    @media (max-width:480px) {
        .btn {
            width: 100%
        }

        .policy {
            flex-basis: 100%;
            margin-left: 0
        }
    }
</style>