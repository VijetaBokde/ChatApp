<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chat App - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
	<link rel="stylesheet" 
	      href="css/style.css">
	<link rel="icon" href="img/favicon.png">
</head>
<body  style=" background-image: url('https://naprodukcji.xyz/content/images/size/w1600/2021/09/obraz-2.png')">
<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> ChatApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="signup.php">SignUp</a>
      </div>
    </div>
  </div>
</nav>-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"  style="font-size: 30px"><img src="img/favicon.png" alt="" width="50" height="40" class="d-inline-block align-text-top"> ChatApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-md-auto gap-2">
	  <li class="nav-item rounded">
          <a class="nav-link active" aria-current="page" href="index.php"  style="font-size: 20px"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" aria-current="page" href="login.php"  style="font-size: 20px"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="signup.php"  style="font-size: 20px"><i class="fa fa-user-plus" aria-hidden="true"></i> SignUp</a>
        </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- HERO -->
  <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white fw-bold">HAVE YOUR BEST CHAT</h1>
                    <p class="text-white my-3" style="font-size:25px">Connect with the world now !!!!</p>
                    <a href="login.php" class="btn me-2 btn-dark">CHAT NOW</a>
                </div>
            </div>
        </div>
    </div><!-- //HERO -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
<?php
  }else{
  	header("Location: home.php");
   	exit;
  }
 ?>