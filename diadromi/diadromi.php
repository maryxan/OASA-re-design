	<?php

	include '../db_connection/db_connection.php';
	session_start();

	?>
  

	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>OASA.gr</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="diadromi.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
				<li class="nav-item active"><a class="nav-link" href="../diadromi/diadromi.php">Διαδρομή</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Δρομολόγια</a></li>
				<li class="nav-item"><a class="nav-link" href="../tickets/tickets.html">Εισιτήρια-κάρτες</a></li>
				<li class="nav-item"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Ανακοινώσεις</a></li>
				<li class="nav-item"><a class="nav-link" href="../faq/faq.html">FAQ</a></li>
				<li class="nav-item"><a class="nav-link" href="#">για τον ΟΑΣΑ</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item"><a class="nav-link" href="../signup/signup.php"><i class="fa fa-user fa-lg`" aria-hidden="true"></i> Εγγραφή</a></li>
				<li class="nav-item"><a class="nav-link" href="../login/login.php"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Είσοδος</a></li>
			</ul>
		</div>
	</nav>

	<!-- breadcrumbs -->
	<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="in.html">Αρχική</a></li>
	<li class="breadcrumb-item active" aria-current="page">Εύρεση διαδρομής</li>
	</ol>
	</nav>   

	<div class="container">
	<h3>Eπιλέξτε αφετηρία και προορισμό</h3>  
	<form class="form-inline" method="get" action="../diadromi/diadromi.php">
		<label for="starting_point">Από:</label>
		<input type="text" placeholder="Σημείο εκκίνησης" name="starting_point">
		<label for="destination">Πρός:</label>
		<input type="text" placeholder="Προορισμός" name="destination">
		<button type="submit" name="find_route">Εύρεση διαδρομής</button>
	</form>
	</div>
	<br/>
	<br/>

	<?php

      if(isset($_GET['find_route'])){
     
		$query_for_routes = "select * 
		from routes
		where starting_point = '".$_GET['starting_point']."' 
		and destination = '".$_GET['destination']."'";

		$result_routes = $conn->query($query_for_routes);
		$routes_amount = $result_routes->num_rows;

		

		for ($i=0; $i < $routes_amount; $i++) {			
			$result_routes-> data_seek($i);
			$route_row = $result_routes->fetch_array(MYSQLI_ASSOC);

			$query_for_steps = "select 
				r.id, 
				s.step_number, 
				s.start, 
				s.end, 
				s.duration,
				s.medium_type, 
				s.medium_name, 
				s.in_between_stops,
				r.duration as total_duration, 
				r.price as total_price
			from routes as r, steps as s
			where r.id = s.route_id
			and s.route_id = ".$route_row['id']."
			order by total_duration asc, s.step_number asc";

			$result_steps = $conn->query($query_for_steps);
			$steps_amount = $result_steps->num_rows;

			// echo '<h3>Route #'.$route_row['id'].'</h3>';

			$route_head = "";
			$route_description = "";

			for ($j=0; $j < $steps_amount; $j++) { 
				$result_steps-> data_seek($j);
				$step_row = $result_steps->fetch_array(MYSQLI_ASSOC);

				if($route_head == ""){
					$route_head = $step_row['medium_name'].'('.$step_row['medium_type'].')';
				}
				else{
					$route_head = $route_head.'->'.$step_row['medium_name'].'('.$step_row['medium_type'].')';		
				}

				$route_description = '<p>'.$route_description
				.$step_row['medium_name']
				.'('.$step_row['medium_type'].')'.' : '
				.$step_row['start']
				.'-'
				.$step_row['end']
				.' ( '
				.$step_row['duration']
				.')'.'</p>'.'<br/>';

				// echo '<p>Step #'.$step_row['step_number'].'</p>';
			}

			echo '<h3>'.$route_head.'</h3>';
			echo $route_description;
		}
		
     } 
	?>

	<br/>
	<br/>

	<div class="accordion" id="accordionExample">
	<div class="card">
	<div class="card-header" id="headingOne">
		<h2 class="mb-0">
		<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			Collapsible Group Item #1
		</button>
		</h2>
	</div>

	<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
		<div class="card-body">
		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		</div>
	</div>
	</div>
	<div class="card">
	<div class="card-header" id="headingTwo">
		<h2 class="mb-0">
		<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			Collapsible Group Item #2
		</button>
		</h2>
	</div>
	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		<div class="card-body">
		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		</div>
	</div>
	</div>
	<div class="card">
	<div class="card-header" id="headingThree">
		<h2 class="mb-0">
		<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			Collapsible Group Item #3
		</button>
		</h2>
	</div>
	<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		<div class="card-body">
		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		</div>
	</div>
	</div>
	</div>


	<!-- FOOTER -->
	<br>
	<br>
	<br>

	<footer class="site-footer">
		<div class="containerr">
		<div class="row" style="margin-left:20px;">
			<div class="col-sm-12 col-md-6">
			<h6>Επικοινωνία</h6>
			<ul class="footer-links">
				<li>Διευθυνση:Μετσόβου 15,Αθήνα 106 82</li>
				<li>Τηλέφωνο:210-82.00.999</li>
				<li>Φαξ:210-82.12.219</li>
				<li>e-mail:oasa@oasa.gr</li>
				<li>Τηλεφωνική Πληροφόρηση:11 185</li>
			</ul>
			</div>     

			

		</div>
		<hr>
		<div class="containerr">
		<div class="row" style="margin-left:20px;">
			<div class="col-md-8 col-sm-6 col-xs-12" >
			<p class="copyright-text">Copyright &copy;2020 - University of Athens. All rights reserved.
			</p>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
			<ul class="social-icons">
				<li><a class="facebook" href="https://www.facebook.com/OASA.GR"><i class="fa fa-facebook"></i></a></li>
				<li><a class="instagram" href="https://www.instagram.com/OASA.GR/"><i class="fa fa-instagram"></i></a></li>
				<li><a class="youtube" href="https://www.youtube.com/channel/UC0XdkZnOHhRLc3NE9tm4NUQ"><i class="fa fa-youtube"></i></a></li>
			</ul>
			</div>
		</div>
		</div>
	</div>
	</footer>
	</body>