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
      border: 5px solid rgba(0, 0, 0, 0.18);
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
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
    }
  </style>
</head>
<body>
  <?php include("shared/nav.php") ?>

  <section class="container py-5">
    <div class="text-center fw-bold display-5 mb-5 text-white">
      <strong>FREQUENTLY ASKED QUESTIONS</strong>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 card-glass">
          <div class="card-body p-4 text-white">
            <h5 class="card-title fw-bold text-center mb-4 fs-4">WHO CAN APPLY</h5>
            <p class="card-text">1. Must be a bonafide resident of the City of Sto Tomas Btngs.</p>
            <p class="card-text">2. Must be enrolled in private or public school within the City of Sto Tomas Btngs.</p>
            <p class="card-text">GPA atleast lower than 2.25 and no failing gardes in any subjects.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 card-glass">
          <div class="card-body p-4 text-white">
            <h5 class="card-title fw-bold text-center mb-4 fs-4">BENEFITS</h5>
            <p class="card-text">Renewal of Scholarship</p>
            <p class="card-text">Tuition fee assistance up to 10,000 per semester</p>
            <p class="card-text">Have allowance grant worth 3,000 thousand or more</p>
            <p class="card-text">Have youth organizations and youth-serving organization.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 card-glass">
          <div class="card-body p-4 text-white">
            <h5 class="card-title fw-bold text-center mb-4 fs-4">APPLICATION PERIOD</h5>
            <p class="card-text">Some application are open from the month of March until the month of August or September.  Late applications will not be accepted.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container py-5">
    <div class="text-center fw-bold display-5 mb-5 text-white">
      <strong>HOW IT WORKS</strong>
    </div>
    <div class="row text-center gy-4 text-white">
      <div class="col-6 col-md-3">
        <i class="bi bi-clipboard-check fs-1" style="color:#832020;"></i>
        <div>PREPARE</div>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-file-text fs-1" style="color:#832020;"></i>
        <div>SEARCH</div>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-layers fs-1" style="color:#832020;"></i>
        <div>ORGANIZE</div>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-clipboard-check-fill fs-1" style="color:#832020;"></i>
        <div>APPLY</div>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-file-arrow-up fs-1" style="color:#832020;"></i>
        <div>SUBMIT</div>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-clock-history fs-1" style="color:#832020;"></i>
        <div>WAIT</div>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-check-circle-fill fs-1" style="color:#832020;"></i>
        <div>ACCEPT</div>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-currency-dollar fs-1" style="color:#832020;"></i>
        <div>RECEIVE</div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>