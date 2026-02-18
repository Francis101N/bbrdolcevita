<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retreats | Bbr Dolce vita</title>
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

    .retreat-img {
        height: 550px;
        object-fit: cover;
        border-radius: 18px;
    }

    @media (max-width: 768px) {
        .retreat-img {
            height: 260px;
        }
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

<body>

    <?php include 'inc/header.php'; ?>

    <div class="banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner-head">Retreats & Experience</div>
        </div>
    </div>
    <br><br><br>
    <section class="py-1">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5" data-aos="fade-down">
                <div class="text-center mb-4" data-aos="fade-down">
                    <h2 class="fw-bold" style="color:#1a9acd;">Meet The Host</h2>
                    <hr class="mx-auto" style="width: 60px; border-top: 3px solid #1a9acd;">
                </div><br>
                <h5 class="text-muted">Tailored Experiences</h5>
                <p class="mx-auto" style="max-width:700px;">
                    Explore our range of retreat offerings meticulously crafted to enhance your well-being, promote
                    mindfulness, and
                    restore harmony. Each retreat is tailored to cater to your individual needs, fostering a holistic
                    approach to
                    self-care and inner transformation.
                </p>
            </div>

            <!-- Row 1 -->
            <div class="row g-4 mb-4">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="p-4 rounded" style="background-color:#959597; color:white;">
                        <h3 class="fw-bold">Daily Pilates & Yoga</h3>
                        <p class="fst-italic">Lotte Berk Pilates Method</p>
                        <p>
                            Strengthen, Sculpt, and Align with Precision. Discover the original Lotte Berk Method, a
                            transformative movement technique that combines ballet-inspired strength work with deep core
                            activation, postural alignment, and controlled flexibility. Practiced in our panoramic
                            rooftop
                            and terrace studios overlooking the Italian Riviera, these precision-based sessions are
                            designed
                            to sculpt long, lean muscles, lift the seat, flatten the belly, and improve overall body
                            awareness. Each class builds strength from the inside out—enhancing tone, confidence, and
                            grace
                            with every movement.
                        </p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="p-4 rounded" style="background-color:#959597; color:white;">
                        <h3 class="fw-bold">Gourmet Dining & Exclusive Excursions</h3>
                        <p class="fst-italic">Culinary Delights</p>
                        <p>
                            Indulge in the finest culinary delights of the Italian Riviera while exploring the region's
                            most
                            enchanting destinations. Our retreat combines gourmet dining experiences featuring exquisite
                            three-course meals prepared by our talented chef using fresh, local ingredients with
                            exclusive
                            excursions to the area's most beautiful locations. From Dolceacqua's iconic bridge to wine
                            tasting
                            at Foresti Vineyard and exploring Bordighera – every day brings new flavors and adventures
                            to
                            nourish both body and soul.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="p-4 rounded" style="background-color:#959597; color:white;">
                        <h3 class="fw-bold">The Yoga Experience</h3>
                        <p class="fst-italic">Pampering Indulgence</p>
                        <p>Our retreat offers a dynamic blend of yoga styles to support your personal growth and elevate
                            your daily rhythm:</p>
                        <h6 class="fw-semibold mt-3">Vinyasa</h6>
                        <p>A fluid, breath-synchronized practice that builds strength, flexibility, and mental
                            clarity—ideal
                            for energizing the body and calming the mind in a moving meditation by the sea.</p>
                        <h6 class="fw-semibold mt-3">Ashtanga</h6>
                        <p>A structured, high-energy sequence that cultivates discipline, stamina, and internal
                            focus—perfect for those seeking a grounding daily ritual and lasting transformation.</p>
                        <h6 class="fw-semibold mt-3">Jivamukti</h6>
                        <p>A soulful, music-driven flow that integrates breath, movement, and spiritual
                            philosophy—designed
                            to uplift your practice and inspire heart-centered awareness.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="p-4 rounded" style="background-color:#959597; color:white;">
                        <h3 class="fw-bold">What Awaits You</h3>
                        <p class="fst-italic">The Luxury Experience</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0 ps-0 text-dark d-flex align-items-start mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1a9acd"
                                    class="me-2 flex-shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M13.485 1.929a1 1 0 0 1 0 1.414l-7.071 7.071a1 1 0 0 1-1.414 0L2.515 7.929a1 1 0 1 1 1.414-1.414l1.293 1.293 6.364-6.364a1 1 0 0 1 1.414 0z" />
                                </svg>
                                Experience daily Vinyasa, Ashtanga, Jivamukti, and the iconic Lotte Berk Method in a
                                curated escape designed to awaken your strength, serenity, and spirit by the
                                Mediterranean Sea.
                            </li>
                            <li class="list-group-item border-0 ps-0 text-dark d-flex align-items-start mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1a9acd"
                                    class="me-2 flex-shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M13.485 1.929a1 1 0 0 1 0 1.414l-7.071 7.071a1 1 0 0 1-1.414 0L2.515 7.929a1 1 0 1 1 1.414-1.414l1.293 1.293 6.364-6.364a1 1 0 0 1 1.414 0z" />
                                </svg>
                                Invigorating hikes and curated cultural excursions.
                            </li>
                            <li class="list-group-item border-0 ps-0 text-dark d-flex align-items-start mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1a9acd"
                                    class="me-2 flex-shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M13.485 1.929a1 1 0 0 1 0 1.414l-7.071 7.071a1 1 0 0 1-1.414 0L2.515 7.929a1 1 0 1 1 1.414-1.414l1.293 1.293 6.364-6.364a1 1 0 0 1 1.414 0z" />
                                </svg>
                                Taste culinary delights and private wine tasting at the Foresti Vineyard.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5" data-aos="fade-down">
                <h3 class="fw-bold">Meet Your Instructors</h3>
                <hr class="mx-auto" style="width:60px;border-top:3px solid #1a9acd;">
            </div>

            <div class="row g-5">

                <!-- Instructor 1 -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-4">

                            <div class="d-flex align-items-center mb-4">
                                <img src="./dist/images/camilla.png" class="rounded-circle me-3" width="90" height="90"
                                    alt="Camilla Sparkes">
                                <div>
                                    <h4 class="mb-0 fw-bold">Camilla Sparkes</h4>
                                    <h6 class="text-muted mb-1">Pilates & Lotte Berk Instructor</h6>
                                    <p class="mb-0 small text-muted">cjsparkes@hotmail.com</p>
                                    <p class="mb-0 small text-muted">+44 771 013 3429</p>
                                </div>
                            </div>

                            <p class="text-muted" style="line-height:1.7;">
                                Meet Camilla Sparkes, a highly experienced Pilates instructor with a strong foundation
                                in
                                both Pilates and the Lotte Berk Method (ballet barre). She began her training in London
                                in
                                1998 and has since built an impressive career teaching in some of the city's top gyms.
                            </p>

                            <p class="text-muted" style="line-height:1.7;">
                                In 2020, Camilla launched her own online studio, offering live classes five mornings a
                                week
                                from her homes in Mougins, France and London. With over two decades of expertise, she
                                brings
                                energy, precision, and deep body awareness to every session.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Instructor 2 -->
                <div class="col-md-6" data-aos="fade-left">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-4">

                            <div class="d-flex align-items-center mb-4">
                                <img src="./dist/images/lucy.png" class="rounded-circle me-3" width="90" height="90"
                                    alt="Lucy Moore">
                                <div>
                                    <h4 class="mb-0 fw-bold">Lucy Moore</h4>
                                    <h6 class="text-muted mb-1">Yoga Instructor</h6>
                                    <p class="mb-0 small text-muted">lucymooresw6@gmail.com</p>
                                    <p class="mb-0 small text-muted">+33 650 398 905 / +44 7777 944040</p>
                                </div>
                            </div>

                            <p class="text-muted" style="line-height:1.7;">
                                Lucy trained as a yoga teacher in 2011 with Sun Power Yoga in Greece after practicing
                                yoga
                                for over 15 years across multiple schools. Sun Power’s philosophy is rooted in Karma
                                Yoga —
                                selfless action for the benefit of others.
                            </p>

                            <p class="text-muted" style="line-height:1.7;">
                                With over 1000 hours of advanced training in Vinyasa, Ashtanga, and Jivamukti Yoga,
                                Lucy’s
                                teaching style is inclusive, non-competitive, and deeply supportive, adapting seamlessly
                                to all ages and abilities.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">

            <!-- Main Heading -->
            <div class="text-center mb-5" data-aos="fade-down">
                <h3 class="fw-bold">Refined Dining & Curated Riviera Experiences</h3>
                <hr class="mx-auto" style="width:60px;border-top:3px solid #1a9acd;">
                <p class="mt-3 text-muted mx-auto" style="max-width:2000px;">
                    Experience the elegance of the Italian Riviera through exceptional cuisine and thoughtfully curated
                    excursions.
                    Savor chef-crafted three-course meals prepared with the freshest local ingredients, while
                    discovering
                    breathtaking coastal destinations designed to inspire relaxation and connection.
                </p>
            </div>

            <!-- Carousel -->
            <div id="retreatCarousel" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="3000"
                data-bs-pause="false" data-aos="fade-up">

                <div class="carousel-inner rounded-4 shadow-sm">

                    <div class="carousel-item active">
                        <img src="./dist/images/DSC05990.jpg" class="d-block w-100 h-24 retreat-img"
                            alt="Riviera Dining Experience">
                    </div>

                    <div class="carousel-item">
                        <img src="./dist/images/DSC06074.jpg" class="d-block w-100 retreat-img" alt="Luxury Resort View">
                    </div>

                    <div class="carousel-item">
                        <img src="./dist/images/DSC05916.jpg" class="d-block w-100 retreat-img" alt="Coastal Excursion">
                    </div>

                    <div class="carousel-item">
                        <img src="./dist/images/DSC06023.jpg" class="d-block w-100 retreat-img"
                            alt="Italian Riviera Scenery">
                    </div>

                    <div class="carousel-item">
                        <img src="./dist/images/DSC06108.jpg" class="d-block w-100 retreat-img" alt="Gourmet Cuisine">
                    </div>

                </div>

            </div>

            <!-- Subheading -->
            <div class="text-center mb-3" data-aos="fade-up" data-aos-delay="150">
                <h4 class="fw-semibold">Culinary Excellence Meets Coastal Beauty</h4>
            </div>

            <!-- Quote -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="250">
                <p class="fst-italic text-muted">
                    “Savor authentic Ligurian flavors while discovering the timeless charm of the Italian Riviera.”
                </p>
            </div>

        </div>
    </section>



    <?php include 'inc/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>