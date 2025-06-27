<?php
  include("connect.php");

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
      margin-left: 16.66667%; /* Equivalent to col-2 */
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
    
    @media (max-width: 576px) {
      .sidebar {
        width: 25%; /* col-sm-3 equivalent */
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
        
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fw-bold">Latest News</h2>
                    <a href="news.php" class="btn btn-outline-primary">View All</a>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="images/cover.jpg" class="card-img-top" alt="News" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Scholarship Grant Distribution: A Success!</h5>
                        <p class="card-text">
                            Matagumpay na naisagawa ang Scholarship Grant Release sa City Evacuation Center noong Marso 18, 2025. Mahigit 3,000 na kasalukuyang kolehiyong iskolar mula sa iba't ibang pribado at pampublikong unibersidad
                            at kolehiyo ang tumanggap ng kanilang scholarship grant na nagkakahalaga ng P5,000 bawat isa bilang suporta para sa kanilang edukasyon...
                        </p>
                        <small class="text-muted">March 18, 2025</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="images/cover.jpg" class="card-img-top" alt="News" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Scholarship Grant Distribution: A Success!</h5>
                        <p class="card-text">
                            The Sangguniang Kabataan of Sta. Anastacia successfully distributed the last scholarship grants to our dedicated student beneficiaries. We extend our heartfelt gratitude to everyone who made this possible, from the applicants to the supporting stakeholders...
                        </p>
                        <small class="text-muted">March 15, 2025</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="images/cover.jpg" class="card-img-top" alt="News" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Scholarship Program under GAD</h5>
                        <p class="card-text">
                            Maraming salamat po sa lahat ng taong nasa likod ng programang ito, sa bumubuo ng Sangguniang Barangay sa pangunguna ng ating kapitan. Layunin lang po ng programang ito na makatulong sa mga magulang na PWD
                            at SOLO PARENT na may anak sa SR Highschool at College...
                        </p>
                        <small class="text-muted">March 10, 2025</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fw-bold">Featured Scholarships</h2>
                    <a href="scholarships.php" class="btn btn-outline-primary">View All</a>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="images/cover.jpg" class="card-img-top" alt="Scholarship" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="badge bg-success">Active</span>
                            <small class="text-muted">₱5,000</small>
                        </div>
                        <h5 class="card-title fw-bold">Academic Excellence Scholarship</h5>
                        <p class="card-text">
                            Matagumpay na naisagawa ang Scholarship Grant Release sa City Evacuation Center noong Marso 18, 2025. Mahigit 3,000 na kasalukuyang kolehiyong iskolar mula sa iba't ibang pribado at
                            pampublikong unibersidad at kolehiyo ang tumanggap ng kanilang scholarship grant...
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">150 applicants</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="images/cover.jpg" class="card-img-top" alt="Scholarship" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="badge bg-warning">Pending</span>
                            <small class="text-muted">₱3,000</small>
                        </div>
                        <h5 class="card-title fw-bold">Community Service Scholarship</h5>
                        <p class="card-text">
                            The Sangguniang Kabataan of Sta. Anastacia successfully distributed the last scholarship grants to our dedicated student beneficiaries. We extend our heartfelt gratitude to everyone
                            who made this possible, from the applicants to the supporting stakeholders...
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">89 applicants</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="images/cover.jpg" class="card-img-top" alt="Scholarship" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="badge bg-info">New</span>
                            <small class="text-muted">₱7,500</small>
                        </div>
                        <h5 class="card-title fw-bold">GAD Scholarship Program</h5>
                        <p class="card-text">
                            Maraming salamat po sa lahat ng taong nasa likod ng programang ito, sa bumubuo ng Sangguniang Barangay
                            sa pangunguna ng ating kapitan. Layunin lang po ng programang ito na makatulong sa mga magulang na PWD at SOLO PARENT na may anak sa SR Highschool at College...
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">45 applicants</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
</body>

</html>