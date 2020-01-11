<?php

include '../db_connection/db_connection.php';
session_start();
include '../login_logout_button.php';
include '../signup_profile_button.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>OASA.gr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../amea/amea.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="amea.js"></script>

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
			<li class="nav-item active"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Ανακοινώσεις</a></li>
			<li class="nav-item"><a class="nav-link" href="../faq/">FAQ</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Για τον ΟΑΣΑ</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
				<?php
					echo signup_profile_button();
				?>
		        <?php
		          echo login_logout_button();
		        ?>
		</ul>
	</div>
</nav>

 <!-- breadcrumbs -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="../amea/amea.php">ΑΜΕΑ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Πληροφορίες</li>
  </ol>
</nav>     

 <br>
 <div class="bg-img">  
	<div class="col-md-4">
		ΑΑΑΑ
	</div> 
</div>
</div>

<?php
include "../components/footer/footer.php";
?>

</body> 
</html>