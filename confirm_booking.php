<?php
session_start();
require_once('PHPMailer/PHPMailerAutoload.php');
include './connection/connect.php';

// Ensure booking session exists
if (!isset($_SESSION['pending_booking'])) {
    echo "<script>
            alert('Invalid access.');
            window.location.href='checkout.php';
          </script>";
    exit;
}

$session_id = session_id();
$data = $_SESSION['pending_booking'];

$fullname = trim($data['fullname']);
$email = trim($data['email']);
$phone = trim($data['phone']);

// Validate required fields
if (empty($fullname) || empty($email) || empty($phone)) {
    echo "<script>
            alert('Missing booking information.');
            window.location.href='checkout.php';
          </script>";
    exit;
}

// Start transaction
$db->begin_transaction();

try {
    $total_booking_amount = 0;
    $booked_rooms = []; // Stores info for email

    // Fetch all cart items (room_type comes from cart)
    $stmt = $db->prepare("
        SELECT c.*, s.name 
        FROM cart c 
        JOIN suites s ON c.suite_id = s.id 
        WHERE c.session_id = ?
    ");
    $stmt->bind_param("s", $session_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        throw new Exception("Cart is empty.");
    }

    while ($cart_item = $result->fetch_assoc()) {

        // Insert into bookings table including room_type
        $stmt_insert = $db->prepare("
            INSERT INTO bookings 
            (suite_id, session_id, full_name, email, phone, check_in, check_out, rooms_booked, room_type, total_price, booking_status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending')
        ");
        $stmt_insert->bind_param(
            "issssssisd",
            $cart_item['suite_id'],
            $session_id,
            $fullname,
            $email,
            $phone,
            $cart_item['checkin_date'],
            $cart_item['checkout_date'],
            $cart_item['rooms'],
            $cart_item['room_type'], // from cart
            $cart_item['total_price']
        );

        if (!$stmt_insert->execute()) {
            throw new Exception("Booking insert failed: " . $stmt_insert->error);
        }

        // Prepare room info for email
        $booked_rooms[] = "<strong>{$cart_item['name']}</strong> ({$cart_item['room_type']}, Rooms: {$cart_item['rooms']})<br>"
            . "Check-In: {$cart_item['checkin_date']} | Check-Out: {$cart_item['checkout_date']}";

        $total_booking_amount += $cart_item['total_price'];
    }

    // Clear cart
    $delete_cart = $db->prepare("DELETE FROM cart WHERE session_id = ?");
    $delete_cart->bind_param("s", $session_id);
    $delete_cart->execute();

    $db->commit();
    unset($_SESSION['pending_booking']); // Clear session

    // Combine room info for emails
    $room_list = implode("<br><br>", $booked_rooms);

    // === USER EMAIL ===
    $userSubject = "Your Booking Confirmation - bbrdolcevita";
    $userBody = "
        <div style='font-family:Arial,sans-serif; color:#333;'>
            <h2 style='color:#1f95d2;'>Hello {$fullname},</h2>
            <p>Thank you for booking with <strong>bbrdolcevita</strong>! Your reservation details are below:</p>
            <p><strong>Rooms Booked:</strong><br>{$room_list}</p>
            <p><strong>Total Amount:</strong> €" . number_format($total_booking_amount, 2) . "</p>
            <p>Please complete your payment using the instructions provided in your booking portal. If you have already made the payment, kindly ignore this email.</p>
            <br>
            <p>We look forward to hosting you!<br><strong>bbrdolcevita Team</strong></p>
        </div>
    ";

    // === ADMIN EMAIL ===
    $adminSubject = "New Booking Received from {$fullname}";
    $adminBody = "
        <div style='font-family:Arial,sans-serif; color:#333;'>
            <h2 style='color:#0d6efd;'>New Booking Notification</h2>
            <p><strong>Guest Name:</strong> {$fullname}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Rooms Booked:</strong><br>{$room_list}</p>
            <p><strong>Total Amount:</strong> €" . number_format($total_booking_amount, 2) . "</p>
            <p><strong>Status:</strong> Pending</p>
            <br>
            <a href='http://localhost/bbr/admin_accept_booking.php?session_id={$session_id}' 
               style='display:inline-block;padding:12px 20px;background:#0d6efd;color:#fff;text-decoration:none;border-radius:8px;font-weight:bold;'>
               Accept Booking
            </a>
        </div>
    ";

    // === PHPMailer ===
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

    // Send to Admin
    $mail->addAddress('francisnwankwo1972@gmail.com');
    $mail->Subject = $adminSubject;
    $mail->Body = $adminBody;
    $mail->send();

    // Send to User
    $mail->clearAddresses();
    $mail->addAddress($email);
    $mail->Subject = $userSubject;
    $mail->Body = $userBody;
    $mail->send();

    echo "<script>
        alert('Booking submitted successfully! Please check your email for confirmation.');
        setTimeout(function(){
            window.location.href='index.php';
        }, 100); // 100ms delay
      </script>";

} catch (Exception $e) {
    $db->rollback();
    echo "<h2>Booking failed!</h2>";
    echo "<p>Error Details: " . $e->getMessage() . "</p>";
    exit;
}
?>