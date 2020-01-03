<?php

  session_start();

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

<style>
  /* Style the form - display items horizontally */
.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

/* Add some margins for each label */
.form-inline label {
  margin: 5px 10px 5px 0;
}

/* Style the input fields */
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

/* Style the submit button */
.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
}

.form-inline button:hover {
  background-color: royalblue;
}

/* Add responsiveness - display the form controls vertically instead of horizontally on screens that are less than 800px wide */
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>

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
    <li class="breadcrumb-item active" aria-current="page">Εύρεση διαδρομής</li>
  </ol>
</nav>   
  
  <div class="container">
  <h3>Eπιλέξτε αφετηρία και προορισμό</h3>  
  <form class="form-inline" action="/action_page.php">
  <label for="email">Από:</label>
  <input type="email" id="email" placeholder="Επιλέξτε σημείο εκκίνισης" name="email">
  <label for="pwd">Πρός:</label>
  <input type="password" id="pwd" placeholder="Επιλέξτε προορισμό" name="pswd">
  <button type="submit">Εύρεση διαδρομής</button>
</form>
    

  </div>

</body>