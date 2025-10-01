<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SQLI Labs</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .lab-list {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      padding: 30px;
      max-width: 400px;
      width: 100%;
      text-align: center;
    }
    .lab-list h2 {
      margin-bottom: 20px;
      color: #333;
      font-weight: 600;
    }
    .btn-lab {
      border-radius: 50px;
      padding: 0.6rem 1.5rem;
      margin: 8px 0;
      width: 100%;
      background: #2575fc;
      color: #fff;
      border: none;
      transition: 0.3s;
      text-decoration: none;
      display: inline-block;
    }
    .btn-lab:hover {
      background: #6a11cb;
      color: #fff;
    }
    .site-brand{
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
@media (max-width:420px){
  .site-brand{ font-size: 0.95rem; top: 12px; padding:4px 8px; }
}

  </style>
</head>
<body>
  
  <div class="site-brand">ITGate Academy</div>
  <div class="lab-list">
    <h2>XSS Lab</h2>
    <a href="lab1.php" class="btn btn-lab">Lab 1</a>
    <a href="lab2.php" class="btn btn-lab">Lab 2</a>
    <a href="lab3.php" class="btn btn-lab">Lab 3</a>
    <a href="lab4.php" class="btn btn-lab">Lab 4</a>
    <a href="lab5.php" class="btn btn-lab">Lab 5</a>
    <a href="secured.php" class="btn btn-lab">Secured version</a>
    <a href="../index.php" class="btn btn-lab">back</a>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
