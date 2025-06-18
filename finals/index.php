<?php
$barangays = json_decode(file_get_contents('barangays.json'), true);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Iskolar Works</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f5f6fa;
    }
    .navbar {
      background-color: #004aad;
      justify-content: center;
    }
    .navbar-brand {
      color: white;
      font-weight: bold;
      font-size: 1.8rem;
    }
    .navbar-brand:hover {
      color: white;
    }
    .container {
      margin-top: 30px;
      margin-bottom: 30px;
    }
    footer {
      background: #004aad;
      color: white;
      text-align: center;
      padding: 15px 0;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <span class="navbar-brand mx-auto">Iskolar Works</span>
</nav>

<div class="container">
  <div class="row">
    <?php
    if (isset($barangays['barangays']) && is_array($barangays['barangays'])) {
      foreach ($barangays['barangays'] as $brgy) {
        ?>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title mb-1">
                <?php echo $brgy['name']; ?>
                <?php if (isset($brgy['city'])) { ?>
                  <small class="text-muted">, <?php echo $brgy['city']; ?></small>
                <?php } ?>
              </h5>
              <p class="card-text mb-1"><strong>Scholarship:</strong> <?php echo $brgy['scholarship']; ?></p>
              <p class="card-text mb-1"><strong>Requirements:</strong> <?php echo $brgy['requirements']; ?></p>
              <p class="card-text"><strong>Deadline:</strong> <?php echo $brgy['deadline']; ?></p>
            </div>
          </div>
        </div>
        <?php
      }
    } else {
      echo '<p class="text-danger">No scholarship data found.</p>';
    }
    ?>
  </div>
</div>

<footer>
  &copy; <?php echo date("Y"); ?> Iskolar Works. All rights reserved.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
