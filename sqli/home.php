<?php
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome</title>
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
      color: #fff;
    }
    .welcome-box {
      background: #fff;
      color: #333;
      border-radius: 20px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      padding: 40px 30px;
      max-width: 400px;
      width: 100%;
    }
    .user-icon {
      font-size: 60px;
      color: #2575fc;
      margin-bottom: 20px;
    }
    h2 {
      font-weight: 700;
      margin-bottom: 15px;
    }
    .btn-logout {
      margin-top: 20px;
      border-radius: 12px;
      padding: 0.5rem 1.5rem;
      background: #2575fc;
      color: #fff;
      border: none;
      transition: 0.3s;
      width: 100%;
    }
    .btn-logout:hover {
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

  <div class="welcome-box">
    <div class="user-icon">👤</div>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>You have successfully logged in.</p>
    <form method="post" action="">
      <button type="submit" name="logout" class="btn btn-logout">Logout</button>
    </form>
  </div>
  <?php
  if (isset($_POST['logout'])) {
    session_start();
    session_destroy();
    header("Location: lab1.php");
    exit();
  }

  ?>

  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
