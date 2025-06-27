<?php
include("../connect.php");

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

$userID = $_SESSION['id'];
$username = $_SESSION['username'];
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];

$query_news = "SELECT * FROM home WHERE section_type = 'news' ORDER BY id DESC LIMIT 3";
$result_news = executeQuery($query_news);

$query_scholarships = "SELECT * FROM home WHERE section_type = 'scholarship' ORDER BY id DESC LIMIT 3";
$result_scholarships = executeQuery($query_scholarships);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="assets/style.css">
  <style>
    body { background-color: #f6f4e9; font-family: 'Satoshi', sans-serif; }
    .admin-wrapper { display: flex; min-height: 100vh; }
    .sidebar { width: 280px; flex-shrink: 0; background-color: #212529; }
    .main-content { flex-grow: 1; overflow-y: auto; }
    .nav-link { padding: 0.75rem 1rem; border-radius: 0.375rem; margin: 0.25rem 0.5rem; transition: all 0.2s ease; }
    .nav-link i { width: 20px; margin-right: 0.5rem; }
    .card-glass { background: rgba(255, 255, 255, 0.4); backdrop-filter: blur(8px); border-radius: 10px; border: 1px solid rgba(255, 255, 255, 0.2); color: #333; }
    @media (max-width: 992px) {
      .admin-wrapper { flex-direction: column; }
      .sidebar { width: 100%; height: auto; position: static; }
    }
  </style>
</head>
<body>
  <div class="admin-wrapper">
    <div class="sidebar d-flex flex-column p-0">
      <nav class="navbar bg-dark border-bottom border-secondary" data-bs-theme="dark">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand fw-bold">iskolarworks</a>
        </div>
      </nav>
      <nav class="nav flex-column mt-3 px-2">
        <a class="nav-link text-white active bg-secondary" href="index.php">
          <i class="fa-solid fa-gauge"></i> Dashboard
        </a>
        <hr class="text-white mx-3">
      </nav>
      <nav class="nav flex-column mt-auto px-2 mb-3">
        <a class="nav-link text-white" href="logout.php">
          <i class="fa-solid fa-arrow-right-to-bracket"></i> Logout
        </a>
      </nav>
    </div>
    <div class="main-content">
      <nav class="navbar navbar-expand-lg bg-light shadow-sm sticky-top">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Admin Dashboard</span>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                <i class="fa-solid fa-user-circle"></i> <?php echo htmlspecialchars($firstName . ' ' . $lastName); ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <main class="container-fluid p-4">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold mb-3">Welcome, Admin <?php echo htmlspecialchars($firstName); ?></h1>
            <p class="lead text-secondary">This is a preview of the latest content on the homepage.</p>
        </div>

        <!-- LATEST NEWS - ITONG SECTION ANG IDINAGDAG KO ULIT -->
        <section class="mb-5">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold h4 mb-0">LATEST NEWS</h2>
          </div>
          <div class="row g-4">
            <?php
              if ($result_news && mysqli_num_rows($result_news) > 0) {
                while ($row = mysqli_fetch_assoc($result_news)) {
            ?>
            <div class="col-md-6 col-lg-4">
              <div class="card h-100 card-glass shadow-sm">
                <img src="../<?php echo htmlspecialchars($row['image_path']); ?>" class="card-img-top" style="height: 200px; object-fit: cover;" alt="News">
                <div class="card-body">
                  <h5 class="card-title fw-bold"><?php echo htmlspecialchars($row['title']); ?></h5>
                  <p class="card-text small"><?php echo htmlspecialchars($row['content']); ?></p>
                </div>
              </div>
            </div>
            <?php
                }
              } else {
                echo '<div class="col-12"><p class="text-center text-muted">No news items found.</p></div>';
              }
            ?>
          </div>
        </section>

        <!-- FEATURED SCHOLARSHIPS - AT ITONG SECTION -->
        <section>
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold h4 mb-0">FEATURED SCHOLARSHIPS</h2>
          </div>
          <div class="row g-4">
            <?php
              if ($result_scholarships && mysqli_num_rows($result_scholarships) > 0) {
                while ($row = mysqli_fetch_assoc($result_scholarships)) {
            ?>
            <div class="col-md-6 col-lg-4">
              <div class="card h-100 card-glass shadow-sm">
                <img src="../<?php echo htmlspecialchars($row['image_path']); ?>" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Scholarship">
                <div class="card-body">
                  <?php if (!empty($row['title'])): ?>
                    <h5 class="card-title fw-bold"><?php echo htmlspecialchars($row['title']); ?></h5>
                  <?php endif; ?>
                  <p class="card-text small"><?php echo htmlspecialchars($row['content']); ?></p>
                </div>
              </div>
            </div>
            <?php
                }
              } else {
                echo '<div class="col-12"><p class="text-center text-muted">No featured scholarships found.</p></div>';
              }
            ?>
          </div>
        </section>

      </main>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>