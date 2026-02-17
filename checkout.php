<?php
session_start();
include './connection/connect.php';

$session_id = session_id();

// Fetch cart items for this session
$stmt = $db->prepare("
    SELECT c.id AS cart_id, c.rooms, c.checkin_date, c.checkout_date, c.unit_price, c.total_price,
           s.name, s.image1
    FROM cart c
    JOIN suites s ON c.suite_id = s.id
    WHERE c.session_id = ?
");
$stmt->bind_param("s", $session_id);
$stmt->execute();
$result = $stmt->get_result();

$cart_items = [];
$total_amount = 0;

while ($row = $result->fetch_assoc()) {
    $cart_items[] = $row;
    $total_amount += $row['total_price'];
}

// If cart is empty, redirect back
if (count($cart_items) === 0) {
    echo "<script>alert('Your cart is empty.'); window.location.href='accomodations.php';</script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retreats | Haut Logistics</title>
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

    .checkout-card {
        border-radius: 15px;
        padding: 20px;
    }

    .suite-img {
        width: 100px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
    }

    .summary-box {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 12px;
        margin-bottom: 20px;
    }

    .total-price {
        font-size: 1.3rem;
        font-weight: bold;
        color: #198754;
    }

    .btn-confirm {
        background: #1f95d2;
        color: #fff;
        border-radius: 8px;
        padding: 12px;
        font-weight: 600;
        border: none;
    }

    .btn-confirm:hover {
        background: #0d6efd;
    }
</style>

<body>

    <?php include 'inc/header.php'; ?>

    <div class="banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner-head">Checkout</div>
        </div>
    </div>
    <br>

    <div class="container py-5">
        <h2 class="mb-4">Checkout</h2>

        <div class="card checkout-card shadow-sm">
            <h4 class="mb-3">Booking Summary</h4>

            <?php foreach ($cart_items as $item):
                $checkin = new DateTime($item['checkin_date']);
                $checkout = new DateTime($item['checkout_date']);
                $nights = $checkin->diff($checkout)->days;
                ?>
                <div class="summary-box d-flex align-items-center">
                    <p class="p-2"><img src="./cooladmin/uploads/<?= htmlspecialchars($item['image1']) ?>" class="suite-img me-3"
                            alt="<?= htmlspecialchars($item['name']) ?>"></p>
                    <div>
                        <p class="mb-1 fw-bold"><b><?= htmlspecialchars($item['name']) ?></b></p>
                        <p class="mb-1">Check-in: <?= $item['checkin_date'] ?> | Check-out: <?= $item['checkout_date'] ?> |
                            Nights: <?= $nights ?></p>
                        <p class="mb-0">Rooms: <?= $item['rooms'] ?> | Price/Night:
                            €<?= number_format($item['unit_price'], 2) ?> | Total:
                            €<?= number_format($item['total_price'], 2) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

            <hr>
            <p class="total-price text-end">Grand Total: €<?= number_format($total_amount, 2) ?></p>

            <h5 class="mt-4">Guest Information</h5>
            <form action="payment" method="POST">
                <!-- Include hidden fields for cart items -->
                <?php foreach ($cart_items as $item): ?>
                    <input type="hidden" name="cart_ids[]" value="<?= $item['cart_id'] ?>">
                <?php endforeach; ?>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Full Name</label>
                        <input type="text" name="fullname" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Phone Number</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-confirm w-100">Confirm & Complete Booking</button>
                </div>
            </form>
        </div>
    </div>



    <?php include 'inc/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>