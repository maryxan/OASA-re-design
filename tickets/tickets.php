<!-----
layout: examples
title: Pricing example
extra_css: "pricing.css"
include_js: false
-->
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
  <link rel="stylesheet" href="tickets.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="tickets.js"></script>
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
				<li class="nav-item active"><a class="nav-link" href="../tickets/tickets.php">Εισιτήρια-Κάρτες</a></li>
				<li class="nav-item"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Ανακοινώσεις</a></li>
				<li class="nav-item"><a class="nav-link" href="../faq//faq.php">FAQ</a></li>
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
	    <li class="breadcrumb-item"><a href="../index.php">Αρχική Σελίδα</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Εισιτήρια-Κάρτες</li>
	  </ol>
	</nav>   

<!--athena card-->
<div class="container">

    <div class="ticket">
     <img src="athena.png" alt="athena_card" style="width:600px;height:200px;"/>
    </div>
  </div>

  <div class="container">
    <div class="buttons">
      <a href="../ekdosi/ekdosi.php" class="btn btn-warning" role="button">ΕΚΔΟΣΗ</a>
      <a href="../ekdosi/ekdosi.php" class="btn btn-warning" role="button">ΠΛΗΡΟΦΟΡΙΕΣ</a>
    </div>

    <!--================-->
    <br>
    <br>
</div>
<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <!--<h4 class="my-0 font-weight-normal">Free</h4>-->
        <img src="20.jpg" alt="20" style="width:100px;height:150px;"/>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">1.40€ </h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Για όλους</li>
          <br>
          <br>
          <br>
          </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Αγορά κανονικού εισιτηρίου</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
      	<img src="21.jpg" alt="21" style="width:100px;height:150px;"/>
       <!-- <h4 class="my-0 font-weight-normal">Pro</h4> -->
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">0.70€ </h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Φοιτητές</li>
          <li>Ηλικιωμένοι</li>
          <li>Στρατιωτικοί</li>
          <br>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Αγορά μειωμένου εισιτηρίου</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <!--<h4 class="my-0 font-weight-normal">Enterprise</h4>-->
        <img src="22.jpg" alt="22" style="width:100px;height:150px;"/>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">29€ <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Για όλους: Συνίσταται για εργαζόμενους/φοιτητές</li>
          <li>Απαιτεί συνδρομή</li>
          <br>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Αγορά μηνιαίου εισιτηρίου</button>
      </div>
    </div>
  </div>
</div>
  <br>
  <br>
  <br>
  <br>
</div>
<div id="app-footer"></div>
</body>
</html>