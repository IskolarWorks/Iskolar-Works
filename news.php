<?php include("connect.php"); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iskolarWorks</title>
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <style>
   body {
      background-color:rgb(136, 136, 136);
      background-image: 
        radial-gradient(at 80% 20%, hsla(0, 22.00%, 43.70%, 0.60) 0px, transparent 50%),
        radial-gradient(at 10% 70%, hsla(0, 16.30%, 44.50%, 0.60) 0px, transparent 50%);
      font-family: 'Satoshi', sans-serif;
      color: #f6f4e9;
    }
    .card.card-glass {
      background-color: transparent;
      border-radius: 2rem;
      box-shadow: 8px 4px 30px rgba(255, 255, 255, 0.1);
      border: 0 solid rgba(255, 255, 255, 0.18);
      -webkit-backdrop-filter: blur(12px);
      backdrop-filter: blur(12px);
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
  <div class="container text-start py-5">
    <h1 class="fw-bold display-5 text-center">LATEST NEWS</h1>
  </div>
  <section class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 card-glass">
          <img src="img/scholarship2.jpg" class="card-img-top" style="height: 400px; object-fit: cover;" alt="News">
          <div class="card-body text-white">
            <h5 class="card-title fw-bold">Scholarship Grant Release | 2nd Semester</h5>
            <p class="card-text">
              Matagumpay na naisagawa ang Scholarship Grant Release para sa 2nd Semester, SY:2024-2025 City Evacuation Center...
            </p>
            <p class="card-text fw-bold">#AksyonBilisNaMayNgitingTomasino</p>
          </div>
        </div>
      </div>
    <div class="col-md-4">
        <div class="card h-100 card-glass">
          <img src="img/scholarship1.jpg" class="card-img-top" style="height: 400px; object-fit: cover;" alt="News">
            <div class="card-body text-white">
              <h5 class="card-title fw-bold">May 18, 2025 | Last Scholarship Grant Distribution</h5>
                <p class="card-text">
                  May 18, 2025 | Last Scholarship Grant Distribution
                  Scholarship Grant Distribution: A Success!
                  The Sangguniang Kabataan of Sta. Anastacia successfully distributed the last scholarship grants to our dedicated student beneficiaries today. We extend our heartfelt gratitude to everyone who made this possible, from the applicants to the supporting stakeholders. 
                  This initiative aims to provide educational opportunities and support the academic aspirations of our youth. Mabuhay ang Kabataang Anastacian!  
                </p>
                <p class="card-text fw-bold">
                  #SKCares
                </p>
                <p class="card-text fw-bold">
                  #SKServes 
                </p>
                <p class="card-text fw-bold">
                  #SKYouthDevelopment
                </p>
              </div>
            </div>
          </div>
      <div class="col-md-4">
        <div class="card h-100 card-glass">
          <img src="img/scholarship3.jpg" class="card-img-top" style="height: 400px; object-fit: cover;" alt="News">
            <div class="card-body text-white">
              <h5 class="card-title fw-bold">Scholarship Grant Distribution: A Success!</h5>
              <p class="card-text">
                 Maraming salamat po sa lahat ng taong nasa likod ng programang ito, sa bumubuo ng Sangguniang Barangay sa pangunguna ng ating kapitan Fermin E Solis. Layunin lang po ng programang ito na makatulong sa mga magulang na PWD at SOLO PARENT na may anak ng SR Highschool at College. Asahan po ninyo na sa mga susunod ay amin pong mas palalawakin ang programang ito. Muli maraming salamat po.
              </p>
              <p class="card-text fw-bold">
                 #EdukasyonParaSaLahat
              </p>
            </div>
          </div>
        </div>
       <div class="col-md-4">
        <div class="card h-100 card-glass">
          <img src="img/mgi.jpg" class="card-img-top" style="height: 400px; object-fit: cover;" alt="News">
            <div class="card-body text-white">
              <h5 class="card-title fw-bold">Bukas na ulit ang application para sa MGI Iskolar!</h5>
                <p class="card-text">
                  Kung isa kang estudyanteng pursigido pero gipit sa gastos, ito na ang tamang pagkakataon para makakuha ng tulong sa pag-aaral. Hindi mo na kailangang problemahin ang tuition, allowances, o iba pang school needs—nariyan ang IskolarWorks para sumuporta sa pangarap mo!</p>
                  <p class="card-text"><strong>#ScholarGoals</strong></p>
                  <p class="card-text"><strong>#TuloyAngPangarap</strong></p>
              </div>
            </div>
          </div>
      <div class="col-md-4">
        <div class="card h-100 card-glass">
          <img src="img/anakalusugan.png" class="card-img-top" style="height: 400px; object-fit: cover;" alt="News">
            <div class="card-body text-white">
              <h5 class="card-title fw-bold">Gusto mo bang maging Iskolar?</h5>
              <p class="card-text">
                Good news! Bukas na ulit ang aplikasyon para sa Anakalusugan Scholarship Program! 
                Para ito sa mga estudyanteng Batangueño na determined makapagtapos pero kailangang ng kaunting tulong sa gastusin. Kung ikaw 'yan o may kakilala ka, huwag palampasin ang chance na 'to!</p>
              <p class="card-text">
                Tandaan: Hindi hadlang ang kakulangan sa pera kung buo ang pangarap mo.</p>
              <p class="card-text fw-bold">
                #Anakalusugan #EdukasyonParaSaKinabukasan</p>
              </p>
            </div>
          </div>
        </div>
      <div class="col-md-4">
        <div class="card h-100 card-glass">
          <img src="img/santiago.jpg" class="card-img-top" style="height: 400px; object-fit: cover;" alt="News">
            <div class="card-body text-white">
              <h5 class="card-title fw-bold">Iskolar ni SK: Educational Assistance Program</h5>
                <p class="card-text">
                  The wait is over! We’re thrilled to announce that the official list of qualified applicants for the Iskolar ni SK: Educational Assistance Program is here!</p>
                <p class="card-text">
                  The grant release is scheduled for:</p>
                <p class="card-text">
                  <strong>When:</strong> May 10, 2025 | 10:00AM (Saturday)</p>
                <p class="card-text">
                  <strong>Where:</strong> Santiago Barangay Hall</p>
                <p class="card-text">
                  See you there, Iskolars!
                </p>
              </div>
            </div>
          </div>
        <div class="col-md-4">
        <div class="card h-100 card-glass">
          <img src="img/stamaria.jpg" class="card-img-top" style="height: 400px; object-fit: cover;" alt="News">
            <div class="card-body text-white">
              <h5 class="card-title fw-bold">Iskolarship Program 2024! Apply na! </h5>
              <p class="card-text">
                Bukas na ang aplikasyon para sa Scholarship Program ng Sta. Maria Sto Tomas!
                Kung ikaw ay isang estudyanteng nangangarap makapagtapos ngunit kinakapos sa gastusin, ito na ang tulong na para sa’yo!
                Alamin ang mga requirements, eligibility, at deadline.
                Huwag sayangin ang pagkakataon — apply na habang bukas pa ang slots!
                Ang pangarap ay hindi imposible kung may suporta at determinasyon.</p>
              <p class="card-text fw-bold">#Scholarship2025</p>
              <p class="card-text fw-bold">#IskoCares</p>
            </div>
          </div>
        </div>
       <div class="col-md-4">
        <div class="card h-100 card-glass">
          <img src="img/malvar.jpg" class="card-img-top" style="height: 400px; object-fit: cover;" alt="News">
            <div class="card-body text-white">
              <h5 class="card-title fw-bold">Iskolar ni Malvar!</h5>
                <p class="card-text">
                  Kabataang Pangarap ni Malvar is excited to announce the launch of Iskolar ni Malvar! Tumatanggap na kami ng scholarship applications para sa Academic Year 2024–2025 at 2025-2026.</p>
                <p class="card-text">Ano pang hinihintay mo?</p>
                <p class="card-text">Maging Iskolar ni Malvar. Maging Iskolar ng Bayan!</p>
                <p class="card-text fw-bold">#IskolarNiMalvar</p>
                </p>
              </div>
            </div>
          </div>
        </section>
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
