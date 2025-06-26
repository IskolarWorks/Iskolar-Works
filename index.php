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
    }
    .card.card-glass {
      background-color: transparent;
      border: 3px;
    }
    .card-glass .card-img-top {
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
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
  <div class="position-relative" style="font-family: 'Satoshi', sans-serif;">
    <img src="img/coverkim.png" alt="COVER" class="img-fluid w-100" style="height: 100vh; object-fit: cover;">
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3 w-100">
      <div class="container text-white">
        <h1 class="fw-bold display-5">YOUR GATEWAY TO A BRIGHTER FUTURE</h1>
        <p class="mt-2 fs-5">
          Find scholarships and latest news in Sto. Tomas, Batangas. We connect students with opportunities to support their education and career.
        </p>
        <a href="#" class="btn text-white mt-3" style="background-color: #832020;">EXPLORE</a>
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
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-glass">
          <img src="img/scholarship1.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
          <div class="card-body text-white">
            <h5 class="card-title fw-bold">Scholarship Grant Distribution: A Success!</h5>
            <p class="card-text">
              The Sangguniang Kabataan of Sta. Anastacia successfully distributed the last scholarship grants to our dedicated student beneficiaries today. We extend our heartfelt gratitude to everyone who made this possible.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-glass">
          <img src="img/scholarship2.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
          <div class="card-body text-white">
            <h5 class="card-title fw-bold">Scholarship Grant Release!</h5>
            <p class="card-text">
              Matagumpay na naisagawa ang Scholarship Grant Release sa City Evacuation Center. Mahigit 3,000 na kasalukuyang kolehiyong iskolar ang tumanggap ng kanilang scholarship grant na nagkakahalaga ng P5,000 bawat isa.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-glass">
          <img src="img/scholarship3.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
          <div class="card-body text-white">
            <h5 class="card-title fw-bold">Scholarship Program under GAD</h5>
            <p class="card-text">
              Maraming salamat po sa lahat ng taong nasa likod ng programang ito. Layunin lang po ng programang ito na makatulong sa mga magulang na PWD at SOLO PARENT na may anak ng SR Highschool at College.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container py-5" style="font-family: 'Satoshi', sans-serif;">
    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-5">
      <h1 class="fw-bold display-6 text-center text-md-start mb-3 mb-md-0">FEATURED SCHOLARSHIPS</h1>
      <a href="news.php" class="btn btn-sm rounded-5 text-white py-2 d-flex align-items-center justify-content-center gap-2" style="background-color: #832020;">See More
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-glass">
          <img src="img/news1.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
          <div class="card-body text-white">
            <p class="card-text">
              Kita-kits iSKolar! Ito na ang pinakaabangang LAST RELEASE ng ating Scholarship Incentives sa May 18, Sunday (9 am) sa Barangay Hall 3 (Near Lafayette). Mangyaring sumali sa ating Facebook Group para sa anumang updates.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-glass">
          <img src="img/news2.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
          <div class="card-body text-white">
            <p class="card-text">
              Scholarship Application na handog ng pamahalaang lungsod sa pangunguna nina Mayor Atty Arth Jhun Aguilar Marasigan, Vice Mayor Catherine Jaurigue-Perez, at mga miyembro ng Sangguniang Panlungsod.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-glass">
          <img src="img/news3.jpg" class="card-img-top w-100 object-fit-cover" style="height: 300px;" alt="News">
          <div class="card-body text-white">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>