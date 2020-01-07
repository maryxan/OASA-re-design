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
    <link rel="stylesheet" href="profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="profile.js"></script>
</head>
<body> 
    <div class="content">

<!-- <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> -->

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
		            echo login_logout_button();
		        ?>
			</ul>
		</div>
	</nav>
   <!-- breadcrumbs -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
    <li class="breadcrumb-item active" aria-current="page">Προφίλ</li>
  </ol>
</nav> 

<!--  <h2><a href="../logout/logout.php">Logout</a></h2>
 --> <!-- <h2><a href="../profile/updateprofile.php">Επεξεργασία</a></h2> -->
 


<!-- ================================================= PROFILE =============================================================================
 -->
<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>User name</h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"></a></div>
    </div>
    <div class="row">
  		<!-- <div class="col-sm-3">
              

            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload">
            </div></hr><br>
   
        </div> -->
    	<div class="col">
            <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Στοιχεία</a></li>
            <li  class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages">Αγαπημένα</a></li>
            </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <br>
                  <form>
                      <div class="form-row">                          
                          <div class="col-xs-6">
                              <label for="name"><h4>Όνομα</h4></label>
                              <input type="text" class="form-control" name="name" <?php if (isset($_SESSION['name'])) echo 'value = "'.$_SESSION['name'].'"' ?>>
                          </div>
                          <div class="col-xs-6">
                              <label for="username"><h4>Username</h4></label>
                              <input type="username" class="form-control" name="username" <?php if (isset($_SESSION['username'])) echo 'value = "'.$_SESSION['username'].'"' ?>>
                          </div>
                      </div>
                      <div class="form-row">
                                       
                          <div class="col-xs-6">
                            <label for="surname"><h4>Επώνυμο</h4></label>
                              <input type="text" class="form-control" name="surname"<?php if (isset($_SESSION['surname'])) echo 'value = "'.$_SESSION['surname'].'"' ?>>
                          </div>
                      
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" <?php if (isset($_SESSION['email'])) echo 'value = "'.$_SESSION['email'].'"' ?>>
                          </div>
                      </div>        
                      <div class="form-row">                         
                          <div class="col-xs-6">
                              <label for="location"><h4>Περιοχή</h4></label>
                              <input type="text" class="form-control" id="location">
                          </div>
                      </div> 
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
									<button><a href="../profile/updateprofile.php">Επεξεργασία στοιχείων</a></button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->

<!--             ==================================================== kartela agapimena =============================================== 
 -->             

 				<div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <!-- <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form> -->
               
             </div><!--/tab-pane-->
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

    </div>
    <div id="app-footer"></div>
</body>

<script type="text/javascript">

	$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});

</script>
</html>