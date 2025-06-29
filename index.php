<?php 
include("connect.php"); 
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
  <title>iskolarworks</title>
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  
  <?php include("shared/head.php") ?>
  <style>
    body {
      background-color:rgb(136, 136, 136);
      background-image: 
        radial-gradient(at 80% 20%, hsla(0, 22.00%, 43.70%, 0.60) 0px, transparent 50%),
        radial-gradient(at 10% 70%, hsla(0, 16.30%, 44.50%, 0.60) 0px, transparent 50%);
      font-family: 'Satoshi', sans-serif;
      color: #f6f4e9;
    }
    .card-glass {
      -webkit-backdrop-filter: blur(12px);
      backdrop-filter: blur(12px);
      border-radius: 2rem;
      border: 3px solid rgba(255, 255, 255, 0.18);
      box-shadow: 5px 4px 30px rgba(255, 255, 255, 0.1);
      background-color: transparent;
      position: relative;
      z-index: 1;
      transition: transform 0.3s ease;
      will-change: transform;
    }
    .card-glass::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 2rem;
      box-shadow: 0 10px 40px rgba(255, 255, 255, 0.2);
      opacity: 0;
      transition: opacity 0.3s ease;
      z-index: -1;
    }
    .card-glass:hover {
      transform: scale(1.05);
    }
    .card-glass:hover::after {
      opacity: 1;
    }
    .card-glass .card-img-top {
      border-top-left-radius: 1.5rem; 
      border-top-right-radius: 1.5rem; 
    }
  </style>
</head>
<body>
  <?php include("shared/nav.php") ?>

  <div class="position-relative" style="font-family: 'Satoshi', sans-serif;">
    <img src="img/coverkim.png" alt="COVER" class="img-fluid w-100" style="height: 100vh; object-fit: cover;">
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3 w-100">
      <div class="container text-white">
        <h1 class="fw-bold display-5">YOUR GATEWAY TO A BRIGHTER FUTURE</h1>
        <p class="mt-2 fs-5">
          Find scholarships and latest news in Sto. Tomas, Batangas. We connect students with opportunities to support their education and career.
        </p>
        <a href="about.php" class="btn text-white mt-3" style="background-color: #832020;">EXPLORE</a>
      </div>
    </div>
  </div>
  <div class="container py-5">
    <div class="text-center p-4 p-md-5 card-glass">
        <p class="fs-3 fst-italic">
        “Your gift unlocks the next generation of world-changing potential. When a student is
        free of financial worry, they are enabled and empowered to get involved, work hard,
        and contribute to their fullest ability. My entire life has been directly influenced for the
        better because of my scholarship—your investment impacts not only your own but
        others' legacies for good.”
        </p>
        <p class="mt-4 fst-italic fs-5 mb-0">
        Mikaela N. Daum, 2018 National Merit Texas Tech University Scholarship
        </p>
    </div>
  </div>

  <section class="container" style="font-family: 'Satoshi', sans-serif;">
    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-5">
      <h1 class="fw-bold display-6 text-center text-md-start mb-3 mb-md-0">LATEST NEWS</h1>
      <a href="news.php" class="btn btn-sm rounded-5 text-white py-2 d-flex align-items-center justify-content-center gap-2" style="background-color: #832020;">See More
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    <div class="row g-4 justify-content-center">
      <?php
      if ($result_news && mysqli_num_rows($result_news) > 0) {
        while ($row = mysqli_fetch_assoc($result_news)) {
      ?>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-glass">
          <img src="<?php echo htmlspecialchars($row['image_path']); ?>" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
          <div class="card-body text-white">
            <h5 class="card-title fw-bold"><?php echo htmlspecialchars($row['title']); ?></h5>
            <p class="card-text"><?php echo htmlspecialchars($row['content']); ?></p>
          </div>
        </div>
      </div>
      <?php
        }
      } else {
        echo '<div class="col-12"><p class="text-center">No news items found.</p></div>';
      }
      ?>
    </div>
  </section>

  <section class="container py-5" style="font-family: 'Satoshi', sans-serif;">
    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-5">
      <h1 class="fw-bold display-6 text-center text-md-start mb-3 mb-md-0">FEATURED SCHOLARSHIPS</h1>
      <a href="scholarships.php" class="btn btn-sm rounded-5 text-white py-2 d-flex align-items-center justify-content-center gap-2" style="background-color: #832020;">See More
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    <div class="row g-4 justify-content-center">
      <?php
      if ($result_scholarships && mysqli_num_rows($result_scholarships) > 0) {
        while ($row = mysqli_fetch_assoc($result_scholarships)) {
      ?>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-glass">
          <img src="<?php echo htmlspecialchars($row['image_path']); ?>" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="Scholarship">
          <div class="card-body text-white">
            <?php 
            if (!empty($row['title'])) {
                echo '<h5 class="card-title fw-bold">' . htmlspecialchars($row['title']) . '</h5>';
            }
            ?>
            <p class="card-text"><?php echo htmlspecialchars($row['content']); ?></p>
          </div>
        </div>
      </div>
      <?php
        }
      } else {
        echo '<div class="col-12"><p class="text-center">No featured scholarships found.</p></div>';
      }
      ?>
    </div>
  </section>
  
  <?php include("shared/footer.php") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>