<?php
session_start();
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
    $_SESSION['success'] = "Booking updated successfully.";
    header("Location: bookings.php"); // redirect back to bookings list
    exit;
} else {
    die("Error updating booking: " . $stmt->error);
}
