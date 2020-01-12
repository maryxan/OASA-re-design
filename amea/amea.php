<?php

	include '../db_connection/db_connection.php';
	session_start();
	include '../login_logout_button.php';
	include '../signup_profile_button.php';

	function getStationType($medium_type){
		switch ($medium_type) {
			case 'Bus':
				return 'Λεωφορείου';
				break;
			case 'Subway':
				return 'Μετρό';
				break;
			case 'Railway':
				return 'ΗΣΑΠ';
				break;
				
			default:
				return '';
				break;
		}
	}

	/////// medium type
	if(isset($_GET['medium_type'])){ // 'all' , 'Bus', 'Railway' or 'Subway'
		$medium_type = $_GET['medium_type'];
	} else {
		$medium_type = 'all';
	}

	switch ($medium_type) {
		case 'Bus':
			$dropdown_filter_header = 'Λεωφορεία/Τρόλλεϊ';
			break;
		
		case 'Subway':
			$dropdown_filter_header = 'Μετρό';
			break;
	
		case 'Railway':
			$dropdown_filter_header = 'ΗΣΑΠ';
			break;
			
		default:
			$dropdown_filter_header = 'Όλα';
			break;
	}

	///// page number
	if (isset($_GET['pageno'])) {
		$pageno = $_GET['pageno'];
	} else {
		$pageno = 1;
	}
	$no_of_records_per_page = 10;
	$offset = ($pageno-1) * $no_of_records_per_page;

	if(strcmp($medium_type,'all') == 0){
		$total_pages_sql = "SELECT COUNT(*) FROM amea_stations";
	}
	else{
		$total_pages_sql = "SELECT COUNT(*) FROM amea_stations WHERE medium_type = '".$medium_type."'";
	}

	
	$result = mysqli_query($conn,$total_pages_sql);
	$total_rows = mysqli_fetch_array($result)[0];
	$total_pages = ceil($total_rows / $no_of_records_per_page);
	// echo $total_rows;

	
	////// table data
	if(strcmp($medium_type,'all') == 0){
		$query = "SELECT * FROM amea_stations ORDER BY district ASC, station ASC LIMIT $offset, $no_of_records_per_page ";
	}
	else{
		$query = "SELECT * FROM amea_stations WHERE medium_type = '".$medium_type."' ORDER BY district ASC, station ASC LIMIT $offset, $no_of_records_per_page ";
	}

	$result = $conn->query($query);
	$amount = $result->num_rows;
	// if (!$amount) {
	// 	printf("Error: %s\n", mysqli_error($conn));
	// 	exit();
	// }

	$table_rows = "";
	for ($i=0; $i < $amount; $i++) { 
		$result->data_seek($i);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		
		$table_rows = $table_rows
		."<tr>"
		."<td>"
		.$row['station']
		."</td>
		"
		."<td>"
		.$row['street']
		."</td>
		"
		."<td>"
		.$row['district']
		."</td>
		"
		."<td>"
		.getStationType($row['medium_type'])
		."</td>
		"."</tr>
		"
		;
	}

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
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

	<!-- <div class="content">
		<button type="button" class="btn btn-outline-info btn-lg"><a href="../amea/info.php">Πληροφορίες</a></button>
	</div>
	<br> -->
	<!-- <div class="bg-img">   -->
	
		<div class="container table-container"> 
			<div class="row">
				<div class="col">
					<!-- <input type="text"> -->
					<div class="card">
						<div class="card-header">
							<h5>Φίλτρα</h5>
						</div>
						<div class="card-body">
							<div class="dropdown">
								Ψάχνω στάσεις για: 
								<button class="btn btn-secondary dropdown-toggle ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?php echo $dropdown_filter_header ?>
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="?medium_type=all#table">Όλα</a>
									<a class="dropdown-item" href="?medium_type=Bus#table">Λεωφορεία/Τρόλλεϊ</a>
									<a class="dropdown-item" href="?medium_type=Subway#table">Μετρό</a>
									<a class="dropdown-item" href="?medium_type=Railway#table">ΗΣΑΠ</a>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row d-flex justify-content-center">
						<table class="table" id="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col-sm">Στάση/Σταθμός</th>
									<th scope="col-sm">Οδός</th>
									<th scope="col-sm">Δήμος</th>
									<th scope="col-sm">Τύπος Στάσης</th>
								</tr>
							</thead>
							<tbody>
								<?php
								echo $table_rows;						
								?>
							</tbody>
						</table>
					</div>
					<div class="row d-flex justify-content-center">
						<nav>
							<ul class="pagination">
								<li class="page-item">
									<a class="page-link" href="?pageno=1&medium_type=<?php echo $medium_type; ?>#table">First</a>
								</li>
								<li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
									<a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1)."&medium_type=$medium_type"; } ?>#table">Prev</a>
								</li>
								
								<?php
									for ($i=1; $i <= $total_pages; $i++) { 
										if( $i == $pageno){
											echo '<li class="page-item active">
											<a class="page-link" href="?pageno='.$i.'&medium_type='.$medium_type.'#table">'.$i .'</a>
											</li>
											';
										}
										else{
											echo '<li class="page-item">
											<a class="page-link" href="?pageno='.$i.'&medium_type='.$medium_type.'#table">'.$i .'</a>
											</li>
											';
										}
									}
								?>

								<li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
									<a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1)."&medium_type=$medium_type"; } ?>#table">Next</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="?pageno=<?php echo $total_pages."&medium_type=$medium_type"; ?>#table">Last</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	<!-- </div> -->
 

</div>
<?php
include "../components/footer/footer.php";
?>

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
