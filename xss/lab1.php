<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lab 1 - XSS</title>
  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column; /* stack title + form */
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
    h4 {
      color: #fff;
      margin-bottom: 30px;
      font-weight: 700;
      text-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }
    .search-box {
      background: #fff;
      border-radius: 50px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      padding: 10px 20px;
      max-width: 500px;
      width: 100%;
    }
    .form-control {
      border: none;
      border-radius: 50px;
      box-shadow: none !important;
    }
    .btn-search {
      border-radius: 50px;
      padding: 0.5rem 1.5rem;
      background: #2575fc;
      color: #fff;
      border: none;
      transition: 0.3s;
    }
    .btn-search:hover {
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
  <h1>Lab 1 - XSS</h1>

  
  <form method="post" action="" class="search-box d-flex">
    <input type="text" name="search" class="form-control me-2" placeholder="Search...">
    <button type="submit" name="submit" class="btn btn-search">Search</button>
    <br>
  </form>
    <?php
        if (isset($_POST["submit"])) {
            $search = $_POST["search"];
            echo "<br>";
            echo " <h4> searching for ".$search." </h4>";
        }

    ?>
  
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
