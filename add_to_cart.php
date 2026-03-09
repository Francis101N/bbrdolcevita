<?php
session_start();
include './connection/connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<script>alert('Invalid request.'); window.location.href='accomodations.php';</script>";
    exit;
}

// Get form inputs
$suite_id = intval($_POST['suite_id']);
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];
$rooms = intval($_POST['rooms']);
$room_type = $_POST['room_type']; // Single or Shared

// Validate dates
$retreat_start = new DateTime('2026-05-14');
$retreat_end = new DateTime('2026-05-17');
$checkin = new DateTime($checkin_date);
$checkout = new DateTime($checkout_date);

if ($checkin < $retreat_start || $checkout > $retreat_end) {
    echo "<script>alert('The selected dates are not available. Retreat bookings are only available from 14–17 May 2026.'); window.location.href='accomodations.php';</script>";
    exit;
}

if ($checkin >= $checkout) {
    echo "<script>alert('Check-out date must be after check-in date.'); window.location.href='accomodations.php';</script>";
    exit;
}

// Fetch suite availability
$stmt_suite = $db->prepare("SELECT availability_status FROM suites WHERE id = ?");
$stmt_suite->bind_param("i", $suite_id);
$stmt_suite->execute();
$result_suite = $stmt_suite->get_result();
$suite = $result_suite->fetch_assoc();

if (!$suite) {
    echo "<script>alert('Suite not found.'); window.location.href='accomodations.php';</script>";
    exit;
}

if ($suite['availability_status'] === 'Occupied') {
    echo "<script>alert('This suite is currently occupied.'); window.location.href='accomodations.php';</script>";
    exit;
}

// Set fixed package prices
if ($room_type === 'Single') {
    $unit_price = 1500.00; // fixed single room price
} elseif ($room_type === 'Shared') {
    $unit_price = 799.00; // fixed shared room price
} else {
    echo "<script>alert('Invalid room type selected.'); window.location.href='accomodations.php';</script>";
    exit;
}

// Total price = unit price × number of rooms
$total_price = $unit_price * $rooms;

$session_id = session_id();

// Check if suite + room type already exists in cart
$stmt_check = $db->prepare("SELECT id FROM cart WHERE session_id = ? AND suite_id = ? AND room_type = ?");
$stmt_check->bind_param("sis", $session_id, $suite_id, $room_type);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    // Update existing cart item
    $cart_item = $result_check->fetch_assoc();

    $stmt_update = $db->prepare("
        UPDATE cart 
        SET rooms = rooms + ?, 
            checkin_date = ?, 
            checkout_date = ?, 
            unit_price = ?, 
            total_price = ?
        WHERE id = ?
    ");
    $stmt_update->bind_param(
        "issddi",
        $rooms,
        $checkin_date,
        $checkout_date,
        $unit_price,
        $total_price,
        $cart_item['id']
    );
    $stmt_update->execute();
} else {
    // Insert new cart item
    $stmt_insert = $db->prepare("
        INSERT INTO cart 
        (session_id, suite_id, rooms, room_type, checkin_date, checkout_date, unit_price, total_price)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt_insert->bind_param(
        "siisssdd",
        $session_id,
        $suite_id,
        $rooms,
        $room_type,
        $checkin_date,
        $checkout_date,
        $unit_price,
        $total_price
    );
    $stmt_insert->execute();
}

// Success message
echo "<script>alert('Added to cart successfully!'); window.location.href='accomodations.php';</script>";
exit;
?>