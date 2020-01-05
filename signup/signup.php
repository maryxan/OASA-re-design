<?php
session_start();

include '../db_connection/db_connection.php';
include '../login_logout_button.php';
?>
<!-- // initializing variables
// $name = "";
// $surname = "";
// $username = "";
// $email    = ""; -->

<?php
$errors = array(); 

// connect to the database
$connink = mysqli_connect('localhost', 'root', '', 'sdi1400107');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $surname = mysqli_real_escape_string($conn, $_POST['surname']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($surname)) { array_push($errors, "surname is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM simpleuser WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO simpleuser (username, password, name, surname, email) 
          VALUES ('$username', '$password', '$name', '$surname', '$email')";
    mysqli_query($conn, $query);
    // $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location:../profile/profile.php');
   }
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
  <link rel="stylesheet" href="signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<li class="nav-item"><a class="nav-link" href="../diadromi/diadromi.php">Διαδρομή</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Δρομολόγια</a></li>
				<li class="nav-item"><a class="nav-link" href="../tickets/tickets.php">Εισιτήρια-κάρτες</a></li>
				<li class="nav-item"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Ανακοινώσεις</a></li>
				<li class="nav-item"><a class="nav-link" href="../faq/faq.php">FAQ</a></li>
				<li class="nav-item"><a class="nav-link" href="#">για τον ΟΑΣΑ</a></li>
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
    <li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
    <li class="breadcrumb-item active" aria-current="page">Εγγραφή χρήστη</li>
  </ol>
</nav> 
<!-- ==============================================  
 -->
<div class="container">
  <form action="signup.php"  method="post" style="border:1px solid #ccc">
  <?php include('errors.php'); ?>

  <div class="containerr">
    <h1>Eγγραφή</h1>
    <hr>

    <label for="name"><b>Όνομα</b></label>
    <input type="text" name="name" required>

    <label for="surname"><b>Επώνυμο</b></label>
    <input type="text" name="surname" required>

    <label for="email"><b>Email</b></label>
    <input type="text"  name="email" required>

    <label for="psw"><b>Κωδικός πρόσβασης</b></label>
    <input type="password"  name="password_1" required>

    <label for="psw-repeat"><b>Επιβεβαίωση κωδικού</b></label>
    <input type="password" name="password_2" required>

    <hr>
    <label for="username"><b>Όνομα χρήστη</b></label>
    <input type="text"  name="username" required>
    
    <p>Η καταχώριση της εγγραφής σας συνεπάγεται ότι αποδέχεστε αυτόματα τους <a href="#" style="color:dodgerblue">Όρους Χρήσης</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="reg_user">Εγγραφή</button>
    </div>
  </div>
  <div class="containerr">
      <p>
      Είσαι ήδη μέλος? <a href="../login/login.php">Σύνδεση</a>
    </p>
  </div>
</form>
</div>
</body>
</html>
