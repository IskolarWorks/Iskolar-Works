<?php
$isAdmin = false;

$navItems = [
  ['label' => 'Home', 'href' => '../Homepage/index.php'],
  ['label' => 'About', 'href' => '../Homepage/about.php'],
  ['label' => 'News', 'href' => '../Homepage/news.php'],
  ['label' => 'Scholarships', 'href' => '../Homepage/scholarships.php', 'active' => true],
  ['label' => 'FAQs', 'href' => '../Homepage/faqs.php']
];

$scholarshipList = [
  [
    'scholarshipTitle' => 'Sto. Tomas Academic Scholars Grant',
    'deadline' => 'August 20, 2025',
    'benefit' => '₱5,000 per semester',
    'imageSrc' => '../assets/scholar.jpg'
  ],
  [
    'scholarshipTitle' => 'Youth Empowerment Educational Assistance',
    'deadline' => 'September 15, 2025',
    'benefit' => 'Full Tuition + Monthly Stipend',
    'imageSrc' => '../assets/scholar.jpg'
  ],
  [
    'scholarshipTitle' => 'Solo Parent & PWD Child Support Grant',
    'deadline' => 'October 1, 2025',
    'benefit' => '₱3,500 monthly + Learning Materials',
    'imageSrc' => '../assets/scholar.jpg'
  ]
];
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IskolarWorks - Scholarships</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #ECECEC;
      font-family: 'Montserrat', sans-serif;
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
      color: #5a1010;
    }

    .card:hover {
      transform: scale(1.02);
      transition: 0.3s ease-in-out;
    }

    .scholarship-img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      border-radius: 0.375rem 0 0 0.375rem;
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
                <a class="nav-link px-3 <?= isset($item['active']) && $item['active'] ? 'active' : '' ?>" href="<?= $item['href'] ?>">
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

  <div class="container py-5" id="scholarship">
    <h2 class="fw-bold text-center mb-5" style="font-size: 2.8rem;">SCHOLARSHIPS</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach ($scholarshipList as $item): ?>
        <div class="col">
          <div class="card h-100 border-0 shadow-sm">
            <div class="row g-0">
              <div class="col-4">
                <img src="<?= $item['imageSrc'] ?>" alt="Scholarship Image" class="scholarship-img">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h6 class="fw-bold"><?= $item['scholarshipTitle'] ?></h6>
                  <p class="mb-1"><strong>Deadline:</strong> <?= $item['deadline'] ?></p>
                  <p class="mb-3"><strong>Benefit:</strong> <?= $item['benefit'] ?></p>
                  <a href="#" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
