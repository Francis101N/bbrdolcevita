<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | bbrdolcevita</title>
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

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <script src="dist/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>
<style>
    body {
        overflow-x: hidden;
    }

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
        height: 420px;
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

    /* Make mobile cart icon white */
    @media (max-width: 767.98px) {
        .d-md-none svg path {
            stroke: #ffffff !important;
        }

        .d-md-none svg circle {
            fill: #ffffff !important;
        }
    }

    .gallery-item {
        width: 100%;
        aspect-ratio: 1 / 1;
        /* Makes it a perfect square */
        overflow: hidden;
        border-radius: 20px;
        margin: 10px;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Prevents stretching */
        transition: transform 0.6s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.08);
    }
</style>

<body>

    <?php include 'inc/header.php'; ?>

    <div class="banner">
        <div class="overlay"></div>
        <img src="./dist/images/banner3.jpg" alt="Banner Image" class="banner-img">
        <div class="container">
            <div class="banner-head">Gallery</div>
        </div>
    </div>

    <section class="py-5 bg-white">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5" data-aos="fade-down">
                <h3 class="fw-bold">Moments of Elegance</h3>
                <hr class="mx-auto" style="width:60px;border-top:3px solid #1a9acd;">
                <p class="text-muted mt-3 mx-auto" style="max-width:700px;">
                    Discover the beauty, comfort, and unforgettable experiences that define our retreat.
                    Each moment is thoughtfully designed to inspire relaxation and luxury.
                </p>
            </div>

            <!-- Gallery Grid -->
            <div class="row g-4">

                <!-- Image 1 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-right">
                    <div class="gallery-item">
                        <img src="./dist/images/project3.png" class="img-fluid rounded-4" alt="Gallery Image 1">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-right">
                    <div class="gallery-item">
                        <img src="./dist/images/WhatsApp Image 2026-03-05 at 10.35.49 AM (2).jpeg"
                            class="img-fluid rounded-4" alt="Gallery Image 1">
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="gallery-item">
                        <img src="./dist/images/yoga6.png" class="img-fluid rounded-4" alt="Gallery Image 2">
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-left">
                    <div class="gallery-item">
                        <img src="./dist/images/project4.png" class="img-fluid rounded-4" alt="Gallery Image 3">
                    </div>
                </div>

                <!-- Image 1 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-right">
                    <div class="gallery-item">
                        <img src="./dist/images/gallary1.png" class="img-fluid rounded-4" alt="Gallery Image 1">
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="gallery-item">
                        <img src="./dist/images/gallery2.png" class="img-fluid rounded-4" alt="Gallery Image 2">
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-left">
                    <div class="gallery-item">
                        <img src="./dist/images/5823604740460318347.jpg" class="img-fluid rounded-4"
                            alt="Gallery Image 3">
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="./dist/images/5823604740460318383.jpg" class="img-fluid rounded-4"
                            alt="Gallery Image 4">
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="./dist/images/DSC06023.jpg" class="img-fluid rounded-4" alt="Gallery Image 5">
                    </div>
                </div>

                <!-- Image 6 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="./dist/images/DSC06029.jpg" class="img-fluid rounded-4" alt="Gallery Image 6">
                    </div>
                </div>

                <!-- Image 7 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="./dist/images/gallery3.png" class="img-fluid rounded-4" alt="Gallery Image 7">
                    </div>
                </div>

                <!-- Image 8 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="./dist/images/5823604740460318384.jpg" class="img-fluid rounded-4"
                            alt="Gallery Image 8">
                    </div>
                </div>

                <!-- Image 9 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="./dist/images/DSC05969.jpg" class="img-fluid rounded-4" alt="Gallery Image 9">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="./dist/images/WhatsApp Image 2026-03-05 at 10.35.48 AM (3).jpeg"
                            class="img-fluid rounded-4" alt="Gallery Image 9">
                    </div>
                </div>

                <!-- Image 10 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-right" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/rrrrrrrrrrr.avif" class="img-fluid rounded-4" alt="Gallery Image 10">
                    </div>
                </div>

                <!-- Image 11 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/DSC06055.jpg" class="img-fluid rounded-4" alt="Gallery Image 11">
                    </div>
                </div>

                <!-- Image 12 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/DSC06113.jpg" class="img-fluid rounded-4" alt="Gallery Image 12">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/WhatsApp Image 2026-03-05 at 10.35.48 AM (1).jpeg"
                            class="img-fluid rounded-4" alt="Gallery Image 12">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/WhatsApp Image 2026-03-05 at 10.35.48 AM (2).jpeg"
                            class="img-fluid rounded-4" alt="Gallery Image 12">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/WhatsApp Image 2026-03-05 at 10.35.49 AM (1).jpeg"
                            class="img-fluid rounded-4" alt="Gallery Image 12">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/WhatsApp Image 2026-03-05 at 10.35.49 AM (3).jpeg"
                            class="img-fluid rounded-4" alt="Gallery Image 12">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/WhatsApp Image 2026-03-05 at 10.35.49 AM.jpeg"
                            class="img-fluid rounded-4" alt="Gallery Image 12">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/gallery4.png" class="img-fluid rounded-4" alt="Gallery Image 12">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="gallery-item">
                        <img src="./dist/images/IMG_5837.jpg" class="img-fluid rounded-4" alt="Gallery Image 12">
                    </div>
                </div>

            </div>

        </div>
    </section>
    
    <?php include 'inc/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>