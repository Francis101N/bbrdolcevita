<?php
session_start();
require_once('PHPMailer/PHPMailerAutoload.php');
include './connection/connect.php';

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

if (empty($fullname) || empty($email) || empty($phone)) {
    echo "<script>
            alert('Missing booking information.');
            window.location.href='checkout.php';
          </script>";
    exit;
}

$db->begin_transaction();

try {
    $total_booking_amount = 0;
    $booked_rooms = []; // will store room name, check-in/out, and quantity

    // Fetch all cart items for this session
    $stmt = $db->prepare("SELECT * FROM cart WHERE session_id = ?");
    $stmt->bind_param("s", $session_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        throw new Exception("Cart is empty.");
    }

    while ($cart_item = $result->fetch_assoc()) {

        // Insert booking into bookings table
        $stmt_insert = $db->prepare("
            INSERT INTO bookings 
            (suite_id, session_id, full_name, email, phone, check_in, check_out, rooms_booked, total_price, booking_status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending')
        ");

        $stmt_insert->bind_param(
            "issssssid",
            $cart_item['suite_id'],
            $session_id,
            $fullname,
            $email,
            $phone,
            $cart_item['checkin_date'],
            $cart_item['checkout_date'],
            $cart_item['rooms'],
            $cart_item['total_price']
        );

        $stmt_insert->execute();

        // Fetch suite name for email display
        $suite_stmt = $db->prepare("SELECT name FROM suites WHERE id = ?");
        $suite_stmt->bind_param("i", $cart_item['suite_id']);
        $suite_stmt->execute();
        $suite_result = $suite_stmt->get_result();
        $suite_row = $suite_result->fetch_assoc();

        // Store info for email
        $booked_rooms[] = $suite_row['name']
            . " (Rooms: " . $cart_item['rooms'] . ")<br>"
            . "Check-In: " . $cart_item['checkin_date']
            . " | Check-Out: " . $cart_item['checkout_date'];

        $total_booking_amount += $cart_item['total_price'];

        // Update suite availability
        // $update_suite = $db->prepare("UPDATE suites SET availability_status = 'Occupied' WHERE id = ?");
        // $update_suite->bind_param("i", $cart_item['suite_id']);
        // $update_suite->execute();
    }

    // Delete all cart items for this session
    $delete_cart = $db->prepare("DELETE FROM cart WHERE session_id = ?");
    $delete_cart->bind_param("s", $session_id);
    $delete_cart->execute();

    $db->commit();
    unset($_SESSION['pending_booking']); // clear session

    // Prepare email content
    $room_list = implode("<br><br>", $booked_rooms);

    // User email
    $userSubject = "Your Booking Details & Confirmation";
    $userBody = "
        <h3>Hello {$fullname},</h3>
        <p>Thank you for booking with us! Here are your reservation details:</p>
        <p><strong>Rooms Booked:</strong><br>{$room_list}</p>
        <p><strong>Total Amount:</strong> €" . number_format($total_booking_amount, 2) . "</p>
        <br>
        <p>Please complete your payment using the instructions in your booking portal to confirm your reservation. If you have already made the payment, kindly disregard this message. </p>
        <br><br>
        <p>Best regards,<br>bbrdolcevita Team</p>
    ";

    // Admin email
    $adminSubject = "New Booking from {$fullname}";
    $adminBody = "
        <h2>New Booking Received</h2>
        <p><strong>Guest Name:</strong> {$fullname}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Rooms Booked:</strong><br>{$room_list}</p>
        <p><strong>Total Amount:</strong> €" . number_format($total_booking_amount, 2) . "</p>
        <p><strong>Booking Status:</strong> Pending </p>
        <br>
        <p>Click the button below to accept this booking:</p>
        <a href='http://localhost/bbr/admin_accept_booking.php?session_id={$session_id}' 
           style='display:inline-block;padding:12px 20px;background:#0d6efd;color:#fff;text-decoration:none;border-radius:8px;font-weight:bold;'>
           Accept Booking
        </a>
    ";

    // PHPMailer setup
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
            window.location.href='index.php';
          </script>";
    exit;

} catch (Exception $e) {
    $db->rollback();
    echo "<script>
            alert('Booking failed. Please try again.');
            window.location.href='checkout.php';
          </script>";
    exit;
}
?>