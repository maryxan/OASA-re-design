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
    <li class="breadcrumb-item active" aria-current="page">AMEA</li>
  </ol>
</nav>     

	<!-- <br> <br> <br>
	<div style="background-image: url('1484992.jpg'); width:100%">

		<br> <br> <br>
		<button type="button" class="collapsible">Μάθετε περισσότερα</button>
		<div class="content">
			<p>Περιγραφή, Ενέργειες, Δράσεις...</p>
		</div>

		<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
		</div>
 -->

 <div class="bg-img">  
	<div class="container">
	  <div class="row searchFilter">
	     <div class="col-sm-12" >
	      <div class="input-group" style="margin-top: 240px;">
	       <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown" placeholder="Στάσεις, σταθμοί,περιοχές.." >
	       <div class="input-group-btn" >
	        <div class="input-group-btn search-panel" >
	           <form action="#" method="get" id="searchForm" class="input-group">
	                    
	                        <select name="search_param" id="search_param" class="btn" data-toggle="dropdown">
	                            <option value="all">'Ολα</option>
	                            <option value="username">Στάσεις</option>
	                            <option value="email">Σταθμοί</option>
<!-- 	                            <option value="studentcode">Περιοχή</option>
 -->   	                            <option value="studentcode">ΜΜΜ</option>

	                        </select>
	                        <span class="input-group-btn">
	                        <button id="searchBtn" type="button" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon">Αναζήτηση</span></button>
	                    </span>
	                    
	                </form>
	        </div>
	       </div>
	      </div>
	     </div>
	  </div>
	</div> 
</div>


 

</div>
<div id="app-footer"></div>

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
</body> 
</html>
