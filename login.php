<?php

  session_start();

  require_once "db_connection.php";

 // if($_SERVER["REQUEST_METHOD"] == "POST") {
 //      // username and password sent from form 
      
 //      $myusername = mysqli_real_escape_string($link,$_POST['username']);
 //      $mypassword = mysqli_real_escape_string($link,$_POST['password']); 
      
 //      $sql = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
 //      $result = mysqli_query($link,$sql);
 //      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 //      $active = $row['active'];
      
 //      $count = mysqli_num_rows($result);
      
 //      // If result matched $myusername and $mypassword, table row must be 1 row
    
 //      if($count == 1) {
 //         session_register("myusername");
 //         $_SESSION['login_user'] = $myusername;
         
 //         header("location: profile.html");
 //      }else {
 //         $error = "Your Login Name or Password is invalid";
 //      }
 //   }


// LOGIN USER
$username = "";
$password = "";
$errors = array(); 

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
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $results = mysqli_query($link, $query);
    if (mysqli_num_rows($results) == 1) {
      // $_SESSION['username'] = $username;
      // $_SESSION['success'] = "You are now logged in";
      header('location: signup.php');
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
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.containerr {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
    <p>Δεν έχεις λογαριασμό? <a href="signup.php">Εγγραφή 
  </div>
</form>


</div>

</body>
</html>
