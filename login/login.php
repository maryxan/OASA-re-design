<?php

  include 'db_connection.php';
  include '../signup_profile_button.php';

  session_start();
  if(isset($_SESSION["login_user"]) && $_SESSION["login_user"] === true){
    header("location:../profile/profile.php");
    exit;
}
?>

<?php
$errors = array(); 


$conn = mysqli_connect('localhost', 'root', '', 'sdi1400107');

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT * FROM simpleuser WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($results);
    $active = $row['active'];  

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['login_user'] = true;
      $_SESSION["name"] = $row["name"];
      $_SESSION["surname"] = $row["surname"];
      $_SESSION["username"] = $row["username"];
      $_SESSION["email"] = $row["email"];
      header('location:../profile/profile.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>OASA.gr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="login.js"></script>
</head>
<body> 
    <div class="content">

<!--  ============= NAVIGATION BAR ================
 -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="../index.php">OASA logo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">			
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="../diadromi/diadromi.php">Διαδρομή</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Δρομολόγια</a></li>
				<li class="nav-item"><a class="nav-link" href="../tickets/tickets.php">Εισιτήρια-Κάρτες</a></li>
				<li class="nav-item"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Ανακοινώσεις</a></li>
				<li class="nav-item"><a class="nav-link" href="../faq/faq.php">FAQ</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Για τον ΟΑΣΑ</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
          echo signup_profile_button();
        ?>
        <?php 
          if(isset(($_SESSION['login_user'])) && ($_SESSION['login_user']) == true) {

              echo '<li class="nav-item"><a class="nav-link" href="../logout/logout.php"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Εξοδος</a></li>'; 
              
          } else {

            echo '<li class="nav-item"><a class="nav-link" href="../login/login.php"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Είσοδος</a></li>';

          }

      ?>
			</ul>
		</div>
	</nav>

   <!-- breadcrumbs -->
   <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
      <li class="breadcrumb-item active" aria-current="page">Είσοδος</li>
    </ol>
  </nav>   
<!-- ==============================================  
 -->
 <div class="container">

 <form action="login.php" method="post">

  <?php include('errors.php'); ?>


  <div class="containerr">
    <h1>Είσοδος</h1>
    <hr>
    <label>Username </label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label>Κωδικός</label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button class="bat" type="submit" name="login_user">Login</button><br>
    
  </div>
  <div class="containerr">
    <hr>
    <p>Δεν έχεις λογαριασμό? <a href="../signup/signup.php">Εγγραφή 
  </div>
</form>


</div>

    </div>
    <div id="app-footer"></div>
</body>
</html>
