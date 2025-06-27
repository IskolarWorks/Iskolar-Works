
<?php
include("../connect.php");

session_start();
session_destroy();
session_start();

if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $loginquery = "SELECT * FROM admins JOIN adminInfo ON admins.id= adminInfo.id WHERE username = '$username' AND password = '$password'";
  $loginresult = executeQuery($loginquery);

  if (mysqli_num_rows($loginresult) > 0) {

    while ($row = mysqli_fetch_assoc($loginresult)) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['firstName'] = $row['firstName'];
      $_SESSION['lastName'] = $row['lastName'];
    }
    header("Location: index.php");
  } 
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
     <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
    
    <style>
    body {
      background-color: #f6f4e9;
      font-family: 'Satoshi', sans-serif;
      scroll-behavior: smooth;
    }

    .intro-banner{
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url(scholars.png);
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    margin-bottom: 30px;
}

.card-holder{
  position: relative;
  margin-top: -150px;
  z-index: 10;
}

.login-card{
  background-color: white;
  border-radius: 20px;
  max-width: 400px;
  margin: 0 auto;
}


  </style>
</head>

<body>
    <div class="intro-banner">
    <button type="button" class="btn-close btn-close-white position-absolute" style="top: 30px; left: 50px;"
      aria-label="close" onclick="window.location.href='../index.php'"></button>
      </div>
 
    <div class="container py-5">
    <div class="card-holder"></div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card login-card p-5 shadow">
           <div class="h6 text-center text-secondary mb-3">iskolarworks</div>
          <div class="h4 text-center">Admin Login</div>

          <form method="post">
            <div class="my-3">
              <label for="username">Username</label>
              <input id="username" class="form-control" type="text" name="username" required>
            </div>

            <div class="my-3">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" name="password" required>
            </div>

            <div class="mt-5 text-center">
              <input class="btn btn-secondary rounded-5" type="submit" value="Login">
            </div>
          </form>
        </div>

         <div class="container-fluid py-5">
             <div class="row">
            <div class="col text-center">
                <h6>© 2025 Iskolar Works. All Rights Reserved.</h6>
            </div>
        </div>
     </div>
    </div>
  </div>
</div>
</div>



                
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>

</html>