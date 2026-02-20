<?php
session_start();
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>About Us | Bbr Dolce vita</title>

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

<body>

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
            height: 300px;
            /* adjust height as needed */
            background: url('./dist/images/banner3.jpg') center center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .banner .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            /* dark overlay for text readability */
            z-index: 1;
        }

        .banner .container {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .banner-head {
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
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

    <?php include 'inc/header.php'; ?>

    <div class="banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner-head">About Us</div>
        </div>
    </div>
    <br><br><br>
    <section class="py-1">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5" data-aos="fade-down">
                <h2 class="fw-bold" style="color:#1a9acd;">Meet The Host</h2>
                <hr class="mx-auto" style="width: 60px; border-top: 3px solid #1a9acd;">
            </div>

            <!-- Host Content -->
            <div class="row align-items-center g-5">

                <!-- Host Image -->
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="./dist/images/host.png" alt="Libet Sterling" class="img-fluid rounded shadow-lg">
                </div>

                <!-- Host Details -->
                <div class="col-md-8 mt-2" data-aos="fade-left" data-aos-duration="1000">
                    <h4 class="fw-bold mb-1 pt-2">Libet Sterling</h4>
                    <h5 class="text-muted fst-italic mb-3">Founder & Retreat Curator</h5>
                    <p class="text-muted" style="line-height: 1.8;">
                        Libet Sterling, Founder of BBR Dolce Vita, is an American former New York fashion designer who
                        began her
                        career manufacturing in India in the 1980s. Now a highly trained psychotherapist living in Italy
                        and
                        educated in London, she brings a unique blend of creativity and wellness expertise to her
                        retreats.
                    </p>
                    <p class="text-muted" style="line-height: 1.8;">
                        After earning her yoga teacher certification at Kranti Yoga School in Goa in 2019, Libet
                        rediscovered her
                        passion for beauty and holistic living. She has successfully hosted private retreats in Saint
                        Tropez,
                        Sotogrande, and Rishikesh, and now offers curated wellness experiences from her villa in
                        Imperia, Italy.
                    </p>
                    <p class="text-muted" style="line-height: 1.8;">
                        As an Airbnb Superhost in Imperia, Libet is devoted to welcoming guests, designing inspiring
                        retreats, and
                        cultivating lasting relationships.
                    </p>
                </div>

            </div>

        </div>
    </section><br><br><br><br>

    <div class="container">
        <div class="about_company">
            <div class="row">
                <div class="col-md-7">
                    <div class="about_company-left">
                        <div class="sub-Heading" style="text-align: left;">
                            <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> ABOUT US
                            <span><img src="./dist/images/ar-r.png" class="img-fluid"></span>
                        </div>

                        <div class="about_company-left-head">
                            A Peaceful Space for Mindful Living & Inner Balance
                        </div>

                        <p style="margin-bottom: 10px;">
                            Our retreat was created as a sanctuary for rest, reflection, and renewal.
                            Rooted in the principles of mindfulness and holistic wellness, we offer
                            thoughtfully designed yoga experiences that support both physical and
                            emotional well-being.
                        </p>

                        <p style="margin-bottom: 10px;">
                            From guided yoga sessions and meditation practices to calming environments
                            and mindful living experiences, everything we offer is carefully curated
                            to help you slow down, reconnect, and restore balance. Our approach blends
                            ancient wisdom with modern comfort to create meaningful, lasting impact.
                        </p>

                        <p style="margin-bottom: 10px;">
                            At the heart of our retreat is a deep commitment to presence, care, and
                            personal transformation supporting every guest on their unique wellness
                            journey.
                        </p>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="about_company-left-row">
                                    <div class="about_company-left-row-nav">
                                        <div class="about_company-left-row-navL">
                                            <iconify-icon icon="carbon:storm-tracker" width="25"
                                                height="25"></iconify-icon>
                                        </div>
                                        <div class="about_company-left-row-navR">
                                            <div class="about_company-left-row-navR-head">
                                                Guided Experiences
                                            </div>
                                            <p>
                                                Expert-led yoga and mindfulness sessions designed to
                                                support clarity, relaxation, and inner growth
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="about_company-right-row">
                                    <ul>
                                        <li>Mindful Yoga & Meditation Practices</li>
                                        <li>Peaceful Natural Environment</li>
                                        <li>Holistic Wellness & Self-Care Focus</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-5">
                    <div class="about_company-right carder">
                        <img src="./dist/images/DSC06023.jpg" class="img-fluid img_carder">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="why_choose">
            <div class="row">
                <!-- Left side -->
                <div class="col-md-5">
                    <div class="why_choose_left">
                        <div class="sub-Heading" style="text-align: left;">
                            <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> WHY CHOOSE US <span><img
                                    src="./dist/images/ar-r.png" class="img-fluid"></span>
                        </div>
                        <div class="why_choose_left-head">Mindful Experiences, Lasting Well-Being</div>

                        <div class="why_choose_left-progress">
                            <div class="why_choose_left-progress-details">
                                <div class="why_choose_left-progress-detailsss">Guest Satisfaction</div>
                                <div class="why_choose_left-progress-detailsss">98%</div>
                            </div>
                            <div class="why_choose_left-progress-file">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0"
                                        aria-valuemax="100" style="width:98%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="why_choose_left-progress">
                            <div class="why_choose_left-progress-details">
                                <div class="why_choose_left-progress-detailsss">Holistic Well-Being Programs</div>
                                <div class="why_choose_left-progress-detailsss">95%</div>
                            </div>
                            <div class="why_choose_left-progress-file">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                        aria-valuemax="100" style="width:95%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="why_choose_left-progress">
                            <div class="why_choose_left-progress-details">
                                <div class="why_choose_left-progress-detailsss">Customized Retreat Experience</div>
                                <div class="why_choose_left-progress-detailsss">97%</div>
                            </div>
                            <div class="why_choose_left-progress-file">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="0"
                                        aria-valuemax="100" style="width:97%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="why_choose_left-progress">
                            <div class="why_choose_left-progress-details">
                                <div class="why_choose_left-progress-detailsss">Serene Italian Riviera Location</div>
                                <div class="why_choose_left-progress-detailsss">99%</div>
                            </div>
                            <div class="why_choose_left-progress-file">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0"
                                        aria-valuemax="100" style="width:99%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side -->
                <div class="col-md-7">
                    <div class="why_choose_right">
                        <div class="row">

                            <!-- Icon 1: Location / Retreat Setting -->
                            <div class="col-md-6">
                                <div class="why_choose_right-row">
                                    <div class="why_choose_right-row-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 21s-6-5.5-6-10a6 6 0 0 1 12 0c0 4.5-6 10-6 10z" />
                                            <circle cx="12" cy="11" r="2" />
                                        </svg>
                                    </div>
                                    <div class="why_choose_right-row-head">Idyllic Italian Riviera Location</div>
                                    <p>Our retreat is nestled in a peaceful seaside setting, offering breathtaking views
                                        and tranquility for your practice.</p>
                                    <!-- <div class="why_choose_right-row-bg">
                                        <img src="./dist/images/ch1.png" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>

                            <!-- Icon 2: Expert Team -->
                            <div class="col-md-6">
                                <div class="why_choose_right-row">
                                    <div class="why_choose_right-row-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="7" r="4" />
                                            <path d="M6 21v-2a6 6 0 0 1 12 0v2" />
                                        </svg>
                                    </div>
                                    <div class="why_choose_right-row-head">Certified Yoga & Pilates Instructors</div>
                                    <p>Our experienced instructors guide you safely through tailored sessions, ensuring
                                        personal growth and well-being.</p>
                                    <!-- <div class="why_choose_right-row-bg">
                                        <img src="./dist/images/ch2.png" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>

                            <!-- Icon 3: 24/7 Support -->
                            <div class="col-md-6">
                                <div class="why_choose_right-row">
                                    <div class="why_choose_right-row-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987H7.898v-2.891h2.54V9.797c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.462h-1.26c-1.243 0-1.63.771-1.63 1.562v1.875h2.773l-.443 2.891h-2.33v6.987C18.343 21.128 22 16.991 22 12z" />
                                        </svg>
                                    </div>
                                    <div class="why_choose_right-row-head">Personalized Guest Support</div>
                                    <p>Our retreat staff is available throughout your stay to assist with your schedule,
                                        wellness needs, and special requests.</p>
                                    <!-- <div class="why_choose_right-row-bg">
                                        <img src="./dist/images/ch3.png" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>

                            <!-- Icon 4: Comfort / Accommodation -->
                            <div class="col-md-6">
                                <div class="why_choose_right-row">
                                    <div class="why_choose_right-row-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 12l9-9 9 9-9 9-9-9z" />
                                            <path d="M12 3v18" />
                                        </svg>
                                    </div>
                                    <div class="why_choose_right-row-head">Comfortable, Restful Rooms</div>
                                    <p>Our accommodations provide a serene and cozy environment, helping you fully
                                        unwind and recharge.</p>
                                    <!-- <div class="why_choose_right-row-bg">
                                        <img src="./dist/images/ch4.png" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="track-shipments" style="padding-bottom: 60px;">
        <div class="container">
            <div class="sub-Heading" style="text-align: center;">
                <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> OUR CORE VALUES <span><img
                        src="./dist/images/ar-r.png" class="img-fluid"></span>
            </div>

            <div class="why_choose_left-head" style="color: #FFFFFF;">
                Creating Meaningful Experiences for Mind, Body & Soul
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="msv-row">
                        <div class="msv-row-head">Our Mission</div>
                        <div class="msv-row-line"></div>
                        <p>
                            To provide a peaceful and nurturing space where individuals can reconnect
                            with themselves through yoga, mindfulness, and nature. We are dedicated
                            to guiding every guest toward balance, clarity, and inner well-being.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="msv-row">
                        <div class="msv-row-head">Our Vision</div>
                        <div class="msv-row-line"></div>
                        <p>
                            To become a trusted retreat destination that inspires mindful living,
                            personal growth, and holistic wellness creating lasting impact far beyond
                            the mat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'inc/process.php'; ?>


    <?php include 'inc/footer.php'; ?>

</body>

</html>