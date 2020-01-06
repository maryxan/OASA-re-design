<?php

include '../db_connection/db_connection.php';
session_start();
include '../login_logout_button.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>OASA.gr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--  ============= NAVIGATION BAR ================
 --><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">OASA logo</a>
    </div>
    <ul class="nav navbar-nav">

        <li><a href="../diadromi/diadromi.php">Διαδρομή</a></li>
        <li><a href="#">Δρομολόγια</a></li>
        <li><a href="../tickets/tickets.php">Εισητήρια-Κάρτες</a></li>
        <li><a href="../amea/amea.php">ΑΜΕΑ</a></li>
        <li><a href="#">Ανακοινώσεις</a></li>
        <li><a href="../faq/faq.php">FAQ</a></li>
        <li><a href="#">Για τον ΟΑΣΑ</a></li>

   </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../signup/signup.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
      <?php
          echo login_logout_button();
        ?>    </ul>
  </div>
</nav>
   <!-- breadcrumbs -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="../profile/profile.php">Προφίλ</a></li>
    <li class="breadcrumb-item active" aria-current="../profile/updateprofile.php">Επεξεργασία προφίλ</a></li>

  </ol>
</nav> 




</body>

</html>