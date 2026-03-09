<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | Bbr Dolce vita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="dist/css/bootstrap.css">

    <link href="dist/font-awesome/css/all.css" rel="stylesheet" type="text/css">

    <!-- <link rel="icon" href="./dist/images/fav.png" /> -->

    <link href="dist/css/animate.css" rel="stylesheet">

    <link href="dist/css/owl.carousel.css" rel="stylesheet">

    <link href="dist/css/owl.theme.default.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="dist/js/jquery.3.4.1.min.js"></script>

    <script src="dist/js/popper.js" type="text/javascript"></script>

    <script src="dist/js/bootstrap.js" type="text/javascript"></script>

    <script src="dist/js/owl.carousel.js"></script>

    <script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>

    <!-- Main Stylesheet -->

    <link href="dist/style.css" rel="stylesheet" type="text/css" media="all">

    <script src="dist/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</head>
<style>
    #navbar {
        font-size: 14px;
        padding-top: 10px;
        padding-bottom: 10px;
        position: relative;
        top: 0;
        width: 100%;
        border-bottom: none;
        background-color: #013D5FB2;
    }

    .banner {
        position: relative;
        width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        /* vertically center text */
        justify-content: center;
        /* horizontally center text */
        color: #fff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        overflow: hidden;
    }

    .banner-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
        /* ensures the whole image fits, no cropping */
    }

    .banner .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }

    .banner .container {
        position: absolute;
        /* place container over image */
        z-index: 2;
        text-align: center;
        padding: 0 15px;
    }

    .banner-head {
        font-size: 3rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    /* Tablet */
    @media (max-width: 992px) {
        .banner-head {
            font-size: 2.5rem;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .banner-head {
            font-size: 1.8rem;
        }
    }

    .card {
        background-color: #ffffff;
    }

    .form-control:focus {
        border-color: #029be0;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.15);
    }

    .btn-primary {
        background-color: #029be0;
        border: none;
    }

    .btn-primary:hover {
        background-color: #029be0;
    }

    .included-list li {
        padding: 8px 0;
        position: relative;
        padding-left: 25px;
    }

    .included-list li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #029be0;
        font-weight: bold;
    }

    .not-included-list li {
        padding: 8px 0;
        position: relative;
        padding-left: 25px;
        color: #555;
    }

    .not-included-list li::before {
        content: "✖";
        position: absolute;
        left: 0;
        color: #dc3545;
        font-weight: bold;
    }

    .form-check-input:checked {
        background-color: #029be0;
        border-color: #029be0;
    }

    .btn-primary {
        background-color: #029be0;
        border: none;
    }

    .btn-primary:hover {
        background-color: #029be0;
    }

    .card {
        background-color: #ffffff;
    }

    /* Make mobile cart icon white */
    @media (max-width: 767.98px) {
        .d-md-none svg path {
            stroke: #ffffff !important;
        }

        .d-md-none svg circle {
            fill: #ffffff !important;
        }
    }
</style>

<body>
    <?php include 'inc/header.php'; ?>
    <div class="banner">
        <div class="overlay"></div>
        <img src="./dist/images/banner3.jpg" alt="Banner Image" class="banner-img">
        <div class="container">
            <div class="banner-head">BOOKING FORM</div>
            <span>BOOK YOUR WELLNESS RETREAT</span><br>
            <span>BBR DOLCE VITA, PILATES RETREAT MAY 14th-17th, 2025</span>
        </div>
    </div>
    <br>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-sm border-0 rounded-4 p-4 p-md-5">

                    <div class="mb-4">
                        <p class="lead">
                            Complete the form below to secure your place at our exclusive Betsy Boutique Retreat in
                            beautiful Imperia, Italy.
                        </p>
                        <p class="text-muted">
                            Enjoy twice-daily sessions featuring the original Lotte Berk Pilates Method—designed to
                            sculpt,
                            strengthen, and align—alongside a curated blend of Vinyasa, Ashtanga, and Jivamukti yoga
                            styles
                            to energize and elevate your practice.
                        </p>
                    </div>

                    <form method="post" action="proc-retreatbooking">

                        <!-- Personal Information -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <input type="text" name="firstname" class="form-control" placeholder="First Name"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name"
                                    required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email Address"
                                    required>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="city" class="form-control" placeholder="City">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="postcode" class="form-control" placeholder="Post Code">
                            </div>
                            <div class="col-12">
                                <input type="text" name="country" class="form-control" placeholder="Country">
                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- Skill Level -->
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3">Your Pilates or Yoga Skill Level</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="skillLevel" value="beginner"
                                    id="beginner">
                                <label class="form-check-label" for="beginner">Beginner</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="skillLevel" value="intermediate"
                                    id="intermediate">
                                <label class="form-check-label" for="intermediate">Intermediate</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="skillLevel" value="advanced"
                                    id="advanced">
                                <label class="form-check-label" for="advanced">Advanced</label>
                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- Additional Treatments -->
                        <div class="mb-4">
                            <h5 class="fw-bold mb-2">Additional Treatments</h5>
                            <p class="small text-muted">
                                <strong>Note:</strong> Treatments are not included in your retreat package and will be
                                charged separately.
                            </p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="manicure" id="manicure">
                                <label class="form-check-label" for="manicure">Manicure</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pedicure" id="pedicure">
                                <label class="form-check-label" for="pedicure">Pedicure</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tissue-massage"
                                    id="tissueMassage">
                                <label class="form-check-label" for="tissueMassage">Deep Tissue Massage</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="facial" id="facial">
                                <label class="form-check-label" for="facial">Facial</label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill">
                                Secure My Place
                            </button>
                        </div>

                    </form>

                    <hr>

                    <h5 class="fw-bold mb-3">What's Included</h5>
                    <ul class="list-unstyled included-list">
                        <li>Free high-speed WiFi internet access throughout your stay</li>
                        <li>All Pilates classes and group activities as per schedule</li>
                        <li>Yoga sessions</li>
                        <li>Accommodation in your selected suite</li>
                        <li>Meals prepared by our onsite chef (as specified in the schedule)</li>
                        <li>
                            All taxis during venue excursions are included in your retreat package.
                            This includes transportation to Ventimiglia Market, Cala del Forte Marina, and Bordighera
                        </li>
                        <li>Complimentary parking lot access for the duration of your stay</li>
                    </ul>

                    <h5 class="fw-bold mb-3">What's Not Included</h5>
                    <ul class="list-unstyled not-included-list">
                        <li>All additional trips and private sessions</li>
                        <li>Massages and treatments – Pricing upon request</li>
                        <li>Red/White and champagne for sale at the BBR villa shop €20 per bottle.</li>
                        <li>Airfare and transportation to/from the retreat</li>
                        <li>Travel insurance (required by Italian law for non-residents visiting Italy)</li>
                        <li>Visa requirements for non-EU citizens</li>
                        <li>Meals outside retreat premises</li>
                        <li>
                            "Spa day for your hair?" Yes, please. Treat yourself to a sleek, smooth,
                            or bouncy finish. Blow dry add-on: €25,00
                        </li>
                    </ul>

                    <br>
                    <h5>Contact Information</h5>
                    <p>For additional inquiries and detailed information about accommodations, pricing, and
                        availability, please contact us directly: </p>

                    <h5>Contact Libet Sterling </h5>
                    <p><b>Email: </b>info@bbrdolcevita.com</p>
                    <p><b>Phone: </b>+39 388 159 5498</p>
                    <p><b>* For special dietary requirements, please contact Libet directly *</b></p>
                    <br>
                    <h5>Contact Camilla Sparkes </h5>
                    <p><b>Email: </b>cjsparkes@hotmail.com</p>
                    <p><b>Phone: </b>+44 771 013 3429</p>
                    <br>
                    <h5>Contact Lucy Moore </h5>
                    <p><b>Email: </b>lucymooresw6@gmail.com</p>
                    <p><b>Phone: </b>+33 650 398 905 | +44 7777 944040</p>

                </div>
                <form method="post" action="proc_booking_consent.php" class="mt-4">

                    <div class="card border-0 shadow-sm rounded-4 p-4">

                        <!-- Consent Checkboxes -->
                        <div class="mb-4">

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="privacy_consent"
                                    id="privacyConsent" required>

                                <label class="form-check-label" for="privacyConsent">
                                    I consent to <strong>BBR Dolce Vita</strong> processing my personal data
                                    as explained in the Privacy Policy.
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="marketing_consent"
                                    id="marketingConsent" required>

                                <label class="form-check-label" for="marketingConsent">
                                    I would like to receive marketing communications about related retreats
                                    and exclusive offers <span class="text-muted">(optional)</span>.
                                </label>
                            </div>

                        </div>

                        <hr class="my-4">

                        <!-- Join Us Section -->
                        <div class="text-center px-md-4">

                            <h5 class="fw-bold mb-3 text-uppercase">Join Us</h5>

                            <p class="text-muted mb-4">
                                Join us for a soul-nourishing retreat where you can refresh, recharge,
                                and step into pure bliss at our exclusive Pilates & Yoga retreat on
                                the Italian Riviera.
                            </p>

                            <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill">
                                Save Booking Information
                            </button>

                        </div>

                    </div>

                </form>

            </div>
        </div>
    </main><br><br>

    <?php include 'inc/footer.php'; ?>
</body>

</html>