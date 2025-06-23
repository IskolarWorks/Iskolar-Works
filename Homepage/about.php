<?php $isAdmin = false; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IskolarWorks - About</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      padding-top: 100px;
      background-color: #ECECEC;
      font-family: 'Montserrat', sans-serif;
    }

    .navbar-custom {
      background-color: #832020;
    }


    .nav-link-custom {
    color: white !important;
    font-weight: 600;
    position: relative;
  }

  .nav-link-custom.active {
  color: white !important;
}

  .nav-link-custom:hover::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background-color: white;
    border-radius: 1px;
  }

    .section-title {
      color:rgb(33, 32, 32);
      font-family: 'Montserrat', sans-serif;
    }

    .description-text {
      text-align: justify;
      max-width: 900px;
      margin: auto;
    }

    
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md fixed-top navbar-custom">
    <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
      <div class="fw-bold fs-3 text-white" style="font-family: 'Montserrat', sans-serif;">
        ISKOLARWORKS
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navMenu">
        <ul class="navbar-nav d-flex align-items-center" style="font-family: 'Montserrat', sans-serif;">
          <li class="nav-item">
            <a href="../Homepage/index.php" class="nav-link nav-link-custom text-uppercase mx-2">Home</a>
          </li>
          <li class="nav-item">
            <a href="../About/about.php" class="nav-link nav-link-custom text-uppercase active mx-2">About</a>
          </li>
          <li class="nav-item">
            <a href="../News/news.php" class="nav-link nav-link-custom text-uppercase mx-2">News</a>
          </li>
          <li class="nav-item">
            <a href="../Scholarships/scholarships.php" class="nav-link nav-link-custom text-uppercase mx-2">Scholarships</a>
          </li>
          <li class="nav-item">
            <a href="../Faqs/faqs.php" class="nav-link nav-link-custom text-uppercase mx-2">FAQs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link admin-icon-circle" href="../Admin/login.php" title="Admin Login">
           <i class="bi bi-person"></i>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="section-title fw-bold text-uppercase mb-4">About IskolarWorks</h1>
      <p class="description-text mb-4">
        Iskolar Works stands as a dedicated digital bridge, meticulously designed to connect the ambitious
        students of Sto. Tomas, Batangas, with the vital educational assistance they need. Recognizing that
        the scholarship search is often like looking for a needle in a haystack—with scattered information,
        confusing requirements, and easily missed deadlines—our platform was founded to level the playing
        field. It serves as a centralized, comprehensive hub connecting students with opportunities from
        government, private, and educational institutions.
      </p>
      <p class="description-text">
        Iskolar Works is a full-fledged support system founded on the unwavering belief that talent is
        universal, but opportunity is not. By providing invaluable resources, step-by-step application
        guidance, and timely news updates, we aim to be the catalyst that transforms potential into
        achievement. In dismantling the financial and informational barriers to higher education, we are
        not just helping individuals; we are investing in the intellectual capital of our entire community.
        We envision a future where no student's dream is limited by circumstance, and Sto. Tomas is
        recognized as a cradle of educated, empowered, and community-driven leaders.
      </p>
    </div>

    <div class="row text-center my-5">
      <div class="col-md-6 mb-4">
        <h4 class="fw-bold section-title">Our Mission</h4>
        <p class="description-text">
          We are committed to helping students in Sto.Tomas, Batangas get the education they deserve,
          despite their financial situation. We believe education opens doors to better opportunities
          and helps build a stronger community for everyone.
        </p>
      </div>
      <div class="col-md-6 mb-4">
        <h4 class="fw-bold section-title">Our Vision</h4>
        <p class="description-text">
          We envision a future where no student's dream is limited by their financial circumstances.
          Iskolar Works will be a trusted source of hope and direction for families, offering inclusive
          access to higher education.
        </p>
      </div>
    </div>

    <div class="text-center my-5">
      <h1 class="section-title fw-bold text-uppercase mb-4">Meet the Team</h1>
      <div class="row justify-content-center mb-4">
        <div class="col-md-8">
          <img src="../assets/team-placeholder.jpg" alt="Team Photo" class="img-fluid rounded">
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <p class="description-text">
            We are a team of local developers, students, and educators who believe that education should
            be accessible to all. Through this platform, we aim to make a lasting impact on the youth
            of Sto. Tomas, Batangas.
          </p>
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
