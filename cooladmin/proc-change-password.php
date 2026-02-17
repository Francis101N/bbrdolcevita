<?php

session_start();
include('connection/connect.php');

$admin_user = $_SESSION['admin_user'];

$old_password = mysqli_real_escape_string($db, $_POST['old_password']);
$new_password = mysqli_real_escape_string($db, $_POST['new_password']);
$confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

if ($old_password == '' || $new_password == '' || $confirm_password == '') {
    $error = "All fields are required";
    include('change-password.php');
    exit;
}


if ($new_password != $confirm_password) {
    $error = 'Password do not match';
    include('change-password.php');
    exit;
}


$sql = "SELECT * from admin WHERE username = '$admin_user' and password = '$old_password'";
$result = mysqli_query($db, $sql);
$num = mysqli_num_rows($result);
if ($num > 0) {
    $sql_2 = "UPDATE admin SET password ='$new_password' WHERE username='$admin_user'";
    mysqli_query($db, $sql_2);
    $success = "Password Changed Sucessfully";
    include('change-password.php');
    exit;
} else {
    $error = "Old Password is not correct";
    include('change-password.php');
    exit;
}
