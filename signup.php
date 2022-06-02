<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chat App - Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" 
	      href="css/style.css">
	<link rel="icon" href="img/favicon.png">
</head>
<body style=" background-image: url('https://naprodukcji.xyz/content/images/size/w1600/2021/09/obraz-2.png')">
			 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"  style="font-size: 30px"><img src="img/favicon.png" alt="" width="50" height="40" class="d-inline-block align-text-top"> ChatApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-md-auto gap-2">
	  <li class="nav-item rounded">
          <a class="nav-link" aria-current="page" href="index.php"  style="font-size: 20px"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" aria-current="page" href="login.php"  style="font-size: 20px"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link active" href="signup.php"  style="font-size: 20px"><i class="fa fa-user-plus" aria-hidden="true"></i> SignUp</a>
        </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div  class="d-flex
             justify-content-center
             align-items-center
             vh-100">
	 <div class="w-400 p-3 shadow rounded"  style="background-color: #fff">
	 	<form method="post" 
	 	      action="app/http/signup.php"
	 	      enctype="multipart/form-data">
	 		<div class="d-flex
	 		            justify-content-center
	 		            align-items-center
	 		            flex-column">

	 		<img src="img/logo.png" 
			 class="w-80" style="width: 300px">
	 		<h3 class="font-weight-bold text-center" style="font-size: 30px">
	 			       Sign Up</h3>   
	 		</div>

	 		<?php if (isset($_GET['error'])) { ?>
	 		<div class="alert alert-warning" role="alert">
			  <?php echo htmlspecialchars($_GET['error']);?>
			</div>
			<?php } 
              
              if (isset($_GET['name'])) {
              	$name = $_GET['name'];
              }else $name = '';

              if (isset($_GET['username'])) {
              	$username = $_GET['username'];
              }else $username = '';
			?>

	 	  <div class="mb-3">
		    <label class="form-label">
		           Name</label>
		    <input type="text"
		           name="name"
		           value="<?=$name?>" 
		           class="form-control">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           Username</label>
		    <input type="text" 
		           class="form-control"
		           value="<?=$username?>" 
		           name="username">
		  </div>


		  <div class="mb-3">
		    <label class="form-label">
		           Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           Profile Picture</label>
		    <input type="file" 
		           class="form-control"
		           name="pp">
		  </div>
		  <div class="text-center">
		  <button type="submit" 
		          class="btn btn-dark">
		          Sign Up</button>
			</div><br>
			<div class="text-center">
			<p style="color: #000">Already have an account? 
		  <a href="login.php"class="text-decoration-underline">Login</a></p>
			</div>
		</form>
	 </div>
			</div>
</body>
</html>
<?php
  }else{
  	header("Location: home.php");
   	exit;
  }
 ?>