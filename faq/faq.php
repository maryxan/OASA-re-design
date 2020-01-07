<?php
  session_start();
  include '../login_logout_button.php';
  include '../signup_profile_button.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>document.getElementsByTagName("html")[0].className += " js";</script>
	<link rel="stylesheet" href="assets/css/style.css">
	<title>FAQ</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script>
		$(function(){
			$("#app-footer").load("../components/footer/footer.html"); 
		});
	</script>
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
		<li class="nav-item active"><a class="nav-link" href="../faq/faq.php">FAQ</a></li>
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
		<li class="breadcrumb-item active" aria-current="page">FAQ</li>
	</ol>
</nav>    


<!-- <header class="cd-header flex flex-column flex-center">
  <div class="text-component text-center">
    <h1>FAQ</h1>
  </div>
</header> -->

<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
	<ul class="cd-faq__categories">
		<!--<li><a class="cd-faq__category cd-faq__category-selected truncate" href="#basics">Basics</a></li>-->
		<li><a class="cd-faq__category truncate" href="#Εισιτήρια">Εισιτήρια</a></li>
		<li><a class="cd-faq__category truncate" href="#Διαδρομές">Διαδρομές</a></li>
		<li><a class="cd-faq__category truncate" href="#Λογαριασμός">Λογαριασμός</a></li>
		<li><a class="cd-faq__category truncate" href="#ΑΜΕΑ">ΑΜΕΑ</a></li>
		<!--<li><a class="cd-faq__category truncate" href="#delivery">Delivery</a></li>-->
	</ul> <!-- cd-faq__categories -->

	<div class="cd-faq__items">
		<ul id="Εισιτήρια" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Εισιτήρια</h2></li>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Ποιοι δικαιούνται μειωμένο εισιτήριο?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Οι φοιτητές αφού αποδείξουν την φοιτιτική τους ταυτότητα καθώς και άλλοι.</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Πού μπορώ να βγάλω εισιτήριο?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Σε περίπτερα, σταθμούς προαστειακού, ΗΣΑΠ, μετρό, καθώς και διαδικτυακά μέσω της συγκεκριμένης σελίδας : <!--href --></p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>
		</ul> <!-- cd-faq__group -->


		<ul id="Διαδρομές" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Διαδρομές</h2></li>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Πώς μπορώ να βρω τη διαδρομή για μία συγκεκριμένη στάση?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Ο συγκεκριμένος ιστοχώρος παρέχει αυτή τη δυνατότητα με διαδραστικό τρόπο σε αυτή την συγκεριμένη σελίδα : <!--href --></p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Πώς μπορώ να μάθω αν έχει απεργία σήμερα ένα μέσο??</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Πηγαίνοντας σε αυτή τη σελίδα : <!--href--> </p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>How do I link to a file or folder?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>
		</ul> <!-- cd-faq__group -->

		<ul id="Λογαριασμός" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Λογαριασμός</h2></li>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Ξέχασα τον κωδικό Προςβασής μου! Τι κάνω?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Ατυχήσατε!</p>
          </div>
				</div>
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Πώς διαγράφω το λογαριασμό μου?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Και πάλι ατυχήσατε!</p>
          </div>
				</div>
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Πώς αλλάζω τις ρυθμίσεις του λογαριασμού μου?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Να το πω τρίτη φορά?</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Γιατί χρειάζομαι καν έναν λογαριασμό? </span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Ένας λογαριασμός βοηθάει για να θυμόμαστε κάποιες προτιμήσεις σας και την προσωρινή αποθήκευση κάποιων δεδομένων.</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>
		</ul> <!-- cd-faq__group -->

		<ul id="ΑΜΕΑ" class="cd-faq__group">
			<li class="cd-faq__title"><h2>ΑΜΕΑ</h2></li>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Πώς μπορώ να βρω ποιες στάσεις έχουν υποστήριξη για ΑΜΕΑ?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Μέσα από αυτή τη σελίδα : <!--href--> </p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Δεν βρίσκω μια συγκεκριμένη στάση που θέλω να έχει υποστήριξη για ΑΜΕΑ. </span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p> Δυστυχώς δεν έχουν όλες οι στάσεις προεξοχές, και εργαζόμαστε ώστε στο άμεσα μέλλον να διορθωθεί αυτό! </p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Τι είδους υποστήριξη υπάρχει για άτομα με ειδικές ανάγκες? </span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Πέρα από ειδικές στάσεις με προεξοχές, εργαζόμαστε ώστε στο άμεσο μέλλον να έχουμε περισσότερη υποστήριξη! </p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>
		</ul> <!-- cd-faq__group -->

	</div> <!-- cd-faq__items -->

	<a href="#0" class="cd-faq__close-panel text-replace">Close</a>
  
  <div class="cd-faq__overlay" aria-hidden="true"></div>
</section> <!-- cd-faq -->
</div>
<div id="app-footer"></div>
<script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script src="assets/js/main.js"></script> 
</body>
</html>