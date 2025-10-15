<!-- ================== PAGE TITLE ================== -->
<!-- page-title -->
<div class="page-title">
    <div class="tf-container w-1712">
        <div class="wrap-content">
            <div class="content">
                <h1 class="fw-bold">Reservation</h1>
                <p class="sub-title text-17-28">
                    Whether you’re booking a table, planning a special event, or simply have a question, we’re here to
                    help. <br>
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

<!-- ================== RESERVATION SECTION ================== -->
<section class="section-form-contact-us mt-5">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-section has-line wow fadeInUp" data-wow-delay="0s">
                    <p class="sub-title">RESERVATION</p>
                    <h2 class="title">Book a Table</h2>
                </div>

                <!-- ================== FORM ================== -->
                <form class="reservation" action="#" method="post" novalidate>
                    <div class="reservation-card" role="group" aria-labelledby="reserveTitle">
                        <div class="reservation-head">
                            <h3 id="reserveTitle">Reserve Your Table</h3>
                            <p>Select date, time, and party size. We’ll confirm shortly.</p>
                        </div>

                        <div class="reservation-body grid grid-2">
                            <!-- Contact -->
                            <div class="field">
                                <label class="label" for="full_name">Full Name</label>
                                <input id="full_name" name="full_name" class="control" type="text"
                                    placeholder="John Doe" required />
                            </div>
                            <div class="field">
                                <label class="label" for="phone">Phone Number</label>
                                <input id="phone" name="phone" class="control" type="tel" placeholder="+8801XXXXXXXXX"
                                    required />
                            </div>
                            <div class="field">
                                <label class="label" for="email">Email</label>
                                <input id="email" name="email" class="control" type="email"
                                    placeholder="you@example.com" />
                            </div>

                            <!-- Booking specifics -->
                            <div class="field">
                                <label class="label" for="date">Date</label>
                                <input id="date" name="date" class="control" type="date" required />
                                <span class="hint">Open Mon–Sun</span>
                            </div>

                            <div class="field">
                                <label class="label" for="time">Time</label>
                                <input id="time" name="time" class="control" type="time" required />
                            </div>

                            <div class="field select">
                                <label class="label" for="guests">Guests</label>
                                <select id="guests" name="guests" class="control" required>
                                    <option value="" disabled selected>Select guests</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8+</option>
                                </select>
                            </div>

                            <div class="field select">
                                <label class="label" for="occasion">Occasion (optional)</label>
                                <select id="occasion" name="occasion" class="control">
                                    <option value="" selected>None</option>
                                    <option>Birthday</option>
                                    <option>Anniversary</option>
                                    <option>Business</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="field" style="grid-column: 1 / -1;">
                                <label class="label" for="requests">Special requests (optional)</label>
                                <textarea id="requests" name="requests" class="control"
                                    placeholder="High chair, nut allergy, window seat…"></textarea>
                            </div>
                        </div>

                        <div class="reservation-footer">
                            <button class="btn btn-primary" type="submit">Confirm Reservation</button>
                            <button class="btn btn-ghost" type="reset">Clear</button>
                            <span class="policy">By booking, you agree to our reservation policy.</span>

                            <!-- Optional inline messages -->
                            <span class="note ok" id="msg-ok">Request sent! We’ll confirm by SMS/email.</span>
                            <span class="note err" id="msg-err">Please fill all required fields.</span>
                        </div>
                    </div>
                </form>
                <!-- /FORM -->
            </div>
        </div>
    </div>
</section>

