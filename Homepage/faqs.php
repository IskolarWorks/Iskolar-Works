<?php
$isAdmin = false;

$navItems = [
    ['label' => 'Home', 'href' => '../Homepage/index.php'],
    ['label' => 'About', 'href' => '../Homepage/about.php'],
    ['label' => 'News', 'href' => '../Homepage/news.php'],
    ['label' => 'Scholarships', 'href' => '../Homepage/scholarships.php'],
    ['label' => 'FAQs', 'href' => '../Homepage/faqs.php', 'active' => true]
];

$faqList = [
    [
        'title' => 'WHO CAN APPLY',
        'content' => [
            'Must be a bonafide resident of the City of Sto Tomas, Batangas.',
            'Must be enrolled in private or public school within the City of Sto Tomas, Batangas.',
            'GPA must be at least 2.25 or better, and no failing grades in any subjects.'
        ]
    ],
    [
        'title' => 'BENEFITS',
        'content' => [
            'Renewal of Scholarship',
            'Tuition fee assistance up to ₱10,000 per semester',
            'Allowance grant worth ₱3,000 or more',
            'Access to youth organizations and youth-serving programs'
        ]
    ],
    [
        'title' => 'APPLICATION PERIOD',
        'content' => 'Some applications are open from March until August or September. Late applications will not be accepted.'
    ]
];

$howItWorks = [
    ['icon' => 'bi-card-checklist', 'label' => 'PREPARE'],
    ['icon' => 'bi-file-earmark-text', 'label' => 'SEARCH'],
    ['icon' => 'bi-stack', 'label' => 'ORGANIZE'],
    ['icon' => 'bi-clipboard-check', 'label' => 'APPLY'],
    ['icon' => 'bi-file-earmark-arrow-up', 'label' => 'SUBMIT'],
    ['icon' => 'bi-clock-history', 'label' => 'WAIT'],
    ['icon' => 'bi-check-lg', 'label' => 'ACCEPT', 'circle' => true],
    ['icon' => 'bi-currency-dollar', 'label' => 'RECEIVE', 'circle' => true]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IskolarWorks - FAQs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Montserrat', sans-serif;
        }

        .bg-maroon {
            background-color: #832020;
        }

        .text-maroon {
            color: #832020;
        }

        .navbar-dark .navbar-nav .nav-link.active {
            border-bottom: 2px solid white;
            padding-bottom: 4px;
        }

        .icon-circle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #832020;
            color: white;
            font-size: 2.2rem;
        }

        .faq-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: none;
        }

        .faq-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
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
<nav class="navbar navbar-expand-lg navbar-dark bg-maroon">
    <div class="container py-2">
        <a class="navbar-brand fw-bold" href="#">ISKOLARWORKS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <?php foreach ($navItems as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link mx-2 <?= isset($item['active']) && $item['active'] ? 'active' : '' ?>" href="<?= $item['href'] ?>">
                            <?= strtoupper($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="nav-item ms-3">
                    <a class="nav-link admin-icon-circle" href="../Admin/login.php" title="Admin Login">
                        <i class="bi bi-person"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container my-5 text-center">
    <h1 class="fw-bold display-4 mb-5">Frequently Asked Questions</h1>
    <div class="row g-4 justify-content-center">
        <?php foreach ($faqList as $faq): ?>
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 h-100 faq-card" style="background-color: rgb(235, 235, 235)">
                    <h3 class="fw-bold mb-4"><?= $faq['title'] ?></h3>
                    <div class="row">
                        <div class="col text-start">
                            <?php if (is_array($faq['content'])): ?>
                                <ol class="ps-3">
                                    <?php foreach ($faq['content'] as $point): ?>
                                        <li><?= $point ?></li>
                                    <?php endforeach; ?>
                                </ol>
                            <?php else: ?>
                                <p><?= $faq['content'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <h1 class="fw-bold display-4 my-5">HOW IT WORKS</h1>
    <div class="row g-5">
        <?php foreach ($howItWorks as $step): ?>
            <div class="col-6 col-md-3">
                <?php if (isset($step['circle']) && $step['circle']): ?>
                    <div class="icon-circle mx-auto mb-3"><i class="bi <?= $step['icon'] ?>"></i></div>
                <?php else: ?>
                    <i class="bi <?= $step['icon'] ?> text-maroon display-4 mb-3"></i>
                <?php endif; ?>
                <p><?= $step['label'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<footer class="text-center py-3" style="background-color: #832020; color: white;">
    <small>&copy; 2025 Iskolar Works. All Rights Reserved.</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>