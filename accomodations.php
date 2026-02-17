<?php
session_start();
ini_set('display_errors', 0);

// Initialize variables to avoid undefined warnings
$error = $_GET['error'] ?? '';
$success = $_GET['success'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodations | Haut Logistics</title>
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

    .suite-card {
        border: none;
        border-radius: 18px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .suite-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    }

    .suite-img img {
        height: 250px;
        object-fit: cover;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }


    .price-tag {
        font-size: 1.2rem;
        font-weight: 600;
        color: #1a9acd;
    }

    .availability {
        font-size: 0.9rem;
        color: #28a745;
        font-weight: 500;
    }

    .book-btn {
        background-color: #1a9acd;
        border: none;
        padding: 10px;
        border-radius: 30px;
        color: #fff;
        transition: 0.3s;
        font-weight: 500;
    }

    .book-btn:hover {
        background-color: #157ea8;
    }

    .modern-input {
        border-radius: 10px;
        border: 1px solid #e5e5e5;
        padding: 10px;
        transition: all 0.3s ease;
    }

    .modern-input:focus {
        border-color: #1a9acd;
        box-shadow: 0 0 0 0.15rem rgba(26, 154, 205, 0.15);
    }

    .form-label {
        font-size: 0.8rem;
        letter-spacing: 0.3px;
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
            <div class="banner-head">Accommodations</div>
        </div>
    </div>
    <br><br><br>
    <section class="bg-light">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Suites</h2>
                <hr class="mx-auto" style="width:60px;border-top:3px solid #1a9acd;">
                <p class="mt-3 text-muted mx-auto" style="max-width:720px;">
                    Experience the perfect blend of luxury and comfort in our thoughtfully designed suites. Each
                    accommodation reflects our signature style, offering refined details and a relaxing atmosphere.
                </p>
            </div>

            <!-- Content Card -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">

                        <h4 class="fw-semibold mb-3">Suite Information</h4>
                        <p class="text-muted">Discover our beautifully designed suites combining elegance, comfort, and
                            Italian
                            charm.</p>

                        <p class="text-muted">
                            Each suite offers elegant and spacious accommodation, featuring a luxurious king-size bed
                            that can be configured as twin beds upon request. All suites include beautifully appointed
                            en-suite bathrooms designed for comfort and privacy.
                        </p>

                        <div class="alert alert-light border-start border-4 mt-4" style="border-color:#1a9acd;">
                            <strong class="text-danger">Important:</strong>
                            Maximum occupancy is two guests per suite. Suites cannot accommodate more than two people.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <?php if ($error): ?>
                <div class="alert alert-danger alert-dismissible fade show display" role="alert">
                    <?= htmlspecialchars($error) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert alert-success alert-dismissible fade show display" role="alert">
                    <?= htmlspecialchars($success) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="row g-4">

                <?php
                include './connection/connect.php';

                // Fetch suites from database
                $query = "SELECT * FROM suites ORDER BY date_created DESC";
                $result = $db->query($query);

                if ($result->num_rows > 0):
                    while ($suite = $result->fetch_assoc()):
                        ?>
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="card suite-card shadow-sm">

                                <!-- Carousel for suite images (no arrows) -->
                                <div id="suiteCarousel<?php echo $suite['id']; ?>"
                                    class="carousel slide carousel-fade suite-img" data-bs-ride="carousel"
                                    data-bs-interval="3500" data-bs-pause="false">

                                    <div class="carousel-inner">
                                        <?php
                                        $images = [$suite['image1'], $suite['image2'], $suite['image3']];
                                        foreach ($images as $index => $img): ?>
                                            <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                                                <img src="./cooladmin/uploads/<?php echo htmlspecialchars($img); ?>"
                                                    class="d-block w-100"
                                                    alt="<?php echo htmlspecialchars($suite['name']) . ' image ' . ($index + 1); ?>"
                                                    style="object-fit:cover; height:250px;">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                </div>

                                <!-- Suite details -->
                                <div class="card-body p-4">

                                    <h5 class="fw-bold"><?php echo htmlspecialchars($suite['name']); ?></h5>
                                    <p class="text-muted small"><?php echo htmlspecialchars($suite['description']); ?></p>

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="price-tag">€<?php echo number_format($suite['price'], 2); ?> / night</span>

                                        <?php
                                        $availabilityClass = ($suite['availability_status'] === 'Available') ? 'text-success' : 'text-danger';
                                        $availabilityText = $suite['availability_status'];
                                        ?>
                                        <span class="availability <?php echo $availabilityClass; ?>">
                                            <?php echo $availabilityText; ?>
                                        </span>
                                    </div>

                                    <!-- Booking form -->
                                    <form action="add_to_cart" method="POST">
                                        <input type="hidden" name="suite_id" value="<?php echo $suite['id']; ?>">

                                        <div class="row g-2 mb-3">
                                            <div class="col-6">
                                                <label class="form-label fw-semibold">Check-in</label>
                                                <input type="date" name="checkin_date" class="form-control modern-input"
                                                    required>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label fw-semibold">Check-out</label>
                                                <input type="date" name="checkout_date" class="form-control modern-input"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Number of Rooms</label>
                                            <input type="number" name="rooms" class="form-control modern-input" min="1"
                                                max="<?php echo intval($suite['available_rooms']); ?>" value="1" readonly>
                                        </div>

                                        <button type="submit" class="book-btn w-100 text-white border-0">
                                            Reserve Suite
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
                    endwhile;
                else:
                    echo "<p class='text-center'>No suites available at the moment.</p>";
                endif;
                ?>

            </div>
        </div>
    </section>





    <?php include 'inc/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
<!-- Auto-hide alert after 5 seconds -->
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const alertBox = document.querySelector('.display');
        if (alertBox) {
            setTimeout(() => {
                // Bootstrap 5 dismiss alert programmatically
                const bsAlert = bootstrap.Alert.getOrCreateInstance(alertBox);
                bsAlert.close();
            }, 5000); // 5000ms = 5 seconds
        }
    });
</script>

</html>