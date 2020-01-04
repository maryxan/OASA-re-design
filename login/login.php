<?php

  include 'db_connection.php';
  session_start();
?>

<?php
$errors = array(); 


$link = mysqli_connect('localhost', 'root', '', 'sdi1400300');

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($link, $_POST['username']);
  $password = mysqli_real_escape_string($link, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT * FROM simpleuser WHERE username='$username' AND password='$password'";
    $results = mysqli_query($link, $query);
    $row = mysqli_fetch_array($results);
    $active = $row['active'];  

    if (mysqli_num_rows($results) == 1) {

      header('location:profile.html');
    }else {
      array_push($errors, "Wrong username/password combination");
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--  ============= NAVIGATION BAR ================
 --><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="in.html">OASA logo</a>
    </div>
    <ul class="nav navbar-nav">

        <li><a href="#">Διαδρομή</a></li>
        <li><a href="#">Δρομολόγια</a></li>
        <li><a href="tickets.html">Εισητήρια-κάρτες</a></li>
        <li><a href="amea.php">ΑΜΕΑ</a></li>
        <li><a href="#">Ανακοινώσεις</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="#">Για τον OASA</a></li>

   </ul>
    <ul class="nav navbar-nav navbar-right">
       <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>
    </ul>
  </div>
</nav>

   <!-- breadcrumbs -->
   <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="in.html">Αρχική</a></li>
      <li class="breadcrumb-item active" aria-current="page">Είσοδος</li>
    </ol>
  </nav>   
<!-- ==============================================  
 -->
 <div class="container">

 <form action="login.php" method="post">

  <?php include('errors.php'); ?>


  <div class="containerr">
    <label> Username </label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label>Password</label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="login_user">Login</button><br>
    
  </div>
  <div class="containerr">
    <p>Δεν έχεις λογαριασμό? <a href="../signup/signup.php">Εγγραφή 
  </div>
</form>


</div>

</body>
</html>
