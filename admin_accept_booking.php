<?php
require_once('PHPMailer/PHPMailerAutoload.php');
include './connection/connect.php';

// Check if session_id is provided
if (!isset($_GET['session_id']) || empty($_GET['session_id'])) {
    echo "<script>
            alert('Invalid request.');
            window.location.href='admin_dashboard.php';
          </script>";
    exit;
}

$session_id = $_GET['session_id'];

// Fetch all bookings for this session
$stmt = $db->prepare("
    SELECT b.id AS booking_id, b.full_name, b.email, b.rooms_booked, b.room_type, b.check_in, b.check_out, 
           s.id AS suite_id, s.name AS suite_name
    FROM bookings b
    JOIN suites s ON b.suite_id = s.id
    WHERE b.session_id = ?
");
$stmt->bind_param("s", $session_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<script>
            alert('No bookings found for this session.');
            window.location.href='admin_dashboard.php';
          </script>";
    exit;
}

$booked_rooms = [];
$fullname = $email = '';

$db->begin_transaction();

try {
    while ($row = $result->fetch_assoc()) {
        $fullname = $row['full_name'];
        $email    = $row['email'];

        // Collect room info for email
        $booked_rooms[] = "<strong>{$row['suite_name']}</strong> ({$row['room_type']}, Rooms: {$row['rooms_booked']})<br>"
                          . "Check-In: {$row['check_in']} | Check-Out: {$row['check_out']}";

        // Update booking status to Confirmed
        $update_booking = $db->prepare("UPDATE bookings SET booking_status = 'Confirmed' WHERE id = ?");
        $update_booking->bind_param("i", $row['booking_id']);
        if (!$update_booking->execute()) {
            throw new Exception("Failed to update booking ID {$row['booking_id']}: " . $update_booking->error);
        }

        // Update suite availability to Occupied
        $update_suite = $db->prepare("UPDATE suites SET availability_status = 'Occupied' WHERE id = ?");
        $update_suite->bind_param("i", $row['suite_id']);
        if (!$update_suite->execute()) {
            throw new Exception("Failed to update suite ID {$row['suite_id']}: " . $update_suite->error);
        }
    }

    $db->commit();

    // Prepare email content
    $room_list = implode("<br><br>", $booked_rooms);

    $userSubject = "Your Booking is Confirmed - bbrdolcevita";
    $userBody = "
        <div style='font-family:Arial,sans-serif; color:#333;'>
            <h2 style='color:#1f95d2;'>Hello {$fullname},</h2>
            <p>Your booking has been successfully confirmed! Here are your reservation details:</p>
            <p><strong>Rooms Booked:</strong><br>{$room_list}</p>
            <p><strong>Status:</strong> Confirmed</p>
            <br>
            <p>Thank you for choosing <strong>bbrdolcevita</strong>. We look forward to hosting you!</p>
            <br>
            <p>Best regards,<br><strong>bbrdolcevita Team</strong></p>
        </div>
    ";

    // Send email using PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'mail.techbyfrancis.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'portfolio@techbyfrancis.com';
    $mail->Password   = 'TECHbyfrancis101$$';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('portfolio@techbyfrancis.com', 'bbrdolcevita Notification');
    $mail->isHTML(true);
    $mail->addAddress($email);
    $mail->Subject = $userSubject;
    $mail->Body    = $userBody;

    if (!$mail->send()) {
        throw new Exception("Email could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }

    echo "<script>
            alert('Booking confirmed and email sent successfully!');
            window.location.href='booking_success.php';
          </script>";
    exit;

} catch (Exception $e) {
    $db->rollback();
    echo "<h2>Booking confirmation failed!</h2>";
    echo "<p>Error Details: " . $e->getMessage() . "</p>";
    exit;
}
?>
