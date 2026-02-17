<?php
ini_set('display_errors',0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Schedule | Haut Logistics</title>

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

        /* Day nav buttons */
        .day-nav button {
            margin: 5px;
            transition: all 0.3s;
            border-radius: 30px;
        }

        .day-nav button.active {
            background-color: #000;
            /* Active day indicator */
            color: #fff;
            border-color: #000;
        }

        /* Day content box */
        .day-content {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            background-color: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .day-content.active {
            display: block;
            opacity: 1;
        }

        /* Schedule list styling */
        .day-content p {
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
            line-height: 1.6;
        }

        .day-content p::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #1a9acd;
            /* Accent color for bullet points */
            font-weight: bold;
        }

        /* Page title */
        h2 {
            font-weight: 700;
            color: #1a9acd;
        }

        /* Optional: hover effect on buttons */
        .day-nav button:hover {
            background-color: #1a9acd;
            color: #fff;
            border-color: #1a9acd;
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
            <div class="banner-head">Our Schedule</div>
        </div>
    </div>
    <br><br><br>
    <div class="container py-2">

        <!-- Section Heading -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold" style="color:#1a9acd;">Retreat Schedule</h2>
            <hr class="mx-auto" style="width: 60px; border-top: 3px solid #1a9acd;">
        </div>

        <!-- Day Navigation -->
        <div class="day-nav text-center mb-5">
            <button class="btn btn-outline-primary active" data-day="1">Day 1 - Welcome</button>
            <button class="btn btn-outline-primary" data-day="2">Day 2 - Explore</button>
            <button class="btn btn-outline-primary" data-day="3">Day 3 - Immerse</button>
            <button class="btn btn-outline-primary" data-day="4">Day 4 - Farewell</button>
            <button class="btn btn-outline-primary" data-day="4b">Day 4 - Bonus</button>
            <button class="btn btn-outline-primary" data-day="5">Day 5 - Departure</button>
        </div>

        <!-- Day Content -->
        <div class="day-content-container">

            <div id="day-1" class="day-content active">
                <h4>Day 1 | June 26, 2025</h4>
                <p>After 15:00 - Check-in and registration</p>
                <p>16:00 - Welcome tea and sandwiches</p>
                <p>18:00-19:00 - Pilates session with Camilla Sparks at top west wing terrace</p>
                <p>18:00-19:00 - Yoga with Lucy Moore at north wing terrace</p>
                <p>19:30-20:00 - Aperitivo Aperol Spritz or wine and nibbles</p>
                <p>20:00-21:00 - Four-course dinner with 2 glasses of wine</p>
                <p>21:00-22:00 - Time to relax and group sharing</p>
                <p>22:00 - Program ends and time to retire to your suites</p>
            </div>

            <div id="day-2" class="day-content">
                <h4>Day 2 | June 27, 2025</h4>
                <p>7:00 - Wake up with a tray of hot water, lemon, mint, and ginger</p>
                <p>7:30-8:30 - Morning hike through vineyards and historic Roman ruins</p>
                <p>8:30-9:30 - Continental breakfast on kitchen terrace with sea & mountain views</p>
                <p>10:00-11:00 - Pilates session with Camilla Sparks</p>
                <p>10:00-11:00 - Yoga with Lucy Moore</p>
                <p>11:00-12:00 - Relax by the pool</p>
                <p>12:15-13:15 - Three-course lunch on west wing terrace</p>
                <p>13:30 - Excursion to Ventimiglia market & Monaco port</p>
                <p>18:00-19:00 - Pilates/Yoga sessions</p>
                <p>20:00-21:00 - Four-course dinner</p>
                <p>21:00-22:00 - Relax and group sharing</p>
            </div>

            <div id="day-3" class="day-content">
                <h4>Day 3 | June 28, 2025</h4>
                <p>7:00 - Morning hydration with fresh garden herbs</p>
                <p>7:30-8:30 - Scenic hiking trail in Ventimiglia hills</p>
                <p>8:30-9:30 - Breakfast on kitchen terrace</p>
                <p>10:00-11:00 - Pilates with Camilla Sparks</p>
                <p>10:00-11:00 - Yoga with Lucy Moore</p>
                <p>11:00-12:00 - Relax by the pool</p>
                <p>12:15-13:15 - Three-course lunch</p>
                <p>13:30 - Excursion to Dolce Aqua medieval village and Doria Castle</p>
                <p>17:00 - Wine tasting tour at Foresti Vineyard</p>
                <p>20:00-21:00 - Four-course dinner</p>
            </div>

            <div id="day-4" class="day-content">
                <h4>Day 4 | June 29, 2025 (Standard Departure)</h4>
                <p>7:00-7:30 - Breakfast on terrace</p>
                <p>7:45 - Taxis to Bordighera</p>
                <p>8:15-10:00 - Excursion visit old town of Bordighera & Beodo trail hike</p>
                <p>11:00-12:00 - Pilates/Yoga sessions</p>
                <p>12:15-13:30 - Three-course lunch</p>
                <p>14:00 - Relax by pool or optional spa treatments</p>
                <p>16:00-17:00 - Check out / transfers</p>
            </div>

            <div id="day-4b" class="day-content">
                <h4>Day 4 | June 29, 2025 (Bonus Experience)</h4>
                <p>14:00 - Taxis to Hanbury Botanical Gardens & Ventimiglia tour</p>
                <p>16:00 - Taxis to Mortola Tower for "Aperitivo & Nibbles"</p>
                <p>19:00 - Return to BBR Dolce Vita</p>
                <p>Evening - Relax on terraces by the pool</p>
            </div>

            <div id="day-5" class="day-content">
                <h4>Day 5 | June 30, 2025</h4>
                <p>9:00 - Continental Breakfast Buffet</p>
                <p>11:00 - Check out</p>
            </div>

        </div>

    </div><br>

    <section class="py-5 bg-light">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-4" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="fw-bold">Bonus Experience</h3>
                <hr class="mx-auto" style="width: 60px; border-top: 3px solid #1a9acd;">
            </div>

            <!-- Description -->
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <p class="lead text-muted">
                    Step away from daily routines and into a setting that encourages calm, clarity, and connection.
                    Extend your
                    stay for an additional night (€175) and enjoy a private tour of the Hanbury Botanical Gardens, plus
                    an
                    exclusive visit to a restored 14th-century tower with stunning Ligurian Sea views.
                </p>
            </div>

            <!-- Image Cards -->
            <div class="row g-5 justify-content-center">

                <div class="col-md-6 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="./dist/images/experiencepic1.png" alt="Hanbury Gardens"
                            class="card-img-top img-fluid rounded">
                        <div class="card-body">
                            <p class="card-text fw-semibold">The stunning Hanbury Botanical Gardens overlooking the sea
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="./dist/images/experiencepic2.png" alt="14th-century Tower"
                            class="card-img-top img-fluid rounded">
                        <div class="card-body">
                            <p class="card-text fw-semibold">The restored 14th-century tower with panoramic views</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const buttons = document.querySelectorAll('.day-nav button');
        const contents = document.querySelectorAll('.day-content');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active from all buttons
                buttons.forEach(b => b.classList.remove('active'));
                // Highlight clicked button
                btn.classList.add('active');

                // Remove active from all contents
                contents.forEach(c => c.classList.remove('active'));
                // Show corresponding content
                const dayId = 'day-' + btn.getAttribute('data-day');
                const dayContent = document.getElementById(dayId);
                if (dayContent) dayContent.classList.add('active');
            });
        });
    </script>



    <?php include 'inc/footer.php'; ?>

</body>

</html>