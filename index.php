<?php
session_start();
ini_set('display_errors', 0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Home | Bbr Dolce vita</title>

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
    .experience {
        padding: 6rem 4rem;
        max-width: 1400px;
        margin: auto;
        overflow-x: hidden;
    }

    .experience-title {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 600;
        margin-bottom: 4rem;
        color: #1f2937;
        position: relative;
    }

    .experience-title::after {
        content: "";
        width: 80px;
        height: 3px;
        background: #87ceeb;
        display: block;
        margin: 1rem auto 0;
        border-radius: 10px;
    }

    .experience-gallery {
        display: flex;
        gap: 2.5rem;
        align-items: flex-end;
        justify-content: space-between;
    }

    .img-card {
        flex: 1;
        overflow: hidden;
        border-radius: 24px;
        box-shadow: 0 25px 40px rgba(0, 0, 0, 0.08);
        opacity: 0;
        transition: transform 0.9s ease, opacity 0.9s ease;
    }

    .img-card img {
        width: 100%;
        height: 360px;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .img-card:hover img {
        transform: scale(1.06);
    }

    /* Center image highlight */
    .highlight {
        transform: translateY(-40px);
    }

    .highlight img {
        height: 420px;
    }

    /* Initial animation states */
    .slide-left {
        transform: translateX(-80px);
    }

    .slide-right {
        transform: translateX(80px);
    }

    .slide-up {
        transform: translateY(80px);
    }

    /* Activated animation */
    .in-view {
        opacity: 1;
        transform: translate(0, 0);
    }

    /* Responsive */
    @media (max-width: 900px) {
        .experience-gallery {
            flex-direction: column;
            align-items: stretch;
        }

        .highlight {
            transform: none;
        }

        .img-card img {
            height: 300px;
        }
    }

    /* Make mobile cart icon white */
    @media (max-width: 767.98px) {
        .d-md-none svg path {
            stroke: #ffffff !important;
        }

        .d-md-none svg circle {
            fill: #ffffff !important;
        }

        .home-banner .card {
            padding-top: 40px;
            padding-left: 20px;
            padding-bottom: 40px;
        }

        .experience {
            margin: 5px;
        }

        .home-banner-sub {
            font-size: 16px;
            font-weight: 800;
        }

        .home-banner-head {
            font-size: 40px;
        }

        .experience {
            padding: 2rem 1rem;
        }

        .experience-title {
            font-size: 30px;
            font-weight: 700;
        }

        .experience-gallery {
            gap: 2.5rem;
        }

        .img-card {
            border-radius: 15px;
        }

        .img-card img {
            width: 100%;
            height: 300px;
        }

        .about_company-right-row ul li {
            font-weight: 600;
            font-size: 10px;
            margin: 10px 0px 0px 25px;
        }

        .img_carder {
            height: 400px;
        }

        .home_testimonial-right-iconL img {
            width: 20px;
        }

        .home_testimonial-right-iconR img {
            width: 20px;
        }

        .home_testimonial-right-content {
            width: 100%;

        }
</style>

<body>

    <?php include 'inc/header.php'; ?>

    <div class="home-banner">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner inner row w-100 mx-auto">
                <div class="carousel-item col-md-12 active">
                    <div class="card" style="background-image: url(./dist/images/slider1.png);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="home-banner-sub">
                                        A MINDFUL ESCAPE
                                    </div>
                                    <div class="home-banner-head">Restore Balance in the Italian Riviera</div>
                                    <a href="book-your-stay.php">
                                        <button>Explore the Retreat</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item col-md-12">
                    <div class="card" style="background-image: url(./dist/images/slider2.png);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="home-banner-sub">
                                        MOVEMENT & STILLNESS
                                    </div>
                                    <div class="home-banner-head">Yoga & Lotte Berk Pilates, Thoughtfully Curated</div>
                                    <a href="schedule.php">
                                        <button>View the Schedule</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item col-md-12">
                    <div class="card" style="background-image: url(./dist/images/slider3.png);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="home-banner-sub">
                                        SERENITY & RENEWAL
                                    </div>
                                    <div class="home-banner-head">A Retreat Designed for Deep Rest & Renewal</div>
                                    <a href="accommodations.php">
                                        <button>Discover Your Stay</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <h2 class="font-weight-bold" style="font-size: 2.5rem;">
                    Experience the Journey Before You Arrive
                </h2>
                <p class="text-muted" style="max-width: 700px; margin: 0 auto;">
                    Step inside our retreat and discover the atmosphere, comfort, and serenity that await you.
                </p>
            </div>

            <!-- Video -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="shadow rounded overflow-hidden">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video class="w-full h-full object-cover" autoplay muted loop playsinline controls>
                                <source src="./dist/images/bbr-video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <br><br><br><br><br>


    <div class="container">
        <div class="home-about">
            <div class="row">
                <div class="col-md-6">
                    <div class="home-about-left">
                        <div class="home-about-box">

                            <!-- Yoga -->
                            <div class="home-about-box-card" id="home-about-box-card1"
                                style="background-image: url(./dist/images/project4.png);">
                                <!-- <div class="home-about-box-content">
                                    <div class="home-about-box-content-img">
                                        <svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="5" r="2" />
                                            <path d="M12 7v5" />
                                            <path d="M5 12c2-2 4-3 7-3s5 1 7 3" />
                                            <path d="M3 20h18" />
                                        </svg>
                                    </div>
                                    <div class="home-about-box-content-head">Yoga Practice</div>
                                    <p>Daily movement for balance and calm.</p>
                                    <a href="yoga.php">Discover more &gt;&gt;</a>
                                </div> -->
                            </div>

                            <!-- Pilates -->
                            <div class="home-about-box-card" id="home-about-box-card2"
                                style="background-image: url(./dist/images/project3.png);">
                                <!-- <div class="home-about-box-content">
                                    <div class="home-about-box-content-img">
                                        <svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="10" width="18" height="4" rx="2" />
                                            <path d="M6 10V7" />
                                            <path d="M18 10V7" />
                                            <path d="M6 14v3" />
                                            <path d="M18 14v3" />
                                        </svg>
                                    </div>
                                    <div class="home-about-box-content-head">Lotte Berk Pilates</div>
                                    <p>Low-impact sessions to sculpt and energize.</p>
                                    <a href="pilates.php">Discover more &gt;&gt;</a>
                                </div> -->
                            </div>

                            <!-- Serenity -->
                            <div class="home-about-box-card" id="home-about-box-card3"
                                style="background-image: url(./dist/images/DSC05913.jpg);">
                                <!-- <div class="home-about-box-content">
                                    <div class="home-about-box-content-img">
                                        <svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 20c-3-2-6-5-6-9 3 0 5 2 6 4 1-2 3-4 6-4 0 4-3 7-6 9z" />
                                            <path d="M12 15v-5" />
                                        </svg>
                                    </div>
                                    <div class="home-about-box-content-head">Serenity & Restoration</div>
                                    <p>Intentional rest to restore harmony.</p>
                                    <a href="serenity.php">Discover more &gt;&gt;</a>
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-md-6">
                    <div class="home-about-right">
                        <div class="sub-Heading">
                            <span></span> OUR RETREAT EXPERIENCE <span></span>
                        </div>
                        <div class="home-about-right-head">
                            A Thoughtfully Curated Journey for Mind, Body & Soul
                        </div>

                        <div class="home-about-right-row">
                            <div class="home-about-right-row-L">❯</div>
                            <div class="home-about-right-row-R">Daily Yoga & Conscious Movement</div>
                        </div>

                        <div class="home-about-right-row">
                            <div class="home-about-right-row-L">❯</div>
                            <div class="home-about-right-row-R">Lotte Berk Pilates Sessions</div>
                        </div>

                        <div class="home-about-right-row">
                            <div class="home-about-right-row-L">❯</div>
                            <div class="home-about-right-row-R">BBR Vita Weekly Retreat Schedule</div>
                        </div>

                        <div class="home-about-right-row">
                            <div class="home-about-right-row-L">❯</div>
                            <div class="home-about-right-row-R">Serene Accommodations & Restful Spaces</div>
                        </div>

                        <div class="home-about-right-row">
                            <div class="home-about-right-row-L">❯</div>
                            <div class="home-about-right-row-R">Personalized, Holistic Wellness Approach</div>
                        </div>

                        <div class="home-about-right-row">
                            <div class="home-about-right-row-L">❯</div>
                            <div class="home-about-right-row-R">Immersive Italian Riviera Setting</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./home-about-script.js"></script>


    <br>
    <div class="container">
        <div class="home-how">
            <div class="sub-Heading" style="text-align: center;">
                <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> YOUR RETREAT JOURNEY <span><img
                        src="./dist/images/ar-r.png" class="img-fluid"></span>
            </div>
            <div class="home-how-head">A Thoughtful Path to Rest, Renewal, and Inner Balance.</div><br><br>

            <div class="row">
                <!-- Step 1 -->
                <div class="col-md-3">
                    <div class="home-how-row">
                        <div class="home-how-row-icon">
                            <!-- Calendar / Choice -->
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                                <circle cx="12" cy="15" r="1.5" />
                            </svg>
                        </div>
                        <div class="home-how-row-head">Choose Your Stay</div>
                        <p>Select your retreat dates, preferred room, and the experience that best supports your needs.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-3">
                    <div class="home-how-row">
                        <div class="home-how-row-icon">
                            <!-- Arrival / Location -->
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 21s-6-5.5-6-10a6 6 0 0 1 12 0c0 4.5-6 10-6 10z" />
                                <circle cx="12" cy="11" r="2" />
                            </svg>
                        </div>
                        <div class="home-how-row-head">Arrive & Settle In</div>
                        <p>Arrive at our serene Italian Riviera location and gently transition into retreat life.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-3">
                    <div class="home-how-row">
                        <div class="home-how-row-icon">
                            <!-- Flow / Balance -->
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 12c2-4 6-6 10-6 3 0 6 2 6 6s-3 6-6 6c-4 0-8-2-10-6z" />
                                <circle cx="14" cy="12" r="1.5" />
                            </svg>
                        </div>
                        <div class="home-how-row-head">Follow the Flow</div>
                        <p>Move through the BBR Vita weekly schedule, balancing yoga, pilates, rest, and reflection.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-md-3">
                    <div class="home-how-row">
                        <div class="home-how-row-icon">
                            <!-- Renewal / Lotus -->
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#7A9E9B"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 20c-3-2-6-5-6-9 3 0 5 2 6 4 1-2 3-4 6-4 0 4-3 7-6 9z" />
                                <path d="M12 15v-5" />
                            </svg>
                        </div>
                        <div class="home-how-row-head">Return Renewed</div>
                        <p>Leave feeling restored, grounded, and reconnected carrying serenity back into daily life.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- <div class="track-shipments">
        <div class="container">
            <form action="tracking-order.php" method="post">
                <div class="track-shipments-head">Track Your Shipment</div>
                <input type="text" name="tracking_no" placeholder="Enter Tracking Number" style="margin-bottom: 20px;"
                    required>
                <input type="mail" name="email" placeholder="Enter Email Address" required>
                <div class="btn-pry" style="margin-top: 20px;">
                    <button type="submit">Track & Trace</button>
                </div>
            </form>
        </div>
    </div> -->
    <br><br><br>
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

    <!-- gallery -->

    <section class="experience position-relative">
        <h3 class="experience-title text-center mb-5">Experience Like No Other</h3>

        <div class="experience-gallery d-flex justify-content-center flex-wrap gap-3">
            <div class="img-card slide-left">
                <img src="dist/images/DSC05916.jpg" alt="Yoga experience">
            </div>

            <div class="img-card slide-up highlight">
                <img src="dist/images/New Project (1).png" alt="Yoga retreat">
            </div>

            <div class="img-card slide-right">
                <img src="dist/images/DSC06029.jpg" alt="Wellness retreat">
            </div>
        </div>

        <br>
        <!-- Centered Button -->
        <div class="text-center mt-4">
            <a href="gallery" class="btn btn-primary btn-lg">Photo Gallery</a>
        </div>
    </section>

    <br><br>


    <div class="container">
        <div class="about_company">
            <div class="row">
                <div class="col-md-7">
                    <div class="about_company-left">
                        <div class="sub-Heading" style="text-align: left;">
                            <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> ABOUT THE EXPERIENCE
                            <span><img src="./dist/images/ar-r.png" class="img-fluid"></span>
                        </div>
                        <div class="about_company-left-head">A Mindful Yoga & Wellness Retreat Experience</div>
                        <p>
                            Our thoughtfully designed yoga retreats and serene accommodations offer a holistic approach
                            to well-being, blending mindful movement, restorative practices, and peaceful living spaces
                            to support balance, clarity, and inner transformation.
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
                                            <div class="about_company-left-row-navR-head">Mindful Guidance</div>
                                            <p>
                                                Experience personalized guidance through daily yoga sessions,
                                                meditation, and mindful practices designed for all levels.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn-sec">
                                        <a href="about"><button>Read more</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="about_company-right-row">
                                    <ul>
                                        <li>Daily Guided Yoga & Meditation Sessions</li>
                                        <li>Peaceful Retreat Accommodations</li>
                                        <li>Holistic Wellness & Mindfulness Practices</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_company-right carder">
                        <img src="./dist/images/DSC05899.jpg" class="img-fluid img_carder">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="home-industries">
            <div class="sub-Heading" style="text-align: center;">
                <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> INDUSTRY WE SERVE <span><img
                        src="./dist/images/ar-r.png" class="img-fluid"></span>
            </div>
            <div class="home-how-head">Tailored shipping solutions for every industry.</div>

            <div class="row">
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <div class="home-industries-row-img carder2">
                            <img src="./dist/images/ind1.png" class="img-fluid img_carder2">
                        </div>
                        <div class="home-industries-row-head">Automotive & vehicular Export</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <div class="home-industries-row-img carder2">
                            <img src="./dist/images/ind2.png" class="img-fluid img_carder2">
                        </div>
                        <div class="home-industries-row-head">E-Commerce & Distribution Companies</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <div class="home-industries-row-img carder2">
                            <img src="./dist/images/ind3.png" class="img-fluid img_carder2">
                        </div>
                        <div class="home-industries-row-head">Food & perishables(non-temp sensitive)</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <div class="home-industries-row-img carder2">
                            <img src="./dist/images/ind4.png" class="img-fluid img_carder2">
                        </div>
                        <div class="home-industries-row-head">Consumer Goods & Retail</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <div class="home-industries-row-img carder2">
                            <img src="./dist/images/ind5.png" class="img-fluid img_carder2">
                        </div>
                        <div class="home-industries-row-head">Electronics & Technology</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <div class="home-industries-row-img carder2">
                            <img src="./dist/images/ind6.png" class="img-fluid img_carder2">
                        </div>
                        <div class="home-industries-row-head">Manufacture & Industrial Equipment
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <?php include 'inc/process.php'; ?>

    <div class="home_testimonial1">
        <div class="container">
            <div class="sub-Heading" style="text-align: left;">
                <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> TESTIMONIES <span><img
                        src="./dist/images/ar-r.png" class="img-fluid"></span>
            </div>
            <div class="home-process-left-head">What Our Client Says?</div>
        </div>
    </div>

    <div class="home_testimonial2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="home_testimonial-left-img">
                        <img src="./dist/images/feedback.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="home_testimonial-right">
                        <div class="home_testimonial-right-iconL">
                            <img src="./dist/images/ts1.png" class="img-fluid">
                        </div>
                        <div class="home_testimonial-right-iconR">
                            <img src="./dist/images/ts2.png" class="img-fluid">
                        </div>
                        <div class="home_testimonial-right-content">
                            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel2" data-slide-to="1"></li>
                                    <li data-target="#myCarousel2" data-slide-to="2"></li>
                                    <li data-target="#myCarousel2" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner row w-100 mx-auto">

                                    <div class="carousel-item col-md-12 active">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="home_testimonial-right-content-body">
                                                    <p>
                                                        From the moment I arrived, I felt completely at ease. The yoga
                                                        sessions were grounding, the environment was peaceful, and the
                                                        accommodations were incredibly comfortable. It was exactly the
                                                        reset I didn’t know I needed.
                                                    </p>
                                                    <div class="home_testimonial-right-content-body-head">
                                                        Sarah Thompson
                                                    </div>
                                                    <div class="home_testimonial-right-content-body-sub">
                                                        Wellness Enthusiast
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="home_testimonial-right-content-body">
                                                    <p>
                                                        This retreat helped me slow down and reconnect with myself.
                                                        Everything from the mindful practices to the serene living
                                                        spaces was thoughtfully designed. I left feeling lighter,
                                                        calmer,
                                                        and more focused.
                                                    </p>
                                                    <div class="home_testimonial-right-content-body-head">
                                                        Mark Johnson
                                                    </div>
                                                    <div class="home_testimonial-right-content-body-sub">
                                                        First-Time Retreat Guest
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="home_testimonial-right-content-body">
                                                    <p>
                                                        I’ve attended several wellness retreats before, but this
                                                        experience
                                                        truly stood out. The balance between guided yoga, quiet
                                                        reflection,
                                                        and rest was perfect. The space felt intentional and deeply
                                                        restorative.
                                                    </p>
                                                    <div class="home_testimonial-right-content-body-head">
                                                        Emily Rodriguez
                                                    </div>
                                                    <div class="home_testimonial-right-content-body-sub">
                                                        Yoga Practitioner
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="home_testimonial-right-content-body">
                                                    <p>
                                                        Staying here felt like stepping into a sanctuary. The
                                                        atmosphere,
                                                        the instructors, and the attention to detail made the entire
                                                        experience feel personal and meaningful. I’m already planning my
                                                        next visit.
                                                    </p>
                                                    <div class="home_testimonial-right-content-body-head">
                                                        James Walker
                                                    </div>
                                                    <div class="home_testimonial-right-content-body-sub">
                                                        Creative Professional
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="home_testimonial-right-content-body">
                                                    <p>
                                                        The combination of mindful movement, moments of stillness, and
                                                        peaceful accommodation made this retreat truly special. It
                                                        wasn’t
                                                        just a getaway—it was a meaningful experience that stayed with
                                                        me
                                                        long after I left.
                                                    </p>
                                                    <div class="home_testimonial-right-content-body-head">
                                                        Michael Green
                                                    </div>
                                                    <div class="home_testimonial-right-content-body-sub">
                                                        Retreat Guest
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'inc/footer.php'; ?>

</body>
<script>
    const cards = document.querySelectorAll('.img-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    cards.forEach(card => observer.observe(card));
</script>

</html>