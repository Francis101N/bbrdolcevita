<?php

include('connection/connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $db->prepare("DELETE FROM suites WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Record deleted successfully, redirect back to suites page
        header("Location: suites.php?success= Suite deleted .");
        exit;
    } else {
        
        echo "Error deleting suite: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$db->close();
?>