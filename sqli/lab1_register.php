<?php

session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lab 1 - SQLI</title>
  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-align: center;
    }
    h1 {
      color: #fff;
      margin-bottom: 30px;
      font-weight: 700;
      text-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }
    .login-box {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      padding: 30px 25px;
      max-width: 400px;
      width: 100%;
    }
    .form-control {
      border-radius: 12px;
      margin-bottom: 15px;
    }
    .btn-login {
      border-radius: 12px;
      padding: 0.5rem 1.5rem;
      background: #2575fc;
      color: #fff;
      border: none;
      transition: 0.3s;
      width: 100%;
    }
    .btn-login:hover {
      background: #6a11cb;
    }
    .site-brand {
      position: absolute;
      top: 18px;
      left: 50%;
      transform: translateX(-50%);
      color: #fff;
      font-weight: 800;
      font-size: 1.1rem;
      letter-spacing: 0.5px;
      text-shadow: 0 2px 6px rgba(0,0,0,0.35);
      background: rgba(255,255,255,0.06);
      padding: 6px 12px;
      border-radius: 12px;
    }
  </style>
</head>
<body>
  <div class="site-brand">ITGate Academy</div>
  <h1>Register</h1>

  <div class="login-box">
    <form method="post" action="">
      <input type="text" name="username" class="form-control" placeholder="Username" required>
      <input type="text" name="email" class="form-control" placeholder="email" required>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <button type="submit" name="register" class="btn btn-login">Register</button>
    </form>
  </div>


  <?php
    if (isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $query = "INSERT INTO user_data (email, username, password) VALUES ('$email', '$username', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "
            <br><br>
            <div class='alert alert-success' role='alert'>
                 Registration successful. You can now <a href='lab1.php'>login</a>.
            </div>
            ";
        } else {
            echo "
            <br><br>
            <div class='alert alert-danger' role='alert'>
                 Registration failed: " . mysqli_error($conn) . "
            </div>
            ";
        }
    }
  ?> 

  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
