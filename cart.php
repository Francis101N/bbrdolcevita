<?php
session_start();
include './connection/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Bbr Dolce vita</title>
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
        overflow: hidden;
        border: none;
    }

    .suite-img {
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }

    .summary-box {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
    }

    .summary-box p {
        margin-bottom: 8px;
    }

    .total-price {
        font-size: 1.4rem;
        font-weight: bold;
        color: #198754;
    }

    .btn-confirm {
        background: #1f95d2;
        border: none;
        padding: 12px;
        font-weight: 600;
        border-radius: 8px;
        transition: 0.3s ease;
    }

    .btn-confirm:hover {
        background: #b7e7ed;
    }

    .form-control {
        border-radius: 8px;
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
            <div class="banner-head">Carts</div>
        </div>
    </div>
    <br>


    <?php

    $session_id = session_id();

    // Fetch cart items from cart table (use stored unit_price and total_price)
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
        $total_amount += $row['total_price'];
        $cart_items[] = $row;
    }

    ?>

    <div class="container my-5">
        <h2 class="mb-4">Your Booking Cart</h2>

        <?php if (count($cart_items) === 0): ?>
            <div class="alert alert-info">Your cart is empty.</div>
        <?php else: ?>
            <div class="table-responsive shadow-sm">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Suite</th>
                            <th scope="col">Check-in</th>
                            <th scope="col">Check-out</th>
                            <th scope="col">Rooms</th>
                            <th scope="col">Price/Night (€)</th>
                            <th scope="col">Total (€)</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart_items as $item): ?>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <p class="p-3"><?= htmlspecialchars($item['name']) ?></p>
                                    <img src="./cooladmin/uploads/<?= htmlspecialchars($item['image1']) ?>"
                                        alt="<?= htmlspecialchars($item['name']) ?>"
                                        style="width:60px; height:60px; object-fit:cover; border-radius:5px;" class="me-2">

                                </td>
                                <td><?= htmlspecialchars($item['checkin_date']) ?></td>
                                <td><?= htmlspecialchars($item['checkout_date']) ?></td>
                                <td><?= $item['rooms'] ?></td>
                                <td>€<?= number_format($item['unit_price'], 2) ?></td>
                                <td>€<?= number_format($item['total_price'], 2) ?></td>
                                <td>
                                    <form action="remove_from_cart.php" method="POST">
                                        <input type="hidden" name="cart_id" value="<?= $item['cart_id'] ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i> Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-end fw-bold">Total Amount:</td>
                            <td class="fw-bold">€<?= number_format($total_amount, 2) ?></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="text-end mt-4">
                <a href="checkout" class="btn btn-primary btn-lg">
                    Proceed to Checkout
                </a>
            </div>
        <?php endif; ?>
    </div>




    <?php include 'inc/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>