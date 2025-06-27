<?php
  include("../connect.php");

  session_start();

  $userID = $_SESSION['id'];
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $firstName = $_SESSION['firstName'];
  $lastName = $_SESSION['lastName'];

  if(!isset($username)){
    header("Location: login.php");
  }

  $petQuery = "SELECT * FROM admins WHERE id = '$userID'";
  $petResult = executeQuery($petQuery);
?>

<!doctype html>
<html lang="en">

<head>
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
  <title>Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/style.css">

  <style>
    body {
      background-color: #f6f4e9;
      font-family: 'Satoshi', sans-serif;
      scroll-behavior: smooth;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      z-index: 1000;
      overflow-y: auto;
    }

    .main-content {
      margin-left: 16.66667%;
      min-height: 100vh;
    }

    .nav-link {
      padding: 0.75rem 1rem;
      border-radius: 0.375rem;
      margin: 0.25rem 0.5rem;
      transition: all 0.2s ease;
    }

    .nav-link i {
      width: 20px;
      margin-right: 0.5rem;
    }

    .card-glass {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(8px);
      border-radius: 10px;
      color: white;
    }

    @media (max-width: 576px) {
      .sidebar {
        width: 25%;
      }

      .main-content {
        margin-left: 25%;
      }
    }

    @media (max-width: 1200px) {
      .sidebar {
        width: 16.66667%;
      }

      .main-content {
        margin-left: 16.66667%;
      }
    }
  </style>
</head>

<body>

<div class="sidebar col-2 col-sm-3 col-xl-2 bg-dark">
  <nav class="navbar bg-dark border-bottom border-white" data-bs-theme="dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand fw-bold">iskolarworks</a>
    </div>
  </nav>

  <nav class="nav flex-column mt-3">
    <a class="nav-link text-white active" href="#">
      <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <hr class="text-white mx-3">
    <a class="nav-link text-white" href="login.php">
      <i class="fa-solid fa-arrow-right-to-bracket"></i> Logout
    </a>
  </nav>
</div>

<div class="main-content">
  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Admin Dashboard</span>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fa-solid fa-user-circle"></i> <?php echo htmlspecialchars($firstName . ' ' . $lastName); ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-4">
    <div class="row mb-5">
      <div class="col-12">
        <div class="text-center">
          <h1 class="display-4 fw-bold mb-3">Welcome, Admin <?php echo htmlspecialchars($firstName); ?></h1>
          <p class="lead text-secondary">We connect students with opportunities to support their education and career.</p>
        </div>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-3 mb-3">
        <div class="card bg-primary text-white h-100">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h5 class="card-title">Admins</h5>
                <h2 class="mb-0">5</h2>
              </div>
              <i class="fa-solid fa-user-graduate fa-2x opacity-75"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- LATEST NEWS -->
    <section class="container" style="font-family: 'Satoshi', sans-serif;">
      <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-5">
        <h1 class="fw-bold display-6 text-center text-md-start mb-3 mb-md-0">LATEST NEWS</h1>
        <a href="news.php" class="btn btn-sm rounded-5 text-white py-2 d-flex align-items-center justify-content-center gap-2" style="background-color: #832020;">See More
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
      <div class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-glass">
            <img src="../img/scholarship1.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
            <div class="card-body">
              <h5 class="card-title fw-bold">Scholarship Grant Distribution: A Success!</h5>
              <p class="card-text">
                The Sangguniang Kabataan of Sta. Anastacia successfully distributed the last scholarship grants to our dedicated student beneficiaries today. We extend our heartfelt gratitude to everyone who made this possible.
              </p>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-glass">
            <img src="../img/scholarship2.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
            <div class="card-body">
              <h5 class="card-title fw-bold">Scholarship Grant Release!</h5>
              <p class="card-text">
                Matagumpay na naisagawa ang Scholarship Grant Release sa City Evacuation Center. Mahigit 3,000 na kasalukuyang kolehiyong iskolar ang tumanggap ng kanilang scholarship grant na nagkakahalaga ng P5,000 bawat isa.
              </p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-glass">
            <img src="../img/scholarship3.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
            <div class="card-body">
              <h5 class="card-title fw-bold">Scholarship Program under GAD</h5>
              <p class="card-text">
                Maraming salamat po sa lahat ng taong nasa likod ng programang ito. Layunin lang po ng programang ito na makatulong sa mga magulang na PWD at SOLO PARENT na may anak ng SR Highschool at College.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURED SCHOLARSHIPS -->
    <section class="container py-5" style="font-family: 'Satoshi', sans-serif;">
      <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-5">
        <h1 class="fw-bold display-6 text-center text-md-start mb-3 mb-md-0">FEATURED SCHOLARSHIPS</h1>
        <a href="scholarships.php" class="btn btn-sm rounded-5 text-white py-2 d-flex align-items-center justify-content-center gap-2" style="background-color: #832020;">See More
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
      <div class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-glass">
            <img src="../img/news1.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
            <div class="card-body">
              <p class="card-text">
                Kita-kits iSKolar! Ito na ang pinakaabangang LAST RELEASE ng ating Scholarship Incentives sa May 18, Sunday (9 am) sa Barangay Hall 3 (Near Lafayette). Mangyaring sumali sa ating Facebook Group para sa anumang updates.
              </p>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-glass">
            <img src="../img/news2.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
            <div class="card-body">
              <p class="card-text">
                Scholarship Application na handog ng pamahalaang lungsod sa pangunguna nina Mayor Atty Arth Jhun Aguilar Marasigan, Vice Mayor Catherine Jaurigue-Perez, at mga miyembro ng Sangguniang Panlungsod.
              </p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-glass">
            <img src="../img/news3.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
            <div class="card-body">
              <p class="card-text">
                Brgy San Bartolome Sto Tomas City Batangas! Scholarship Program 2.0 under Gender and Development (GAD) headed by our Punong Barangay Hon. Fermin E. Solis together of Sangguniang Barangay Members.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="text-white text-center py-4 mt-5" style="background-color: #832020; font-family: 'Satoshi', sans-serif;">
      <div class="container">
        <p class="mb-3">© 2025 IskolarWorks. All rights reserved.</p>
        <div class="d-flex justify-content-center gap-4">
          <a href="#" class="text-white fs-4" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white fs-4" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white fs-4" target="_blank"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-white fs-4" target="_blank"><i class="bi bi-github"></i></a>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>
  </div>
</div>

</body>
</html>
