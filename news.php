<<<<<<< HEAD
=======
<?php 
include("connect.php"); 
$query = "SELECT * FROM news ORDER BY id DESC";
$result = executeQuery($query);
?>
>>>>>>> 955daea58ee3568e28904702b47450ecc17f0dab
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iskolarWorks</title>
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <style>
   body {
      background-color:rgb(136, 136, 136);
      background-image: 
        radial-gradient(at 80% 20%, hsla(0, 22.00%, 43.70%, 0.60) 0px, transparent 50%),
        radial-gradient(at 10% 70%, hsla(0, 16.30%, 44.50%, 0.60) 0px, transparent 50%);
      font-family: 'Satoshi', sans-serif;
      color: #f6f4e9;
    }
    .card.card-glass {
      background-color: transparent;
      border-radius: 2rem;
      box-shadow: 8px 4px 30px rgba(255, 255, 255, 0.1);
      border: 0 solid rgba(255, 255, 255, 0.18);
      -webkit-backdrop-filter: blur(12px);
      backdrop-filter: blur(12px);
    }
    .card-glass {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-glass:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 40px rgba(255, 255, 255, 0.2);
      z-index: 1;
    }
  </style>
</head>
<body>
  <?php include("shared/nav.php") ?>
  <div class="container text-start py-5">
    <h1 class="fw-bold display-5 text-center">LATEST NEWS</h1>
  </div>
  <section class="container">
    <div class="row g-4">
      <?php
      if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="col-md-4">
            <div class="card h-100 card-glass">
              <img src="<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top" style="height: 400px; object-fit: cover;" alt="News">
              <div class="card-body text-white">
                <h5 class="card-title fw-bold"><?php echo htmlspecialchars($row['title']); ?></h5>
                <?php echo $row['content']; ?>
              </div>
            </div>
          </div>
      <?php
        } 
      } else {
        echo '<div class="col-12"><p class="text-center fs-4">No news articles found.</p></div>';
      }
      ?>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>