<?php 
include("connect.php"); 
$query = "SELECT * FROM scholarships";
$result = executeQuery($query);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>iskolarWorks</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet" />

  <?php include("shared/head.php") ?>
  <style>
    body {
      background-color: rgb(136, 136, 136);
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

    .card-glass .card-img-top,
    .card-glass img {
      border-top-left-radius: 1rem;
      border-top-right-radius: 1rem;
    }
  </style>
</head>

<body>
  <?php include("shared/nav.php") ?>
  <section class="container py-5">
    <h2 class="fw-bold text-center mb-5 display-4 text-white">SCHOLARSHIPS</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="col">
          <div class="card h-100 card-glass">
            <div class="row g-0 h-100">
              <div class="col-4">
                <img src="img/<?php echo htmlspecialchars($row['image']); ?>" class="h-100 w-100 object-fit-cover rounded-start" alt="<?php echo htmlspecialchars($row['title']); ?>">
              </div>
              <div class="col-8">
                <div class="card-body text-white">
                  <h6 class="fw-bold"><?php echo htmlspecialchars($row['title']); ?></h6>
                  <p class="mb-1"><strong>Deadline:</strong> <?php echo htmlspecialchars($row['deadline']); ?></p>
                  <p class="mb-3"><strong>Benefit:</strong> <?php echo htmlspecialchars($row['benefit']); ?></p>
                  <a href="<?php echo htmlspecialchars($row['link']); ?>" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>

  <footer class="text-white text-center py-4 mt-5" style="background-color: #832020;">
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