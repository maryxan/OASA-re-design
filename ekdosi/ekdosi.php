<?php

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
  <link rel="stylesheet" href="ekdosi.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="ekdosi.js"></script>

</head>
<body> 
    <div class="content">

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
				echo login_logout_button();
			?>			
      </ul>
		</div>
	</nav>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
			<li class="breadcrumb-item"><a href="../tickets/tickets.php">Εισητήρια - Κάρτες </a></li>
			<li class="breadcrumb-item active" aria-current="page">Έκδοση κάρτας </li>
		</ol>
	</nav>   

<!--   ------------------------------    tabs       ----------------------------------------
 -->
<div class="container">
	<br>
	<ul class="nav nav-tabs">
	<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Έκδοση</a></li>
	<li class="nav-item"><a class="nav-link"data-toggle="tab" href="#menu1">Πληροφορίες</a></li>
	</ul>

	<div class="tab-content">
		<div id="home" class="tab-pane fade show active">      
			<div class="container">
				<h2>Registration form</h2>
				<form class="form-horizontal" action="/action_page.php">
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Email:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="pwd">Password:</label>
						<div class="col-sm-10">          
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
							<label><input type="checkbox" name="remember"> Remember me</label>
							</div>
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	
		<div id="menu1" class="tab-pane fade">
			<h2>Πληροφοριες εκδοσης καρτών</h2>
			<br>
			<h3> Tι είναι η Athena Card?</h3><br>
			<p> blablaba;balabalabllablaala</p>
		</div>
	</div>
</div>

	</div>
	
	<div id="app-footer"></div>
</body>
</html>
