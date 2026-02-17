<?php
session_start();
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

include('connection/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $suite_name = trim($_POST['suite_name']);
    $suite_description = trim($_POST['suite_description']);
    $suite_price = floatval($_POST['suite_price']);
    $max_occupancy = intval($_POST['max_occupancy']);
    $total_rooms = intval($_POST['total_rooms']);
    $available_rooms = intval($_POST['available_rooms']);
    $availability_status = trim($_POST['availability_status']); // new field

    if (
        empty($suite_name) || empty($suite_description) || empty($suite_price) ||
        empty($max_occupancy) || empty($total_rooms) || empty($available_rooms) || empty($availability_status)
    ) {
        header("Location: add_suite.php?error=Please fill in all fields.");
        exit;
    }

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $uploadDir = 'uploads/';

    function uploadImage($fileKey, $allowedExtensions, $uploadDir) {
        if (!isset($_FILES[$fileKey]) || $_FILES[$fileKey]['error'] !== UPLOAD_ERR_OK) {
            return false;
        }

        $fileTmpPath = $_FILES[$fileKey]['tmp_name'];
        $fileName = $_FILES[$fileKey]['name'];
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

    // Insert into DB including availability_status
    $stmt = $db->prepare("INSERT INTO suites 
        (name, description, price, image1, image2, image3, max_occupancy, total_rooms, available_rooms, availability_status, date_created) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

    $stmt->bind_param(
        "ssdsssiiis",
        $suite_name,
        $suite_description,
        $suite_price,
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
        // Delete uploaded images if DB insert fails
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
