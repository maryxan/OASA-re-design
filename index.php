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
	<a class="navbar-brand" href="index.php">OASA logo
<!--    <img src="images/logo2.png" style="height:70px; width: 110px;" alt="">
 -->  </a>
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

<br>
<br>
<br>
<br>
<br>



<div class="calendar">
<h1>Απεργίες : </h1>
<div class="month">      
  <ul>
    <li>
      Ιανουάριος<br>
      <span style="font-size:18px">2020</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
  <li>Mo</li>
  <li>Tu</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li><span class="active">20</span></li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li><span class="active">31</span></li>
</ul>
</div>
  
  <br> <br> <br> <br> <br> <br> <br>

<h2>Άρθρα και Σχετικά</h2>
<div class="row">
  <div class="column">
    <img src="images/strike.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/athensbus.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="images/old.jpg" alt="Mountains" style="width:100%">
  </div>
</div>

</div>

<!-- FOOTER -->
 
<?php
	include "components/footer/footer.php";
?>
       
</body>
</html>
