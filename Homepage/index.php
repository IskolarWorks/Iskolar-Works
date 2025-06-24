  <?php
  $isAdmin = false;

  $navItems = [
    ['label' => 'Home', 'href' => '/Homepage/index.php', 'active' => true],
    ['label' => 'About', 'href' => '../Homepage/about.php'],
    ['label' => 'News', 'href' => '../Homepage/news.php'],
    ['label' => 'Scholarships', 'href' => '../Homepage/scholarships.php'],
    ['label' => 'FAQs', 'href' => '../Homepage/faqs.php']
  ];

  $headerTitle = "YOUR GATEWAY TO A BRIGHTER FUTURE";
  $headerText = "Find scholarships and latest news in Sto. Tomas, Batangas. We connect students with opportunities to support their education and career.";

  $newsList = [
    [
      'image' => 'image/Scholarship Grant Distribution 1.jpg',
      'title' => 'Scholarship Grant Distribution: A Success!',
      'description' => "Matagumpay na naisagawa ang Scholarship Grant Release sa City Evacuation Center noong Marso 18, 2025. Mahigit 3,000 na kasalukuyang kolehiyong iskolar mula sa iba't ibang pribado at pampublikong unibersidad at kolehiyo ang tumanggap ng kanilang scholarship grant na nagkakahalaga ng P5,000 bawat isa bilang suporta para sa kanilang edukasyon.",
      'alt' => 'A large crowd of students seated in an indoor gymnasium during a scholarship grant event.'
    ],
    [
      'image' => 'image/Scholarship Grant Distribution 2.jpg',
      'title' => 'Scholarship Grant Distribution: A Success!',
      'description' => 'The Sangguniang Kabataan of Sta. Anastacia successfully distributed the last scholarship grants to our dedicated student beneficiaries today. This initiative aims to support the academic aspirations of our youth. Mabuhay ang Kabataang Anastacian!',
      'alt' => 'A group of students posing for a photo after a scholarship distribution by the Sangguniang Kabataan.'
    ],
    [
      'image' => 'image/Scholarship Program Under Gad.jpg',
      'title' => 'Scholarship Program Under GAD',
      'description' => 'Layunin ng programang ito na makatulong sa mga magulang na PWD at SOLO PARENT na may anak ng SR Highschool at College. Asahan po ninyo na sa mga susunod ay amin pong mas palalawakin ang programang ito.',
      'alt' => 'Students attending a scholarship program meeting in a well-lit room.'
    ]
  ];
  ?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IskolarWorks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet"> 

    <style>
      body {
        background-color: #ECECEC;
        font-family: 'Satoshi', sans-serif;
        scroll-behavior: smooth;
      }

      .bg-maroon {
        background-color: #832020;
      }

      .navbar-brand {
        font-weight: 800;
        letter-spacing: 1px;
        font-size: 1.8rem;
      }

      .navbar-dark .navbar-nav .nav-link.active {
        position: relative;
        color: white !important;
      }

      .navbar-dark .navbar-nav .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0.75rem;
        right: 0.75rem;
        height: 3px;
        background-color: white;
        border-radius: 2px;
      }

      .navbar .nav-link {
        font-weight: 500;
      }

      .card:hover {
        transform: scale(1.02);
        transition: 0.3s;
      }

      .news-card .card-img-top {
        height: 260px;
        object-fit: cover;
      }

      .admin-icon-circle {
        width: 40px;
        height: 40px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.2rem;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }

      .admin-icon-circle:hover {
        transform: scale(1.05);
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      }

      .scholarship-card {
        height: 100%;
        display: flex;
        flex-direction: column;
      }

      .scholarship-card img {
        height: 300px;
        object-fit: cover;
      }

      .scholarship-card .card-body {
        flex-grow: 1;
        display: flex;
        align-items: center;
      }
    </style>
  </head>

  <body>

    <header class="bg-maroon">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container py-2">
          <a class="navbar-brand" href="#">ISKOLARWORKS</a>
          <?php if ($isAdmin): ?>
            <button type="button" class="btn btn-secondary text-white ms-2 rounded-circle">admin</button>
          <?php endif; ?>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
              <?php foreach ($navItems as $item): ?>
                <li class="nav-item">
                  <a class="nav-link px-3 <?= ($item['active'] ?? false) ? 'active' : '' ?>" href="<?= $item['href'] ?>">
                    <?= $item['label'] ?>
                  </a>
                </li>
              <?php endforeach; ?>
              <li class="nav-item ms-lg-3">
                <a class="nav-link admin-icon-circle" href="../Admin/login.php" title="Admin Login">
                  <i class="bi bi-person"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-12 py-5">
          <div class="row align-items-center" style="padding-top: 100px;">
            <div class="col-md-6 mb-4 d-flex flex-column align-items-center align-items-md-start text-center text-md-start">
              <h1 class="fw-bold mb-2" style="color: #212529;"><?= $headerTitle ?></h1>
              <p class="mb-4"><?= $headerText ?></p>
              <a href="../About/about.php" class="btn btn-danger mt-3 px-4 py-2" style="background-color: #851d1d; margin-left: 150px;">Explore</a>
            </div>
            <div class="col-md-6 text-end">
              <img src="image/grad icon.jpg" alt="" class="img-fluid rounded" style="max-height: 400px;">
            </div>
          </div>
        </div>

        <div class="col-12 py-5">
          <div id="news">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h2 class="fw-bold" style="font-size: 2.5rem;">Latest News</h2>
              <a href="../News/news.php" class="btn px-4 py-2 text-white" style="background-color: #851d1d; border-radius: 10px;">SEE MORE</a>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php foreach ($newsList as $news): ?>
                <div class="col">
                  <div class="card news-card h-100 border-0">
                    <img src="<?= $news['image'] ?>" class="card-img-top" alt="<?= $news['alt'] ?>">
                    <div class="card-body">
                      <h5 class="card-title"><?= $news['title'] ?></h5>
                      <p class="card-text"><?= $news['description'] ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="col-12 py-5">
          <div id="scholarship">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h2 class="fw-bold" style="font-size: 2.5rem;">Featured Scholarships</h2>
              <a href="<?= $navItems[3]['href'] ?>" class="btn px-4 py-2 text-white" style="background-color: #851d1d; border-radius: 10px;">SEE MORE</a>
            </div>
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="card scholarship-card border-0">
                  <img src="image/Ft 1.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text">
                      Brgy San Bartolome Sto Tomas City Batangas! Scholarship Program 2.0 under Gender and Development (GAD) headed by our Punong Barangay Hon. Fermin E. Solis together with Sangguniang Barangay Members.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card scholarship-card border-0">
                  <img src="image/Ft 2.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text">
                      Kita-kits iSKolar! Ito na ang pinakaabangang LAST RELEASE ng ating Scholarship Incentives sa May 18, Sunday (9 am) sa Barangay Hall 3 (Near Lafayette). Mangyaring sumali sa ating Facebook Group para sa anumang updates.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card scholarship-card border-0">
                  <img src="image/Ft3.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text">
                      Scholarship Online Application na handog ng pamahalaang lungsod sa pangunguna nina Mayor Atty Arth Jhun Aguilar Marasigan, Vice Mayor Catherine Jaurigue-Perez, at mga miyembro ng Sangguniang Panlungsod.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <footer class="text-center py-3" style="background-color: #832020; color: white;">
      <small>&copy; 2025 Iskolar Works. All Rights Reserved.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>
