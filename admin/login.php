<?php
include("../connect.php");

session_start();

$error_message = "";

if (isset($_SESSION['id'])) {
  header("Location: index.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
  
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $loginquery = "SELECT * FROM adminInfo WHERE username = '$username' AND password = '$password'";
  
  $loginresult = executeQuery($loginquery);

  if ($loginresult && mysqli_num_rows($loginresult) > 0) {
    $row = mysqli_fetch_assoc($loginresult);
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['firstName'] = $row['firstName']; 
    $_SESSION['lastName'] = $row['lastName'];   
    
    header("Location: index.php");
    exit();
  } else {
    $error_message = "Invalid username or password. Please try again.";
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
  <style>
    body { background-color: #f6f4e9; font-family: 'Satoshi', sans-serif; }
    .intro-banner { height: 40vh; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(../img/coverkim.png); background-size: cover; background-position: center; }
    .card-holder { margin-top: -150px; }
    .login-card { background-color: white; border-radius: 20px; max-width: 450px; margin: 0 auto; }
  </style>
</head>
<body>
  <div class="intro-banner position-relative">
    <a href="../index.php" class="btn-close btn-close-white position-absolute top-0 start-0 m-4" aria-label="Close"></a>
  </div>
  <div class="container py-5 card-holder">
    <div class="row justify-content-center">
      <div class="col-11 col-md-8 col-lg-6">
        <div class="card login-card p-4 p-md-5 shadow">
          <h6 class="text-center text-secondary mb-3">iskolarworks</h6>
          <h4 class="text-center">Admin Login</h4>

          <?php if (!empty($error_message)) : ?>
            <div class="alert alert-danger mt-3" role="alert">
              <?php echo $error_message; ?>
            </div>
          <?php endif; ?>

          <form method="post" class="mt-3">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input id="username" class="form-control" type="text" name="username" value="admin" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input id="password" class="form-control" type="password" name="password" value="admin123" required>
            </div>
            <div class="mt-4 text-center">
              <button class="btn btn-dark rounded-pill px-4" type="submit">Login</button>
            </div>
          </form>
        </div>
        <div class="text-center text-muted mt-5">
          <p>© <?php echo date("Y"); ?> IskolarWorks. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>