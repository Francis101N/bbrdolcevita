<?php
session_start();

// Ensure admin is logged in
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

include('connection/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Collect form data
    $suite_name        = trim($_POST['suite_name']);
    $suite_description = trim($_POST['suite_description']);
    $single_price      = floatval($_POST['single_price']);
    $shared_price      = floatval($_POST['shared_price']);
    $max_occupancy     = intval($_POST['max_occupancy']);
    $total_rooms       = intval($_POST['total_rooms']);
    $available_rooms   = intval($_POST['available_rooms']);
    $availability_status = trim($_POST['availability_status']);

    // Basic validation
    if (
        empty($suite_name) || empty($suite_description) || $single_price < 0 || $shared_price < 0 ||
        $max_occupancy < 1 || $total_rooms < 1 || $available_rooms < 0 || empty($availability_status)
    ) {
        header("Location: add_suite.php?error=Please fill in all fields correctly.");
        exit;
    }

    // Allowed image extensions
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $uploadDir = 'uploads/';

    // Image upload helper
    function uploadImage($fileKey, $allowedExtensions, $uploadDir) {
        if (!isset($_FILES[$fileKey]) || $_FILES[$fileKey]['error'] !== UPLOAD_ERR_OK) {
            return false;
        }

        $fileTmpPath = $_FILES[$fileKey]['tmp_name'];
        $fileName    = $_FILES[$fileKey]['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            return false;
        }

        $newFileName = uniqid($fileKey . '_', true) . '.' . $fileExtension;
        $destPath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            return $newFileName;
        }

        return false;
    }

    // Upload all 3 images
    $image1 = uploadImage('suite_image1', $allowedExtensions, $uploadDir);
    $image2 = uploadImage('suite_image2', $allowedExtensions, $uploadDir);
    $image3 = uploadImage('suite_image3', $allowedExtensions, $uploadDir);

    if (!$image1 || !$image2 || !$image3) {
        header("Location: add_suite.php?error=All three images are required and must be valid image types.");
        exit;
    }

    // Insert into database
    $stmt = $db->prepare("
        INSERT INTO suites 
        (name, description, single_price, shared_price, image1, image2, image3, max_occupancy, total_rooms, available_rooms, availability_status, date_created)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
    ");

    $stmt->bind_param(
        "ssddsssiiis",
        $suite_name,
        $suite_description,
        $single_price,
        $shared_price,
        $image1,
        $image2,
        $image3,
        $max_occupancy,
        $total_rooms,
        $available_rooms,
        $availability_status
    );

    if ($stmt->execute()) {
        header("Location: suites.php?success=Suite added successfully!");
        exit;
    } else {
        // Delete uploaded images if insert fails
        @unlink($uploadDir . $image1);
        @unlink($uploadDir . $image2);
        @unlink($uploadDir . $image3);

        header("Location: add_suite.php?error=Error saving suite: " . $stmt->error);
        exit;
    }

    $stmt->close();
    $db->close();
} else {
    header("Location: add_suite.php");
    exit;
}
?>