<!-- ================== FORM STYLES (NO BOOTSTRAP) ================== -->
<style>
    /* --- Reservation Form (scoped) --- */
    .reservation {
        --bg: #0f172a;
        /* slate-900 */
        --card: #111827;
        /* gray-900 */
        --ink: #e5e7eb;
        /* gray-200 */
        --muted: #9ca3af;
        /* gray-400 */
        --line: #1f2937;
        /* gray-800 */
        --brand: #d4af37;
        /* warm gold */
        --brand-ink: #0b1020;
        --ok: #10b981;
        --err: #ef4444;

        max-width: 920px;
        margin: 2.2rem auto 4rem;
        padding: 0 1rem;
        color: var(--ink);
    }

    .reservation-card {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
        border: 1px solid var(--line);
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        overflow: hidden;
    }

    .reservation-head {
        padding: 1.35rem 1.35rem 0.75rem;
        border-bottom: 1px dashed var(--line);
    }

    /* You asked for bigger titles – keeping your values */
    .reservation-head h3 {
        margin: 0;
        font-size: 2.35rem;
        /* your updated size */
        letter-spacing: .4px;
        line-height: 1.15;
    }

    .reservation-head p {
        margin: .45rem 0 1.2rem;
        color: var(--muted);
        font-size: 1.5rem;
        /* your updated size */
        line-height: 1.4;
    }

    .reservation-body {
        padding: 1.35rem;
    }

    .field input {
        background-color: var(--card) !important;
        padding: 0px 20px !important;
    }

    .grid {
        display: grid;
        gap: 1.1rem;
        /* slightly larger spacing */
    }

    @media (min-width: 640px) {
        .grid-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .grid-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }

    .field {
        display: flex;
        flex-direction: column;
        gap: .55rem;
    }

    /* Bigger label text */
    .label {
        font-size: 1.5rem;
        /* up from .9rem */
        color: var(--muted);
    }

    /* Bigger input/select/textarea text & padding */
    .control {
        appearance: none;
        width: 100%;
        padding: 1rem 1.05rem;
        /* up from .8rem .9rem */
        border-radius: 12px;
        /* a bit larger corner */
        border: 1px solid var(--line);
        background: var(--card);
        color: var(--ink);
        outline: none;
        font-size: 1.05rem;
        /* up from default */
        line-height: 1.5;
        transition: border-color .2s, box-shadow .2s;
    }

    .control::placeholder {
        color: #6b7280;
    }

    .control:focus {
        border-color: var(--brand);
        box-shadow: 0 0 0 3px rgba(212, 175, 55, .15);
    }

    .select {
        position: relative;
    }

    .select:after {
        content: "▾";
        position: absolute;
        right: .95rem;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        color: var(--muted);
        font-size: 1rem;
        /* match bigger control font */
    }

    select.control {
        padding-right: 2.2rem;
        background-image: none;
    }

    /* Slightly larger hint text */
    .hint {
        font-size: .98rem;
        color: var(--muted);
    }

    .reservation-footer {
        display: flex;
        gap: .9rem;
        padding: 1.35rem;
        border-top: 1px dashed var(--line);
        align-items: center;
        flex-wrap: wrap;
    }

    .btn {
        cursor: pointer;
        border: none;
        border-radius: 999px;
        padding: 1rem 1.35rem;
        /* larger buttons */
        font-weight: 700;
        letter-spacing: .3px;
        font-size: 1.05rem;
        /* bigger button text */
        transition: transform .06s ease, box-shadow .2s ease, background .2s ease;
    }

    .btn-primary {
        background: linear-gradient(180deg, var(--brand), #b98f26);
        color: var(--brand-ink);
        box-shadow: 0 8px 20px rgba(212, 175, 55, .25);
    }

    .btn-primary:hover {
        transform: translateY(-1px);
    }

    .btn-ghost {
        background: transparent;
        color: var(--ink);
        border: 1px solid var(--line);
    }

    /* Larger policy text for readability */
    .policy {
        margin-left: auto;
        font-size: 1rem;
        /* up from .85rem */
        color: var(--muted);
    }

    /* Success / error messages (hidden by default, show with the 'show' class) */
    .note {
        display: none;
        font-size: 1rem;
        /* larger */
        margin-left: .5rem;
    }

    .note.ok {
        color: var(--ok);
    }

    .note.err {
        color: var(--err);
    }

    .note.show {
        display: inline;
    }

    /* Textarea */
    textarea.control {
        min-height: 130px;
        /* a bit taller */
        resize: vertical;
    }

    /* Mobile niceties: ensure large tap targets */
    @media (max-width: 480px) {
        .btn {
            width: 100%;
        }

        .policy {
            flex-basis: 100%;
            margin-left: 0;
        }
    }
</style>