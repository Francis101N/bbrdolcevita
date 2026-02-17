<?php
ini_set('display_errors', 0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>

  <!-- Bootstrap -->
  <link href="css_login/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #87ceeb;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-wrapper {
      width: 100%;
      max-width: 420px;
      padding: 20px;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(15px);
      border-radius: 16px;
      padding: 40px 30px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
      color: #fff;
    }

    .login-logo {
      text-align: center;
      margin-bottom: 25px;
    }

    .login-logo img {
      width: 180px;
    }

    .login-title {
      text-align: center;
      font-weight: 500;
      margin-bottom: 30px;
      font-size: 18px;
      opacity: 0.85;
    }

    .form-control {
      height: 48px;
      border-radius: 8px;
      border: none;
      padding-left: 15px;
      margin-bottom: 20px;
    }

    .form-control:focus {
      box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3);
    }

    .btn-login {
      background: #ffffff;
      color: #2c5364;
      height: 35px;
      width: 100%;
      border-radius: 8px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-login:hover {
      background: #f1f1f1;
      transform: translateY(-2px);
    }

    .alert {
      border-radius: 8px;
      font-size: 14px;
    }

    @media(max-width: 576px) {
      .login-card {
        padding: 30px 20px;
      }
    }
  </style>
</head>

<body>

  <div class="login-wrapper">
    <form action="proc-login.php" method="post">
      <div class="login-card">

        <div class="login-logo">
          <img src="../dist/images/BBR_logo-removebg-preview-removebg-preview.png" alt="Logo">
        </div>

        <div class="login-title">
          Secure Admin Access
        </div>

        <?php
        if (isset($error)) {
          echo '<div class="alert alert-danger text-center">' . $error . '</div>';
        }
        ?>

        <input type="text" name="username" placeholder="Username" class="form-control" required>

        <input type="password" name="password" placeholder="Password" class="form-control" required>

        <div>
          <button type="submit" name="btn" class="btn btn-login">Login</button>
        </div>

      </div>
    </form>
  </div>

  <script src="css_login/bootstrap.min.js"></script>

</body>

</html>