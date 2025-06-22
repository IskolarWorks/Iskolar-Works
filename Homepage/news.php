<?php
$isAdmin = false;

$navItems = [
  ['label' => 'Home', 'href' => '../Homepage/index.php'],
  ['label' => 'About', 'href' => '../about.php'],
  ['label' => 'News', 'href' => '../new.php', 'active' => true],
  ['label' => 'Scholarships', 'href' => '../scholarships.php'],
  ['label' => 'FAQs', 'href' => '../faqs.php']
];

$newsList = [
  [
    'imageSrc' => '../assets/scholar.jpg',
    'newsTitle' => 'Scholarship Deadline Extended',
    'newsDescription' => 'The deadline for the Sto. Tomas Academic Scholars Grant has been extended to September 1, 2025. Students are encouraged to apply as early as possible.'
  ],
  [
    'imageSrc' => '../assets/scholar.jpg',
    'newsTitle' => 'New Scholarship Program for PWDs',
    'newsDescription' => 'A new support grant for students with disabilities will begin accepting applications in August 2025. This includes monthly stipends and free learning kits.'
  ]
];
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IskolarWorks - Latest News</title>
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

    .news-image {
      max-height: 250px;
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
      color: #5a1010;
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

  <div class="container py-5">
    <div class="row">
      <div class="col-12">
        <h2 class="fw-bold text-center mb-5" style="font-size: 2.8rem;">LATEST NEWS</h2>

        <?php foreach ($newsList as $newsItem): ?>
          <div class="row mb-5 align-items-start">
            <div class="col-md-4 mb-3 mb-md-0">
              <img src="<?= $newsItem['imageSrc'] ?>" alt="News Image" class="img-fluid w-100 rounded news-image">
              <p class="fw-semibold mt-2 mb-0"><?= $newsItem['newsTitle'] ?></p>
            </div>
            <div class="col-md-8">
              <p style="text-align: justify;"><?= $newsItem['newsDescription'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>