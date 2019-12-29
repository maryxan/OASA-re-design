<!DOCTYPE html>
<html lang="en">
<head>
  <title>OASA.gr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<!--  ============= NAVIGATION BAR ================
 --><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">OASA logo</a>
    </div>
    <ul class="nav navbar-nav">

        <li><a href="#">Διαδρομή</a></li>
        <li><a href="#">Δρομολόγια</a></li>
        <li><a href="tickets/tickets.html">Εισητήρια-κάρτες</a></li>
        <li><a href="amea/amea.php">ΑΜΕΑ</a></li>
        <li><a href="#">Ανακοινώσεις</a></li>
        <li><a href="faq/faq.html">FAQ</a></li>
        <li><a href="#">για τον ΟΑΣΑ</a></li>

   </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup/signup.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
      <li><a href="login/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>
    </ul>
  </div>
</nav>

    <div class="bg-img">
    <form action="/action_page.php" class="container">
      <h1>Εύρεση διαδρομής</h1>

      <label for="email"><b>Από</b></label>
      <input type="text" placeholder="Επιλέξτε σημείο εκκίνισης" name="email" required>

      <label for="psw"><b>Πρός</b></label>
      <input type="password" placeholder="Επιλέξτε προορισμό" name="psw" required>

      <button type="submit" class="btn">Εύρεση</button>
    </form>
  </div>


<!--  <div class="container">
<br>
    <div class="input-group">
      <div class="form-group  has-feedback">
            <input type="text" class="form-control" id="inputSuccess5">
            <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
        </div>
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">Consultar!</button>
        </span>
    </div>
</div> -->

<!-- <div class="container">
  <div class="row">
<br /><br />
<form id="togglingForm" method="post" class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-9">
            <input type="text" class="form-control" name="company"
                   required data-fv-notempty-message="The company name is required" /> <br />
                   
            <label class="radio-inline">Search User by </label>  
            <label class="radio-inline">
                <input type="radio" name="rating" value="terrible" checked='checked' /> Name
            </label>
            <label class="radio-inline">
                <input type="radio" name="rating" value="terrible" /> NIC
            </label>
            <label class="radio-inline">
                <input type="radio" name="rating" value="terrible" /> Licence
            </label>
            
    
                  
        </div>
     
        <div class="col-xs-2">
            <button type="button" class="btn btn-success" data-toggle="#jobInfo">Search</button>
        </div>
    </div>
</form> -->




  </div>
</div>
  





<!-- FOOTER -->
        <!-- <footer class="footer" style="background-color: #ffffff;padding-top: 50px;">
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <div class="col-md-12"> -->
                    <!--Footer Bottom-->
         <!--            <p class="text-center">&copy; Copyright 2019 - University of Athens Di.  All rights reserved.</p>
                  </div>
                </div>
              </div>
            </div>
        </footer> -->
       
</body>
</html>
