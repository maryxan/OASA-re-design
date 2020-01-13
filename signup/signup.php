<?php
session_start();

include '../db_connection/db_connection.php';
include '../login_logout_button.php';
include '../signup_profile_button.php';

?>

<?php
$errors = array(); 

// connect to the database
$connink = mysqli_connect('localhost', 'root', '', 'sdi1400107');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name =  $_POST['name'] = mysqli_real_escape_string($conn, $_POST['name']);
  $surname =  $_POST['surname'] = mysqli_real_escape_string($conn, $_POST['surname']);
  $username = $_POST['username'] = mysqli_real_escape_string($conn, $_POST['username']);
  $email = $_POST['email'] = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = $_POST['password_1'] = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = $_POST['password_2'] = mysqli_real_escape_string($conn, $_POST['password_2']);

  if(isset($_POST['reduced_ticket'])){
    //$stok is checked and value = 1
    $reduced_ticket = 1;
    }else{
    //$stok is nog checked and value=0
    $reduced_ticket=0;
}

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
      array_push($errors, "Το όνομα χρήστη υπάρχει ήδη");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Το email χρησιμοποιείται από άλλον χρήστη");
    }
  }

  // Finally, register user if there are no errors in the form
   if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO simpleuser (username, password, name, surname, email,reduced_ticket) 
            VALUES ('$username', '$password', '$name', '$surname', '$email' , '$reduced_ticket')";

      if(mysqli_query($conn, $query)){
         
         // $_SESSION['username'] = $username;
         $_SESSION['reg_user'] = true;
         $_SESSION['login_user'] = true;
         
         $_SESSION["name"] = $name;
         $_SESSION["surname"] = $surname;
         $_SESSION["username"] = $username;
         $_SESSION["email"] = $email;
         $_SESSION["reduced_ticket"] = $reduced_ticket;
         
         
         header('location:../profile/profile.php');
      }
      else{
         array_push($errors, "Signup failed. Please try again later.");
      }

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
  <script src="signup.js"></script>
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
				<li class="nav-item"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Ανακοινώσεις</a></li>
				<li class="nav-item"><a class="nav-link" href="../faq/faq.php">FAQ</a></li>
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
    <li class="breadcrumb-item active" aria-current="page">Εγγραφή χρήστη</li>
  </ol>
</nav> 
<!-- ==============================================  
 -->

<div class="container">
  <form action="signup.php"  method="post">
  <?php include('errors.php'); ?>

  <div class="containerr">
    <h1>Eγγραφή</h1>
    <hr>

    <label for="name"><b>Όνομα</b></label>
    <input type="text" id="form_fname" name="name" required <?php if(isset($_POST['name'])) echo 'value="'.$_POST['name'].'"' ?> >
    <span class="error_form" id="fname_error_message"></span>
    <br>


    <label for="surname"><b>Επώνυμο</b></label>
    <input type="text" id="form_sname" name="surname" required <?php if(isset($_POST['surname'])) echo 'value="'.$_POST['surname'].'"' ?> >
    <span class="error_form" id="sname_error_message"></span>
    <br>

    <label for="email"><b>Email</b></label>
    <input type="text"  id="form_email" name="email" required <?php if(isset($_POST['email'])) echo 'value="'.$_POST['email'].'"' ?> >
    <span class="error_form" id="email_error_message"></span>
    <br>

    <label for="psw"><b>Κωδικός Πρόσβασης</b></label>
    <input type="password" id="form_password" name="password_1" required >
    <span class="error_form" id="password_error_message"></span>
    <br>

    <label for="psw-repeat"><b>Επιβεβαίωση κωδικού</b></label>
    <input type="password" id="form_retype_password" name="password_2" required >
    <span class="error_form" id="retype_password_error_message"></span>
    <br>

    <hr>
    <label for="username"><b>Όνομα χρήστη</b></label>
    <input type="text"  id="form_username" name="username" required <?php if(isset($_POST['username'])) echo 'value="'.$_POST['username'].'"' ?> >
    <span class="error_form" id="username_error_message"></span>
    <br>


    <br><br>
    <input type="checkbox" class="form-check-input" value = 1 name="reduced_ticket" style="margin-left:3px;" >
    <label class="form-check-label" for="reduced_ticket" style="margin-left: 20px;">Δικαιούμαι μειωμένο κόμιστρο *</label>

    

    
    <p>Η καταχώριση της εγγραφής σας συνεπάγεται ότι αποδέχεστε αυτόματα τους <a href="#" style="color:dodgerblue">Όρους Χρήσης</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="reg_user">Εγγραφή</button>
    </div>
  </div>
  <div class="containerr">
      <p>
      Είσαι ήδη μέλος? <a href="../login/login.php">Σύνδεση</a><br>
      * Απευθύνεται σε φοιτητές , ΑΜΕΑ και ανέργους.
    </p>
  </div>
</form>
</div>
    </div>
    <?php
      include "../components/footer/footer.php";
   ?>
