<?php
session_start();
include './connection/connect.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>
            alert('Invalid request. Booking ID missing.');
            window.location.href='bookings.php';
          </script>";
    exit;
}

$booking_id = intval($_GET['id']); 

try {

    $stmt = $db->prepare("DELETE FROM bookings WHERE id = ?");
    $stmt->bind_param("i", $booking_id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Booking deleted successfully.');
                window.location.href='bookings.php';
              </script>";
    } else {
        throw new Exception("Failed to delete booking: " . $stmt->error);
    }

} catch (Exception $e) {
    echo "<h2>Error deleting booking</h2>";
    echo "<p>Details: " . $e->getMessage() . "</p>";
    echo "<a href='bookings.php'>Back to Dashboard</a>";
    exit;
}
?>
