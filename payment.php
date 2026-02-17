<?php
session_start();
include './connection/connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$current_session_id = session_id();

$total_amount = 0;

$query = mysqli_query($db, "
    SELECT total_price 
    FROM cart 
    WHERE session_id = '$current_session_id'
");

while ($row = mysqli_fetch_assoc($query)) {
    $total_amount += $row['total_price'];
}


// Store temporarily in session (NOT database yet)
$_SESSION['pending_booking'] = [
    'fullname' => $fullname,
    'email' => $email,
    'phone' => $phone,
    'total_amount' => $total_amount
];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Secure Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .payment-card {
            max-width: 700px;
            margin: auto;
            background: #fff;
            border-radius: 20px;
            padding: 45px;
        }

        .amount {
            font-size: 2.3rem;
            font-weight: 700;
            color: #198754;
        }

        .paypal-box {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
        }

        .btn-main {
            padding: 12px;
            font-weight: 600;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="container m-5">
        <div class="payment-card shadow-lg">

            <div class="text-center mb-4">
                <h2 class="fw-bold">Complete Your Payment</h2>
                <p class="text-muted">Secure your reservation via PayPal transfer.</p>
            </div>

            <div class="paypal-box mb-4">

                <h5>Payment Summary</h5>

                <p><strong>Guest:</strong> <?= htmlspecialchars($fullname) ?></p>

                <p><strong>Total Amount:</strong></p>
                <div class="amount mb-3">
                    €<?= number_format($total_amount, 2) ?>
                </div>

                <p><strong>Send Payment To:</strong></p>

                <div class="input-group mb-3">
                    <input type="text" id="paypalEmail" class="form-control" value="Info@bbrdolcevita.com" readonly>
                    <button class="btn btn-outline-secondary" onclick="copyEmail()">Copy</button>
                </div>

                <p class="small text-muted">
                    Please include your full name as payment reference.
                </p>

            </div>

            <div class="d-grid gap-3">

                <a href="https://www.paypal.com/" target="_blank" class="btn btn-primary btn-main">
                    Go To PayPal
                </a>
                <br><br>

                <!-- When clicked, booking gets saved -->
                <form action="confirm_booking.php" method="POST">
                    <button type="submit" class="btn btn-success btn-main w-100">
                        I Have Completed the Transfer
                    </button>
                </form>

            </div>

            <div class="text-center mt-4 small text-muted">
                Your booking will be confirmed once payment is verified.
            </div>

        </div>
    </div>

    <script>
        function copyEmail() {
            var copyText = document.getElementById("paypalEmail");
            copyText.select();
            document.execCommand("copy");
            alert("PayPal email copied!");
        }
    </script>

</body>

</html>