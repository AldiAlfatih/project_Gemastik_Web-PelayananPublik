<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/dac9dbf949.js" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent" id="navbar">
        <div class="container">
          <a class="navbar-brand ml-2" href="#"><img id="logo" src="logo.png" alt="" width="130" height="40" class="d-inline-block"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="classification.html">Classification</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="detect.html">Detection</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="newsandalert.html">News and Alert</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manajementanaman.html">Manajemen Data Tanaman</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Discussion
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="pakar.html">Pakar</a></li>
                  <li><a class="dropdown-item" href="komunitas.html">Community</a></li>
                </ul>
              </li>
            </ul>
            <div class="profile">
                <?php if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true): ?>
                    <span class="navbar-text">
                        Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> | <a href="logout.php">Logout</a>
                    </span>
                <?php else: ?>
                    <a href="login.php" class="btn btn-primary">Login</a>
                    <a href="register.php" class="btn btn-secondary">Register</a>
                <?php endif; ?>
            </div>
          </div>
        </div>
    </nav>
    <div class="content container">
        <h3>Identification, Detection, and <br>Share Your Observations with the Community</h3>
        <p>Agri Siget is a website to help planters identify diseases in <br>plantation/cultivation crops, as well as to categorize and <br>display plant information scanned using a camera or image.</p>
        <?php if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true && isset($_SESSION['username'])): ?>
            <h4>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h4>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
