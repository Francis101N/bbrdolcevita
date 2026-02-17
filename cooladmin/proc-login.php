<?php
session_start();
include('connection/connect.php');

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if ($username == '' && $password == '') {
    $error = "Username and Password is required";
    include('index.php');
    exit;
}

if (!$username || !$password) {
    $error = 'Please enter a valid Username or Password';
    include('index.php');
    exit;
}

$query = "select * from admin where username = '$username' && password = '$password'";
$result = mysqli_query($db, $query);
$num_rows = mysqli_num_rows($result);

if ($num_rows > 0) {
    $_SESSION['admin_user'] = $username;
    header("location: index2");
    exit;
} else {
    $error = 'Incorrect Username or password';
    include('index.php');
    exit;
}
