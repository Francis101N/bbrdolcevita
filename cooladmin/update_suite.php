<?php
session_start();
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

include('connection/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Get POST values
    $suite_name = trim($_POST['suite_name']);
    $suite_description = trim($_POST['suite_description']);
    $suite_price = floatval($_POST['suite_price']);
    $max_occupancy = intval($_POST['max_occupancy']);
    $total_rooms = intval($_POST['total_rooms']);
    $available_rooms = intval($_POST['available_rooms']);
    $availability_status = $_POST['availability_status'];


    // Validate required fields
    if (empty($suite_name) || empty($suite_description)) {
        header("Location: suites.php?error=Please fill in all required fields.");
        exit;
    }

    // Fetch existing images from DB
    $stmt = $db->prepare("SELECT image1, image2, image3 FROM suites WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($currentImage1, $currentImage2, $currentImage3);
    $stmt->fetch();
    $stmt->close();

    // Function to handle image upload
    function handleImageUpload($fileInput, $currentImage)
    {
        if (isset($_FILES[$fileInput]) && $_FILES[$fileInput]['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES[$fileInput]['tmp_name'];
            $fileName = $_FILES[$fileInput]['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

            if (!in_array($fileExtension, $allowedExtensions)) {
                return ['error' => "Invalid file type for $fileInput."];
            }

            $newFileName = uniqid($fileInput . '_', true) . '.' . $fileExtension;
            $dest_path = 'uploads/' . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Delete old image if exists
                if (!empty($currentImage) && file_exists('uploads/' . $currentImage)) {
                    unlink('uploads/' . $currentImage);
                }
                return ['name' => $newFileName];
            } else {
                return ['error' => "Error uploading $fileInput."];
            }
        }

        // No new file uploaded, keep current
        return ['name' => $currentImage];
    }

    // Handle the 3 images
    $img1Result = handleImageUpload('suite_image1', $currentImage1);
    $img2Result = handleImageUpload('suite_image2', $currentImage2);
    $img3Result = handleImageUpload('suite_image3', $currentImage3);

    // Check for errors
    foreach ([$img1Result, $img2Result, $img3Result] as $imgRes) {
        if (isset($imgRes['error'])) {
            header("Location: suites.php?error=" . urlencode($imgRes['error']));
            exit;
        }
    }

    // Corrected variables for bind_param
    $stmt = $db->prepare("UPDATE suites SET name=?, description=?, price=?, image1=?, image2=?, image3=?, max_occupancy=?, total_rooms=?, available_rooms=?, availability_status=? WHERE id=?");

    $stmt->bind_param(
        "ssdsssiiisi",
        $suite_name,
        $suite_description,
        $suite_price,
        $img1Result['name'],
        $img2Result['name'],
        $img3Result['name'],
        $max_occupancy,
        $total_rooms,
        $available_rooms,
        $availability_status,
        $id
    );

    if ($stmt->execute()) {
        $stmt->close();
        $db->close();
        header("Location: suites.php?success=Suite updated successfully!");
        exit;
    } else {
        $stmt->close();
        $db->close();
        header("Location: suites.php?error=Error updating suite: " . urlencode($stmt->error));
        exit;
    }
} else {
    header("Location: suites.php");
    exit;
}
?>