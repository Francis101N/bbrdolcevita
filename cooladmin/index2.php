<?php
session_start();
include('connection/connect.php');

if (!isset($_SESSION['admin_user'])) {
    include('index.php');
    exit;
}
header("refresh:5;url=dashboard");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <title>Logged In</title>

    <!-- Bootstrap -->
    <link href="css_login/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #87ceeb;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
        }

        .login-card {
            background: #fff;
            border-radius: 14px;
            padding: 35px 30px;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            text-align: center;
            animation: fadeInUp 0.6s ease;
        }

        .login-card .icon {
            width: 70px;
            height: 70px;
            background: rgba(96, 16, 0, 0.1);
            color: #601000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin: 0 auto 20px;
        }

        .login-card h3 {
            font-weight: 600;
            color: #111;
            margin-bottom: 10px;
        }

        .login-card p {
            color: #555;
            font-size: 15px;
            line-height: 1.6;
        }

        .username {
            color: #601000;
            font-weight: 600;
        }

        .redirect-text {
            margin-top: 15px;
            font-size: 14px;
        }

        .redirect-text a {
            color: #601000;
            font-weight: 600;
            text-decoration: none;
        }

        .redirect-text a:hover {
            text-decoration: underline;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="icon">
            ✔
        </div>

        <h3>
            Welcome,
            <span class="username">
                <?php echo ucwords($_SESSION['admin_user']); ?>
            </span>
        </h3>

        <p>
            You are successfully logged in to the admin panel.
        </p>

        <p class="redirect-text">
            You will be redirected to your dashboard in <strong>5 seconds</strong>.<br>
            If not redirected,
            <a href="dashboard">click here</a>.
        </p>
    </div>

</body>

</html>