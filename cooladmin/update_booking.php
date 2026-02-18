<?php
session_start();
require_once('PHPMailer/PHPMailerAutoload.php');
include './connection/connect.php';

// Make sure it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: bookings.php");
    exit;
}

// Get booking ID from URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid booking ID.");
}
$booking_id = intval($_GET['id']);

// Collect form inputs safely
$fullnames = trim($_POST['fullnames']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$rooms_booked = intval($_POST['rooms_booked']);
$total_price = floatval($_POST['total_price']);
$booking_status = $_POST['booking_status'];

// Basic validation
if (empty($fullnames) || empty($email) || empty($phone) || $rooms_booked < 1 || $total_price < 0 || empty($booking_status)) {
    die("Please fill all required fields correctly.");
}

// Optional: validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

// Update booking in database
$stmt = $db->prepare("
    UPDATE bookings 
    SET full_name = ?, email = ?, phone = ?, rooms_booked = ?, total_price = ?, booking_status = ? 
    WHERE id = ?
");
$stmt->bind_param(
    "sssdisi",
    $fullnames,
    $email,
    $phone,
    $rooms_booked,
    $total_price,
    $booking_status,
    $booking_id
);

if ($stmt->execute()) {

    // === SEND EMAIL TO USER BASED ON STATUS ===
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'mail.techbyfrancis.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'portfolio@techbyfrancis.com';
    $mail->Password = 'TECHbyfrancis101$$';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('portfolio@techbyfrancis.com', 'bbrdolcevita Notification');
    $mail->isHTML(true);
    $mail->addAddress($email);

    // Set subject and body based on status
    switch (strtolower($booking_status)) {
        case 'confirmed':
            $subject = "Your Booking is Confirmed - bbrdolcevita";
            $body = "
                <h3>Hello {$fullnames},</h3>
                <p>Your booking has been <strong>confirmed</strong>! Here are the details:</p>
                <p><strong>Total Amount:</strong> €" . number_format($total_price, 2) . "</p>
                <p>We look forward to hosting you!</p>
                <br>
                <p>Best regards,<br>bbrdolcevita Team</p>
            ";
            break;

        case 'pending':
            $subject = "Your Booking is Pending - bbrdolcevita";
            $body = "
                <h3>Hello {$fullnames},</h3>
                <p>Your booking is currently <strong>pending</strong>. Please complete the payment to confirm your reservation.</p>
                <p><strong>Total Amount:</strong> €" . number_format($total_price, 2) . "</p>
                <br>
                <p>Best regards,<br>bbrdolcevita Team</p>
            ";
            break;

        case 'cancelled':
        case 'canceled':
            $subject = "Your Booking Has Been Cancelled - bbrdolcevita";
            $body = "
                <h3>Hello {$fullnames},</h3>
                <p>Your booking has been <strong>cancelled</strong>. If this was a mistake, please contact us immediately.</p>
                <p><strong>Total Amount:</strong> €" . number_format($total_price, 2) . "</p>
                <br>
                <p>Best regards,<br>bbrdolcevita Team</p>
            ";
            break;

        default:
            $subject = "Booking Update - bbrdolcevita";
            $body = "
                <h3>Hello {$fullnames},</h3>
                <p>Your booking status has been updated to <strong>{$booking_status}</strong>.</p>
                <p><strong>Total Amount:</strong> €" . number_format($total_price, 2) . "</p>
                <br>
                <p>Best regards,<br>bbrdolcevita Team</p>
            ";
            break;
    }

    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->send();

    $_SESSION['success'] = "Booking updated successfully and email sent to the user.";
    header("Location: bookings.php");
    exit;

} else {
    die("Error updating booking: " . $stmt->error);
}
?>