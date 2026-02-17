<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Contact Us | Haut Logistics</title>

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
            <div class="banner-head">Contact Us</div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row contact-row">
            <div class="col-md-4">
                <div class="contact-rows">
                    <div class="card">
                        <div class="icon-box">
                            <i class="fa-solid fa-location-dot icon"></i>
                        </div>
                        <div class="image-container">
                            <img src="./dist/images/cl.png" class="image-default img-fluid" alt="Default Image">
                            <img src="./dist/images/cl2.png" class="image-hover img-fluid" alt="Hover Image">
                        </div>
                        <div class="contact-rows-head">Our Address :</div>
                        <p>36, Pemican Ct New York ON M9M 2Z3 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-rows">
                    <div class="card">
                        <div class="icon-box">
                            <i class="fa-solid fa-at icon"></i>
                        </div>
                        <div class="image-container">
                            <img src="./dist/images/cl.png" class="image-default img-fluid" alt="Default Image">
                            <img src="./dist/images/cl2.png" class="image-hover img-fluid" alt="Hover Image">
                        </div>
                        <div class="contact-rows-head">Our Email :</div>
                        <p>info@bbrdolcevita.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-rows">
                    <div class="card">
                        <div class="icon-box">
                            <i class="fa-solid fa-phone icon"></i>
                        </div>
                        <div class="image-container">
                            <img src="./dist/images/cl.png" class="image-default img-fluid" alt="Default Image">
                            <img src="./dist/images/cl2.png" class="image-hover img-fluid" alt="Hover Image">
                        </div>
                        <div class="contact-rows-head">Our Phone :</div>
                        <p>+39 388 159 5498 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="contact_form">
            <div class="row">
                <div class="col-md-9">
                    <div class="contact_form-left">
                        <div class="contact_form-left-head">Feel Free To Contact Us</div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact_form-row">
                                    <p>Full Name</p>
                                    <input type="text" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_form-row">
                                    <p>Email</p>
                                    <input type="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_form-row">
                                    <p>Phone Number</p>
                                    <input type="text" placeholder="Enter your number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_form-row">
                                    <p>Types of service</p>
                                    <select class="form-select">
                                        <option selected>Types of service</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact_form-row">
                                    <p>Message</p>
                                    <textarea name="" id="" rows="4" placeholder="Type message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="btn-sec">
                                    <button>Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact_form-right">
                        <img src="./dist/images/contact2.jpg" class="img-fluid" style="height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact_map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2882.0922138451506!2d-79.53567577411124!3d43.75018183229194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3038c372f0b3%3A0xc5adbf07d53710ba!2sNorth%20York%2C%20ON%20M9M%202Z3%2C%20Canada!5e0!3m2!1sen!2sng!4v1745790370893!5m2!1sen!2sng"
            width="100%" height="372" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>





    <?php include 'inc/footer.php'; ?>

</body>

</html>