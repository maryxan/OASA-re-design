	<?php

	include '../db_connection/db_connection.php';
	session_start();

	include '../login_logout_button.php';
	include '../signup_profile_button.php';
	
	include 'getMediumPair.php';
	include 'getInBetweenStops.php';

	?>
  

	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>OASA.gr</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="diadromi.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="diadromi.js"></script>

	</head>
	<body> 
    <div class="content">
	<!--  ============= NAVIGATION BAR ================
	-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="../index.php">
			<img src="../images/logcopy2.png" style="height:60px; width: 65px;" alt="">
		</a>
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
	<li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
	<li class="breadcrumb-item active" aria-current="page">Εύρεση διαδρομής</li>
	</ol>
	</nav>   

	
	<div class="container">
		<div class="d-flex justify-content-center">
			<h3>Eπιλέξτε αφετηρία και προορισμό</h3>  
		</div>
		<div class="d-flex justify-content-center">
			<form class="form-inline" method="get" action="../diadromi/diadromi.php">
				<label for="starting_point">Από:</label>
				<input type="text" placeholder="Σημείο εκκίνησης" name="starting_point" <?php if (isset($_GET['starting_point'])) echo 'value = "'.$_GET['starting_point'].'"' ?> >

				<label for="destination">Προς:</label>
				<input type="text" placeholder="Προορισμός" name="destination" <?php if (isset($_GET['starting_point'])) echo 'value = "'.$_GET['destination'].'"' ?> >

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

				$accordion_list = "";

				if($routes_amount == 0){
		
					echo '<div class="container"> 
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong>Δεν βρέθηκαν διαδρομές!</strong>
						</div>
						</div>';
				}
				else{

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
								$route_head = getMediumPair($step_row['medium_type'], $step_row['medium_name']);
							}
							else{
								$route_head = $route_head.' -> '.getMediumPair($step_row['medium_type'], $step_row['medium_name']);
							}

							$route_description = $route_description.'<li class="list-group-item">'
							.getMediumPair($step_row['medium_type'], $step_row['medium_name'])
							.' : '
							.$step_row['start']
							.' - '
							.$step_row['end']
							.' ('
							.$step_row['duration']
							.getInBetweenStops($step_row['in_between_stops'])
							.')'.'</li>';

							// echo '<p>Step #'.$step_row['step_number'].'</p>';
						}

						$route_head = '
						<div class="card-header" id="heading'.$i.'">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'">
								<span>'. $_GET['starting_point'].' -> '.$route_head.' -> '.$_GET['destination'].'</span>
								<span class="ml-4">('.$route_row['duration'].' , '.$route_row['price'].' € )</span>
								</button>
							</h2>
						</div>';

						$route_description = '
						<div id="collapse'.$i.'" class="collapse '.($i == 0?'show':'').'" aria-labelledby="heading'.$i.'" data-parent="#accordionExample">
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

					// echo '
					// 	<div> 
					// 	<h3>Διαδρομές από '.$_GET['starting_point'].' προς το '.$_GET['destination'].':</h3>
					// 	</div>
					// ';
					echo $accordion;		
				}
			} 
		?>

	</div>	
	</div>
	<?php
include "../components/footer/footer.php";
?> 
</body>

	</html>