<?php
session_start();
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Schedule | Bbr Dolce vita</title>

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
                <h4>Day 1 | May 14, 2026</h4>
                <p>After 15:00 - Check-in and registration</p>
                <p>16:00 - Welcome tea and sandwiches</p>
                <p>18:00-19:00 - Pilates session with Camilla Sparks at top west wing terrace</p>
                <p>18:00-19:00 - Yoga with Lucy Moore at north wing terrace</p>
                <p>19:30-20:30 - Four-course dinner with 2 glasses of wine</p>
                <p>20:30-21:30 - Time to relax and group sharing</p>
                <p>21:30 - Program ends and time to retire to your suites</p>
            </div>

            <div id="day-2" class="day-content">
                <h4>Day 2 | May 15, 2026</h4>
                <p>7:00 - Wake up with a tray of hot water, lemon, mint and ginger all fresh from the garden</p>
                <p>7:30-8:30 - 1 hour morning hike. Take in wine vineyards and breathtaking views and a 16th century
                    Roman ruin at the end of the trail</p>
                <p>8:30-9:30 - Continental breakfast on kitchen terrace overlooking the amazing sea and mountain views
                </p>
                <p>10:00-11:00 - Pilates session with Camilla Sparks top west wing terrace</p>
                <p>10:00-11:00 - Yoga with Lucy Moore at the north wing terrace</p>
                <p>11:00-12:00 - Time to relax by the pool</p>
                <p>12:00-12:15 - Time to change if needed</p>
                <p>12:15-13:15 - Three course lunch on the west wing terrace</p>
                <p>13:30 - Excursion with taxis to the famous Ventimiglia open market on the beach then 10 minutes away
                    by foot explore the new Monaco port and Marina di "Cala del Forte" or old town above the market</p>
                <p>17:00 - Meet at Ventimiglia train station to take taxis back to BBR Dolce Vita</p>
                <p>18:00-19:00 - Pilates session with Camilla Sparks top west wing terrace</p>
                <p>18:00-19:00 - Yoga with Lucy Moore at the North wing terrace</p>
                <p>19:30-20:30 - Dinner</p>
                <p>20:30-21:30 - time to telax and group sharing </p>
                <p>21:00 - Retire to your suites</p>
            </div>

            <div id="day-3" class="day-content">
                <h4>Day 3 | May 16, 2026</h4>
                <p>7:00 - Wake up with a tray of hot water, lemon, mint and ginger all fresh from the garden</p>
                <p>7:30-8:30 - 1 hour stunning hiking trail in the hills above Ventimiglia that rise up from the sea
                    past an enormous olive grove and 5th century chapel</p>
                <p>8:30-9:30 - Continental breakfast on kitchen terrace overlooking the amazing sea and mountain views
                </p>
                <p>10:00-11:00 - Pilates session with Camilla Sparks top west wing terrace</p>
                <p>10:00-11:00 - Yoga with Lucy Moore at the north wing terrace</p>
                <p>11:00-12:00 - Time to relax by the pool</p>
                <p>12:00-12:15 - Time to change if needed</p>
                <p>12:15-13:15 - Three course lunch on the west wing terrace</p>
                <p>13:30 - Time off to chillax or go sightseeing excursion to Dolceaqua</p>
                <p>16:30-17:00 - Meet at the main square at BIP Dolceacqua</p>
                <p>17:00 - Taxi depart for the BBR Dolce Vita remove aperitivo </p>
                <p>18:30 - Taxis to BBR Dolce Vita</p>
                <p>19:30-20:30 - Dinner</p>
                <p>20:30-21:30 - time to telax and group sharing </p>
                <p>21:00 - Retire to your suites</p>
            </div>

            <div id="day-4" class="day-content">
                <h4>Day 4 | May 17, 2026 (Standard Departure)</h4>
                <p>7:00 - 7:30 - Continental breakfast on kitchen terrace overlooking the amazing sea and mountain views
                </p>
                <p>7:45 - Taxis to Bordighera</p>
                <p>8:15-10:00 - Excursion visit old town of Bordighera and Beodo trail hike</p>
                <p>10:00 - Taxis back to BBR Dolce Vita</p>
                <p>11:00-12:00 - Pilates session with Camilla Sparks top west wing terrace</p>
                <p>11:00-12:00 - Yoga with Lucy Moore at the north wing terrace</p>
                <p>12:15-13:30 - Three course lunch on the west wing terrace</p>
                <p>14:00 - Relax by the pool or treatments for facial, deep tissue massage, manicure/pedicure (extra
                    charge)</p>
                <p>16:00-17:00 - Check out and transfers available upon request</p>
            </div>

            <div id="day-4b" class="day-content">
                <h4>Day 5 | May 18, 2026 (Bonus Experience)</h4>
                <p>14:00 - Taxis to Hanbury Botanical Gardens & Ventimiglia tour</p>
                <p>16:00 - Taxis to Mortola Tower for "Aperitivo & Nibbles"</p>
                <p>19:00 - Return to BBR Dolce Vita</p>
                <p>Evening - Relax on terraces by the pool</p>
            </div>

            <div id="day-5" class="day-content">
                <h4>Day 6 | May 19, 2026</h4>
                <p>9:00 - Continental Breakfast Buffet</p>
                <p>11:00 - Check out</p>
            </div>

        </div>

    </div><br><br>

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