<!DOCTYPE html>
<html lang="en">
<head>
  <title>OASA.gr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        <li><a href="diadromi/diadromi.php">Διαδρομή</a></li>
        <li><a href="#">Δρομολόγια</a></li>
        <li><a href="tickets">Εισητήρια-κάρτες</a></li>
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

  </div>
</div>
  


<!-- FOOTER -->
<br>
<br>
<br>
 
 <footer class="site-footer">
        <div class="containerr">
        <div class="row" style="margin-left:20px;">
          <div class="col-sm-12 col-md-6">
            <h6>Επικοινωνία</h6>
            <ul class="footer-links">
              <li>Διευθυνση:Μετσόβου 15,Αθήνα 106 82</li>
              <li>Τηλέφωνο:210-82.00.999</li>
              <li>Φαξ:210-82.12.219</li>
              <li>e-mail:oasa@oasa.gr</li>
              <li>Τηλεφωνική Πληροφόρηση:11 185</li>
            </ul>
          </div>     

          

        </div>
        <hr>
      <div class="containerr">
        <div class="row" style="margin-left:20px;">
          <div class="col-md-8 col-sm-6 col-xs-12" >
            <p class="copyright-text">Copyright &copy;2020 - University of Athens. All rights reserved.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/OASA.GR"><i class="fa fa-facebook"></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/OASA.GR/"><i class="fa fa-instagram"></i></a></li>
              <li><a class="youtube" href="https://www.youtube.com/channel/UC0XdkZnOHhRLc3NE9tm4NUQ"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</footer>
       
</body>
</html>
