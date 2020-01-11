<?php
session_start();
include 'login_logout_button.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>OASA.gr</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="index.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="index.css">
</head>
<body> 
    <div class="content">

<!--  ============= NAVIGATION BAR ================
 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php">OASA logo</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">			
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="diadromi/diadromi.php">Διαδρομή</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Δρομολόγια</a></li>
			<li class="nav-item"><a class="nav-link" href="tickets/tickets.php">Εισιτήρια-Κάρτες</a></li>
			<li class="nav-item"><a class="nav-link" href="amea/amea.php">ΑΜΕΑ</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Ανακοινώσεις</a></li>
			<li class="nav-item"><a class="nav-link" href="faq/faq.php">FAQ</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Για τον ΟΑΣΑ</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php 
          if(isset(($_SESSION['login_user'])) && ($_SESSION['login_user']) == true) {

              echo '<li class="nav-item"><a class="nav-link" href="profile/profile.php"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Προφίλ</a></li>'; 
              
          } else {

            echo '<li class="nav-item"><a class="nav-link" href="signup/signup.php"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Εγγραφή </a></li>';

          }
          ?>
			
			<?php 
          if(isset(($_SESSION['login_user'])) && ($_SESSION['login_user']) == true) {

              echo '<li class="nav-item"><a class="nav-link" href="logout/logout.php"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Εξοδος</a></li>'; 
              
          } else {

            echo '<li class="nav-item"><a class="nav-link" href="login/login.php"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Είσοδος</a></li>';

          }
          ?>
		</ul>
	</div>
</nav>

<div class="bg-img">  
	<form action="diadromi/diadromi.php" method="get" class="container">
		<h1>Εύρεση διαδρομής</h1>
		<label for="starting_point">Από:</label>
    <input type="text" placeholder="Σημείο εκκίνησης" name="starting_point">
    <label for="destination">Προς:</label>
    <input type="text" placeholder="Προορισμός" name="destination">
    <button class="btn" type="submit" name="find_route">Εύρεση διαδρομής</button>
	</form>
  
</div>

  

</div>

<!-- FOOTER -->
 
<?php
	include "components/footer/footer.php";
?>
       
</body>
</html>
