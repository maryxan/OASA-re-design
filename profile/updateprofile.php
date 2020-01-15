<?php

include '../db_connection/db_connection.php';
session_start();
include '../login_logout_button.php';
include '../signup_profile_button.php';

?>
<?php

  $errors = array(); 
  if(isset($_POST['update_button']))  {

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $surname = mysqli_real_escape_string($conn, $_POST['surname']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);


   // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($surname)) { array_push($errors, "surname is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }


  // if($username == $_SESSION["username"]){
  //   echo "same!";

  // }else {
  //   echo "not same!";
  // } 
  // // check if email or username are taken
  // $user_check_query = "SELECT * FROM simpleuser WHERE username= '".$_SESSION['username']."' OR email='".$_SESSION['email']."' LIMIT 1";
  // $result = mysqli_query($conn, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['username'] === $username) {
  //     array_push($errors, "Username already exists");
  //   }

  //   if ($user['email'] === $email) {
  //     array_push($errors, "email already exists");
  //   }
  // }

  // // update user if no errors
  // if (count($errors) == 0) {

    $query = "UPDATE simpleuser
              SET name = '$name', surname = '$surname', username = '$username', email= '$email'
              WHERE username = '".$_SESSION['username']."'";
    $query_run = mysqli_query($conn, $query);


    if($query_run){
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;
    $_SESSION['username'] =  $username;
    $_SESSION['email'] = $email;

    $_SESSION['upd_user'] = true;


    header('location:../profile/profile.php');

    }
   // }


  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>OASA.gr</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="profile.css">

</head>
<body> 
<div class="content">

<!--  ============= NAVIGATION BAR ================
 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">OASA.gr
      <!-- <img src="../images/logcopy2.png" style="height:60px; width: 65px;" alt=""> -->
   </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">      
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="../diadromi/diadromi.php">Διαδρομή</a></li>
        <li class="nav-item"><a class="nav-link" href="../dromologia/dromologia.php">Δρομολόγια</a></li>
        <li class="nav-item"><a class="nav-link" href="../tickets/tickets.php">Εισιτήρια-Κάρτες</a></li>
        <li class="nav-item"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
        <li class="nav-item"><a class="nav-link" href="../faq/faq.php">FAQ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
                    echo signup_profile_button();
                echo login_logout_button();
            ?>
      </ul>
    </div>
  </nav>
   <!-- breadcrumbs -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="../profile/profile.php">Προφίλ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Επεξεργασία στοιχείων</li>
  </ol>
</nav> 

<!-- ========================================== PROFILE UPDATE ============================================================
 -->
<hr>
<div class="container bootstrap snippet">
    
    <div class="row">
      <div class="col">
            <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Τα στοιχεία μου</a></li>
            <li  class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages">Αγαπημένα</a></li>
            </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <br>
                  <form method="post" action="../profile/updateprofile.php">
                    <?php include('errors.php'); ?>
                      <div class="form-row">                          
                          <div class="col-xs-6">
                              <label for="name"><h4>Όνομα</h4></label>
                              <input  type="text" class="form-control" name="name" id="form_fname" <?php if (isset($_SESSION['name'])) echo 'value = "'.$_SESSION['name'].'"' ?>>
                              <span class="error_form" id="fname_error_message"></span><br>
                          </div>
                          <div class="col-xs-6">
                              <label for="username"><h4>Username</h4></label>
                              <input  type="username" class="form-control" name="username" id="form_username"<?php if (isset($_SESSION['username'])) echo 'value = "'.$_SESSION['username'].'"' ?>>
                              <span class="error_form" id="username_error_message"></span><br>

                          </div>
                      </div>
                      <div class="form-row">
                                       
                          <div class="col-xs-6">
                            <label for="surname"><h4>Επώνυμο</h4></label>
                              <input  type="text" class="form-control" name="surname" id="form_sname"<?php if (isset($_SESSION['surname'])) echo 'value = "'.$_SESSION['surname'].'"' ?>>
                               <span class="error_form" id="sname_error_message"></span><br>

                          </div>
                      
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input  type="email" class="form-control" name="email" id="form_email"<?php if (isset($_SESSION['email'])) echo 'value = "'.$_SESSION['email'].'"' ?>>                              
                              <span class="error_form" id="email_error_message"></span><br>

                          </div>
                      </div>   
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit" name="update_button">Αποθήκευση αλλαγών</button>
                            </div>
                      </div>
                </form>
              
              <hr>
              
             </div><!--/tab-pane-->

<!--             ==================================================== kartela agapimena =============================================== 
 -->             

                <div class="tab-pane" id="messages">
               
                   
                   <hr>
                  
                </div><!--/tab-pane-->
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

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
$("#username_error_message").hide();


var error_fname = false;
var error_sname = false;
var error_email = false;
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
   error_username = false;

   check_fname();
   check_sname();
   check_email();
   check_username();

});
});
</script>
</html>