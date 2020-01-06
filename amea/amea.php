<?php

include '../db_connection/db_connection.php';
session_start();
include '../login_logout_button.php';

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
  <link rel="stylesheet" type="text/css" href="amea.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="amea.js"></script>

</head>
<body>

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
			<li class="nav-item"><a class="nav-link" href="../signup/signup.php"><i class="fa fa-user fa-lg`" aria-hidden="true"></i> Εγγραφή</a></li>
		        <?php
		          echo login_logout_button();
		        ?>
		</ul>
	</div>
</nav>

 <!-- breadcrumbs -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
    <li class="breadcrumb-item active" aria-current="page">AMEA</li>
  </ol>
</nav>     

<!-- ==============================================  
 -->

	<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Στάσεις με προεξοχές</h2>
				</div>
				<div class="col-12">
					<div id="custom-search-input">
						<div class="input-group">
							<input type="text" class="search-query form-control" placeholder="Search" />
							<span class="input-group-btn">
								<button type="submit">
									<span class="glyphicon glyphicon-search" style="height:26px;width:20px;"></span>
								</button>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>






	<br> <br> <br>
	<div style="background-image: url('1484992.jpg');">

		<br> <br> <br>
		<button type="button" class="collapsible">Μάθετε περισσότερα</button>
		<div class="content">
			<p>Περιγραφή, Ενέργειες, Δράσεις...</p>
		</div>

	</div>

	<!-- FOOTER -->
	<div id="app-footer"></div>
</body>

 <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</html>
