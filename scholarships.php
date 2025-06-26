<?php
include("connect.php");

$query = "SELECT * FROM scholarships";
$result = executeQuery($query);
?>

<!doctype html>
<html lang="en">
<?php include("shared/head.php"); ?>
<body style="background-color: #ECECEC; font-family: 'Satoshi', sans-serif; scroll-behavior: smooth;">

  <?php include("shared/nav.php"); ?>

  <div class="container py-5" id="scholarship">
    <h2 class="fw-bold text-center mb-5" style="font-size: 2.8rem;">SCHOLARSHIPS</h2>

    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php while ($scholarship = mysqli_fetch_assoc($result)): ?>
        <div class="col">
          <div class="card h-100 border-0 shadow-sm" style="transition: 0.2s ease-in-out;">
            <div class="row g-0 h-100">
              <div class="col-4">
                <img src="<?= $scholarship['imagePath'] ?>" alt="Scholarship Image" style="height: 100%; width: 100%; object-fit: cover; border-radius: 0.375rem 0 0 0.375rem;">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h6 class="fw-bold"><?= $scholarship['scholarshipTitle'] ?></h6>
                  <p class="mb-1"><strong>Deadline:</strong> <?= $scholarship['deadline'] ?></p>
                  <p class="mb-3"><strong>Benefit:</strong> <?= $scholarship['benefit'] ?></p>
                  <a href="<?= $scholarship['link'] ?>" target="_blank" class="btn btn-sm text-white px-3" style="background-color: #851d1d;">APPLY NOW</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
