<?php
session_start();
include './connection/connect.php';

// Ensure this page is accessed via POST from checkout
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

// Sanitize guest input
$fullname = htmlspecialchars(trim($_POST['fullname']));
$email    = htmlspecialchars(trim($_POST['email']));
$phone    = htmlspecialchars(trim($_POST['phone']));
$current_session_id = session_id();

// Fetch total amount from cart securely
$total_amount = 0;

$stmt = $db->prepare("SELECT total_price FROM cart WHERE session_id = ?");
$stmt->bind_param("s", $current_session_id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $total_amount += $row['total_price'];
}

// If cart is empty, redirect
if ($total_amount <= 0) {
    echo "<script>alert('Your cart is empty.'); window.location.href='accomodations.php';</script>";
    exit;
}

// Store temporarily in session (to be saved after payment confirmation)
$_SESSION['pending_booking'] = [
    'fullname'     => $fullname,
    'email'        => $email,
    'phone'        => $phone,
    'total_amount' => $total_amount,
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Secure Payment | Bbr Dolce vita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .payment-card {
            max-width: 700px;
            width: 100%;
            background: #fff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
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
            margin-bottom: 25px;
        }

        .btn-main {
            padding: 12px;
            font-weight: 600;
            border-radius: 10px;
        }

        .btn-copy {
            border-radius: 0 10px 10px 0;
        }

        .input-group input {
            border-radius: 10px 0 0 10px;
        }
    </style>
</head>

<body>

    <div class="payment-card">

        <div class="text-center mb-4">
            <h2 class="fw-bold">Complete Your Payment</h2>
            <p class="text-muted">Secure your reservation via PayPal transfer.</p>
        </div>

        <div class="paypal-box">

            <h5 class="fw-semibold mb-3">Payment Summary</h5>

            <p><strong>Guest:</strong> <?= $fullname ?></p>

            <p><strong>Total Amount:</strong></p>
            <div class="amount mb-3">
                €<?= number_format($total_amount, 2) ?>
            </div>

            <p><strong>Send Payment To:</strong></p>
            <div class="input-group mb-3">
                <input type="text" id="paypalEmail" class="form-control" value="Info@bbrdolcevita.com" readonly>
                <button class="btn btn-outline-secondary btn-copy" type="button" onclick="copyEmail()">Copy</button>
            </div>

            <p class="small text-muted">
                Please include your full name as the payment reference.
            </p>

        </div>

        <div class="d-grid gap-3">

            <a href="https://www.paypal.com/" target="_blank" class="btn btn-primary btn-main mb-2">
                Go To PayPal
            </a>

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

    <script>
        function copyEmail() {
            const copyText = document.getElementById("paypalEmail");
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            navigator.clipboard.writeText(copyText.value).then(() => {
                alert("PayPal email copied to clipboard!");
            }).catch(() => {
                alert("Failed to copy email. Please copy manually.");
            });
        }
    </script>

</body>
</html>
