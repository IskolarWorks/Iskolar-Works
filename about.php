<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iskolarWorks</title>
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

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

    .card-glass .card-img-top {
      border-top-left-radius: 1rem;
      border-top-right-radius: 1rem;
    }
  </style>
</head>

<body>
  <?php include("shared/nav.php") ?>
  <div class="container text-center py-5 text-white">
    <h1 class="fw-bold display-5">ABOUT ISKOLARWORKS</h1>
    <p class="mt-3 mx-auto" style="font-size: 18px;">
      Iskolar Works stands as a dedicated digital bridge, meticulously designed to connect the ambitious students of
      Sto. Tomas, Batangas, with the vital educational assistance they need. Recognizing that
      the scholarship search is often like looking for a needle in a haystack—with scattered information, confusing
      requirements, and easily missed deadlines—our platform was founded to level the playing
      field. It serves as a centralized, comprehensive hub connecting students with opportunities from government,
      private, and educational institutions.
    </p>
    <p class="mt-2 mx-auto" style="font-size: 18px;">
      Iskolar Works is a full-fledged support system founded on the unwavering belief that talent is universal, but
      opportunity is not. By providing invaluable resources, step-by-step application
      guidance, and timely news updates, we aim to be the catalyst that transforms potential into achievement. In
      dismantling the financial and informational barriers to higher education, we are
      not just helping individuals; we are investing in the intellectual capital of our entire community. We envision a
      future where no student's dream is limited by circumstance, and Sto. Tomas is
      recognized as a cradle of educated, empowered, and community-driven leaders.
    </p>
  </div>
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card h-100 card-glass">
            <div class="card-body text-center p-4">
              <i class="bi bi-bullseye" style="font-size: 60px; color:#832020;"></i>
              <h4 class="fw-bold mt- text-white">OUR MISSION</h4>
              <p class="px-3 text-white">
                We are committed to helping students in Sto.Tomas, Batangas get the education they deserve, despite
                their financial situation. We believe education opens doors to better opportunities and helps build a
                stronger community for everyone.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card h-100 card-glass">
            <div class="card-body text-center p-4">
              <i class="bi bi-lightbulb" style="font-size: 60px; color:#832020;"></i>
              <h4 class="fw-bold mt-3 text-white">OUR VISION</h4>
              <p class="px-3 text-white">
                We envision a future where no student's dream is limited by circumstance, and Sto. Tomas is recognized
                as a cradle of educated, empowered, and community-driven leaders who contribute positively to society.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container text-center py-5">
    <h1 class="fw-bold display-5 mb-5 text-white">MEET THE TEAM</h1>
    <img src="img/coverkim.png" alt="Team Members" class="img-fluid rounded-4 mb-5"
      style="max-height: 500px; object-fit: cover;">
    <div class="card card-glass text-white">
      <div class="card-body p-4 p-md-5">
        <p style="font-size: 18px;">
          We are a dedicated collective of local developers, student leaders, and educators who share a firm belief that
          education is not a privilege, but a fundamental right that should be accessible to all—regardless of
          background,
          status, or circumstance. With this conviction at the core of our mission, we have come together to develop
          this platform as a meaningful response to the educational needs of our community.
        </p>
        <p class="mt-3" style="font-size: 18px;">
          This initiative is rooted in our deep commitment to uplifting the youth of Sto. Tomas, Batangas by providing
          them with opportunities to learn, grow, and succeed. We recognize the transformative power
          of education in shaping futures, breaking the cycle of poverty, and building resilient, informed citizens.
        </p>
        <p class="mt-3" style="font-size: 18px;">
          By empowering learners and supporting educators through accessible digital tools and resources, we aspire not
          only to bridge existing gaps in education, but also to nurture a culture of innovation, excellence, and civic
          responsibility.
          It is our hope that this platform becomes a catalyst for positive change—one that echoes far beyond classrooms
          and into the broader fabric of our society.
        </p>
      </div>
    </div>
  </section>
  <footer class="text-white text-center py-4 mt-5"
    style="background-color: #832020; font-family: 'Satoshi', sans-serif;">
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