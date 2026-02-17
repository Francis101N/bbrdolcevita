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

// Validate dates
if (strtotime($checkin_date) >= strtotime($checkout_date)) {
    echo "<script>alert('Check-out date must be after check-in date.'); window.location.href='accomodations.php';</script>";
    exit;
}

// Calculate number of nights
$checkin = new DateTime($checkin_date);
$checkout = new DateTime($checkout_date);
$interval = $checkout->diff($checkin);
$nights = $interval->days;

// Check suite availability
$stmt_suite = $db->prepare("SELECT price, availability_status FROM suites WHERE id = ?");
$stmt_suite->bind_param("i", $suite_id);
$stmt_suite->execute();
$result_suite = $stmt_suite->get_result();
$suite = $result_suite->fetch_assoc();

if (!$suite) {
    echo "<script>alert('Suite not found.'); window.location.href='accomodations.php';</script>";
    exit;
}

if ($suite['availability_status'] === 'Occupied') {
    echo "<script>alert('This suite is currently occupied and not available.'); window.location.href='accomodations.php';</script>";
    exit;
}

// Calculate prices
$unit_price = $suite['price'];

$total_price = $unit_price * $rooms * $nights;

$session_id = session_id();

// Check if suite is already in cart
$stmt_check = $db->prepare("SELECT id FROM cart WHERE session_id = ? AND suite_id = ?");
$stmt_check->bind_param("si", $session_id, $suite_id);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    // Already in cart: update rooms, check-in/out, unit price, total price
    $cart_item = $result_check->fetch_assoc();
    $stmt_update = $db->prepare("
        UPDATE cart 
        SET rooms = rooms + ?, checkin_date = ?, checkout_date = ?, unit_price = ?, total_price = ?
        WHERE id = ?
    ");
    $stmt_update->bind_param("issdsi", $rooms, $checkin_date, $checkout_date, $unit_price, $total_price, $cart_item['id']);
    $stmt_update->execute();
} else {
    // Insert new cart item
    $stmt_insert = $db->prepare("
        INSERT INTO cart (session_id, suite_id, rooms, checkin_date, checkout_date, unit_price, total_price)
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt_insert->bind_param("siissdd", $session_id, $suite_id, $rooms, $checkin_date, $checkout_date, $unit_price, $total_price);
    $stmt_insert->execute();
}

// Alert success and redirect
echo "<script>alert('Added to cart successfully!'); window.location.href='accomodations.php';</script>";
exit;
?>