<?php

	include '../db_connection/db_connection.php';
	session_start();

	include '../login_logout_button.php';
	include '../signup_profile_button.php';
	include '../diadromi/getIcon.php';

	$query_for_vehicle_routes = "SELECT * FROM vehicle_routes";

	$result_vehicle_routes = $conn->query($query_for_vehicle_routes);
	$vehicle_routes_amount = $result_vehicle_routes->num_rows;

	$accordion_list = "";

	for ($i=0; $i < $vehicle_routes_amount; $i++) {
		$result_vehicle_routes-> data_seek($i);
		$route_row = $result_vehicle_routes->fetch_array(MYSQLI_ASSOC);

		$query_for_vehicle_stations = "SELECT r.*, s.*
			FROM vehicle_routes AS r, vehicle_stations AS s
			WHERE r.vehicle_id = s.vehicle_id
			AND s.vehicle_id = '".$route_row['vehicle_id']."'
			ORDER BY s.arrival_asc" ; 

		$result_stations = $conn->query($query_for_vehicle_stations);
		$stations_amount = $result_stations->num_rows;


		$route_head = getIcon($route_row['medium_type']).' <strong>'.$route_row['vehicle_id'].'</strong> : '.$route_row['description'];
		$route_description = "";

		for ($j=0; $j < $stations_amount; $j++) { 
			$result_stations-> data_seek($j);
			$station_row = $result_stations->fetch_array(MYSQLI_ASSOC);

			// if($route_head == ""){
			// 	$route_head = getMediumPair($station_row['medium_type'], $station_row['medium_name']);
			// }
			// else{
			// 	$route_head = $route_head.' -> '.getMediumPair($station_row['medium_type'], $step_row['medium_name']);
			// }

			$route_description = $route_description.'<li class="list-group-item">'
			.$station_row['name']
			.' ('
			.$station_row['arrival_asc']
			.')'.'</li>';

		}
		$route_head = '
		<div class="card-header" id="heading'.$i.'">
			<h2 class="mb-0">
				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'">
				<span>'.$route_head.'</span>
				</button>
			</h2>
		</div>';

		$route_description = '
		<div id="collapse'.$i.'" class="collapse" aria-labelledby="heading'.$i.'" data-parent="#accordionExample">
			<div class="card-body">
				<ul class="list-group list-group-flush">
					'.$route_description.'
				</ul>
			</div>
		</div>
		';

		$accordion_list = $accordion_list.'
		<div class="card">
		'.$route_head
		.$route_description
		.'</div>';
	}

	$accordion = '
	<div class="accordion" id="accordionExample">
	'.$accordion_list.
	'</div>';

?>
  

	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>OASA.gr</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="dromologia.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="diadromi.js"></script>

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
				<li class="nav-item active"><a class="nav-link" href="../diadromi/diadromi.php">Διαδρομή</a></li>
				<li class="nav-item"><a class="nav-link" href="../dromologia/dromologia.php">Δρομολόγια</a></li>
				<li class="nav-item"><a class="nav-link" href="../tickets/tickets.php">Εισιτήρια-Κάρτες</a></li>
				<li class="nav-item"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
				<li class="nav-item"><a class="nav-link" href="../faq/faq.php">FAQ</a></li>
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
	<li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
	<li class="breadcrumb-item active" aria-current="page">Δρομολόγια</li>
	</ol>
	</nav>  

	<div class="container">

		<?php
		echo $accordion;
		?>
	</div>

	</div>
	<?php
include "../components/footer/footer.php";
?>
</body>

	</html>