<?php include("connect.php"); ?>
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
  <section class="container py-5">
    <h2 class="fw-bold text-center mb-5 display-4 text-white">SCHOLARSHIPS</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card h-100 card-glass">
          <div class="row g-0 h-100">
            <div class="col-4">
              <img src="img/santiago.jpg" class="h-100 w-100 object-fit-cover rounded-start" alt="Santiago Grant">
            </div>
            <div class="col-8">
              <div class="card-body text-white">
                <h6 class="fw-bold">Santiago Sto Tomas Support Grant</h6>
                <p class="mb-1"><strong>Deadline:</strong> March 20, 2025</p>
                <p class="mb-3"><strong>Benefit:</strong> ₱5,000 per semester</p>
                <a href="https://www.facebook.com/share/p/1ANSfqu8yf/" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="col">
        <div class="card h-100 card-glass">
          <div class="row g-0 h-100">
            <div class="col-4">
              <img src="img/stb1.jpg" class="h-100 w-100 object-fit-cover rounded-start" alt="City Youth Development">
            </div>
            <div class="col-8">
              <div class="card-body text-white">
                <h6 class="fw-bold">City Youth Development and Sports Division - Sto. Tomas, Batangas</h6>
                <p class="mb-1"><strong>Deadline:</strong> March 20, 2025</p>
                <p class="mb-3"><strong>Benefit:</strong> Financial Grant, School Supplies, and Sports/Educational Programs</p>
                <a href="https://www.facebook.com/permalink.php?story_fbid=pfbid02WvH4ewxW1i3diF8C4gVXV4FeFXPxrwSU3LWof755XBq1uLBvAtjqhB9jxgiytrbil&id=100091832305659" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 card-glass">
          <div class="row g-0 h-100">
            <div class="col-4">
              <img src="img/GAD.jpg"class="h-100 w-100 object-fit-cover rounded-start" alt="GAD Program">
            </div>
            <div class="col-8">
              <div class="card-body text-white">
                <h6 class="fw-bold">Solo Parent & PWD Child Support Grant</h6>
                <p class="mb-1"><strong>Deadline:</strong> August 20, 2025</p>
                <p class="mb-3"><strong>Benefit:</strong> Monthly Cash Subsidy and Automatic Philhealth Coverage</p>
                <a href="https://www.facebook.com/dswdserves?rdid=1cIHS5XRsBqsc2ua&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1RKPbzti7N%2F%3Ffrom_xma_click%3Dxma_web_url%26xma_click_id%3DAC0C26C8-04B0-4432-8373-8584DDA82E47%26tam_xma_content_type%3D0%26is_fb_content%3Dtrue%26forward%3Dfalse%26ts%3D1750777899375%26pl%3D1#" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 card-glass">
          <div class="row g-0 h-100">
            <div class="col-4">
              <img src="img/sasr.jpg" class="h-100 w-100 object-fit-cover rounded-start" alt="Sta Anastacia Scholarship">
            </div>
            <div class="col-8">
              <div class="card-body text-white">
                <h6 class="fw-bold">Sta Anastacia, Sto Tomas Scholarship</h6>
                <p class="mb-1"><strong>Deadline:</strong> May 18, 2025</p>
                <p class="mb-3"><strong>Benefit:</strong> ₱10,000 per semester</p>
                <a href="https://www.facebook.com/sangguniangkabataanbiga2018" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 card-glass">
          <div class="row g-0 h-100">
            <div class="col-4">
              <img src="img/anakalusugan.png" class="h-100 w-100 object-fit-cover rounded-start" alt="Anakalusugan">
            </div>
            <div class="col-8">
              <div class="card-body text-white">
                <h6 class="fw-bold">Anakalusugan</h6>
                <p class="mb-1"><strong>Deadline:</strong> March 20, 2025</p>
                <p class="mb-3"><strong>Benefit:</strong> AnaKalusugan Assistance (AICS Payout Program)</p>
                <a href="https://www.facebook.com/anakalusugan1" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 card-glass">
          <div class="row g-0 h-100">
            <div class="col-4">
              <img src="img/mgi.jpg"  class="h-100 w-100 object-fit-cover rounded-start" alt="Maibarara Geothermal Inc.">
            </div>
            <div class="col-8">
              <div class="card-body text-white">
                <h6 class="fw-bold">Maibarara Geothermal Inc.</h6>
                <p class="mb-1"><strong>Deadline:</strong> November 1, 2025</p>
                <p class="mb-3"><strong>Benefit:</strong> ₱5,000 monthly + learning materials</p>
                <a href="https://www.facebook.com/PERCGroupPH" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 card-glass">
          <div class="row g-0 h-100">
            <div class="col-4">
              <img src="img/stamaria.jpg" class="h-100 w-100 object-fit-cover rounded-start" alt="Sta Maria Scholarship">
            </div>
            <div class="col-8">
              <div class="card-body text-white">
                <h6 class="fw-bold">Sta Maria Scholarship Program</h6>
                <p class="mb-1"><strong>Deadline:</strong> April 15, 2025</p>
                <p class="mb-3"><strong>Benefit:</strong>₱5,000 per semester</p>
                <a href="#" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 card-glass">
          <div class="row g-0 h-100">
            <div class="col-4">
              <img src="img/malvar.jpg" class="h-100 w-100 object-fit-cover rounded-start" alt="Iskolar ni Malvar">
            </div>
            <div class="col-8">
              <div class="card-body text-white">
                <h6 class="fw-bold">Iskolar ni Malvar</h6>
                <p class="mb-1"><strong>Deadline:</strong> Febuary 31, 2025</p>
                <p class="mb-3"><strong>Benefit:</strong>₱5,000 per semester</p>
                <a href="#" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