</body>
<script>
   $(function() {

$("#fname_error_message").hide();
$("#sname_error_message").hide();
$("#email_error_message").hide();
$("#password_error_message").hide();
$("#retype_password_error_message").hide();
$("#username_error_message").hide();


var error_fname = false;
var error_sname = false;
var error_email = false;
var error_password = false;
var error_retype_password = false;
var error_username = false;

$("#form_fname").focusout(function(){
   check_fname();
});
$("#form_sname").focusout(function() {
   check_sname();
});
$("#form_email").focusout(function() {
   check_email();
});
$("#form_password").focusout(function() {
   check_password();
});
$("#form_retype_password").focusout(function() {
   check_retype_password();
});
 $("#form_username").focusout(function() {
   check_username();
});

function check_fname() {
   var pattern = /^[a-zA-Zα-ωΑ-Ωάέήίύώόϊϋΐΰ]*$/;
   var fname = $("#form_fname").val();
   if (pattern.test(fname) && fname !== '') {
      $("#fname_error_message").hide();
      $("#form_fname").css("border-bottom","2px solid #34F458");
   } else {
      $("#fname_error_message").html('<div class="alert alert-danger" role="alert">'+
      'Το όνομα πρέπει να περιέχει μόνο χαρακτήρες'+
      '</div>');
      $("#fname_error_message").show();
      $("#form_fname").css("border-bottom","2px solid #F90A0A");
      error_fname = true;
   }
}

function check_sname() {
   var pattern = /^[a-zA-Zα-ωΑ-Ωάέήίύώόϊϋΐΰ]*$/;
   var sname = $("#form_sname").val()
   if (pattern.test(sname) && sname !== '') {
      $("#sname_error_message").hide();
      $("#form_sname").css("border-bottom","2px solid #34F458");
   } else {
      $("#sname_error_message").html(
      '<div class="alert alert-danger" role="alert">'+
      'Το επώνυμο πρέπει να περιέχει μόνο χαρακτήρες'+
      '</div>');
      $("#sname_error_message").show();
      $("#form_sname").css("border-bottom","2px solid #F90A0A");
      error_fname = true;
   }
}

function check_password() {
   var password_length = $("#form_password").val().length;
   if (password_length < 6) {
      $("#password_error_message").html('<div class="alert alert-danger" role="alert">'+
      'Ο κωδικός πρέπει να έχει μήκος τουλάχιστον 8 χαρακτήρων'+
      '</div>');
      $("#password_error_message").show();
      $("#form_password").css("border-bottom","2px solid #F90A0A");
      error_password = true;
   } else {
      $("#password_error_message").hide();
      $("#form_password").css("border-bottom","2px solid #34F458");
   }
}

function check_retype_password() {
   var password = $("#form_password").val();
   var retype_password = $("#form_retype_password").val();
   if (password !== retype_password) {
      $("#retype_password_error_message").html('<div class="alert alert-danger" role="alert">'+
      'Οι κωδικοί δεν ταιριάζουν'+
      '</div>');
      $("#retype_password_error_message").show();
      $("#form_retype_password").css("border-bottom","2px solid #F90A0A");
      error_retype_password = true;
   } else {
      $("#retype_password_error_message").hide();
      $("#form_retype_password").css("border-bottom","2px solid #34F458");
   }
}

function check_email() {
   var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   var email = $("#form_email").val();
   if (pattern.test(email) && email !== '') {
      $("#email_error_message").hide();
      $("#form_email").css("border-bottom","2px solid #34F458");
   } else {
      $("#email_error_message").html('<div class="alert alert-danger" role="alert">'+
      'Το email δεν έιναι έγκυρο'+
      '</div>');
      $("#email_error_message").show();
      $("#form_email").css("border-bottom","2px solid #F90A0A");
      error_email = true;
   }
}
function check_username() {
   var pattern = /^[a-zA-Z_0-9]*$/;
   var fname = $("#form_username").val();
   if (pattern.test(fname) && fname !== '') {
      $("#username_error_message").hide();
      $("#form_username").css("border-bottom","2px solid #34F458");
   } else {
      $("#username_error_message").html('<div class="alert alert-danger" role="alert">'+
      'Το όνομα πρέπει να περιέχει μόνο λατινικούς χαρακτήρες, κάτω παύλα ή/και νούμερα'+
      '</div>');
      $("#username_error_message").show();
      $("#form_username").css("border-bottom","2px solid #F90A0A");
      error_username = true;
   }
}

$("#registration_form").submit(function() {
   error_fname = false;
   error_sname = false;
   error_email = false;
   error_password = false;
   error_retype_password = false;
   error_username = false;

   check_fname();
   check_sname();
   check_email();
   check_password();
   check_retype_password();
   check_username();

   // if (error_fname === false && error_sname === false && error_email === false && error_password === false && error_retype_password === false) {
   //    alert("Registration Successfull");
   //    return true;
   // } else {
   //    alert("Please Fill the form Correctly");
   //    return false;
   // }


});
});
</script>
</html>
