<?php

include('connection/connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = intval($_GET['id']);

    // ✅ 1. Check if suite has bookings FIRST
    $check = $db->prepare("SELECT COUNT(*) as total FROM bookings WHERE suite_id = ?");
    $check->bind_param("i", $id);
    $check->execute();
    $result = $check->get_result()->fetch_assoc();

    if ($result['total'] > 0) {
        header("Location: suites.php?error=Cannot delete suite. Bookings exist.");
        exit();
    }

    // ✅ 2. Delete suite if no bookings
    $stmt = $db->prepare("DELETE FROM suites WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: suites.php?success=Suite deleted successfully.");
        exit();
    } else {
        echo "Error deleting suite: " . $stmt->error;
    }

    $stmt->close();
    $check->close();

} else {
    echo "Invalid request.";
}

$db->close();
?>
