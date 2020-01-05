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
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>

</head>
<body>

<!--  ============= NAVIGATION BAR ================
 --><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">OASA logo</a>
    </div>
    <ul class="nav navbar-nav">

        <li><a href="#">Διαδρομή</a></li>
        <li><a href="#">Δρομολόγια</a></li>
        <li><a href="../tickets/tickets.html">Εισητήρια-κάρτες</a></li>
        <li><a href="../amea/amea.php">ΑΜΕΑ</a></li>
        <li><a href="#">Ανακοινώσεις</a></li>
        <li><a href="../faq/faq.html">FAQ</a></li>
        <li><a href="#">για τον ΟΑΣΑ</a></li>

   </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../signup/signup.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
      <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>
    </ul>
  </div>
</nav>

 <!-- breadcrumbs -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
    <li class="breadcrumb-item active" aria-current="page">AMEA</li>
  </ol>
</nav>   

<!-- ==============================================  
 -->

 <div style="background-image: url('1484992.jpg');">

 <div class="container">

  <br>
  <div class="container">
  <div class="row">
      <div class="col-12"><h2>Στάσεις με προεξοχές</h2></div>
      <div class="col-12">
          <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class="search-query form-control" placeholder="Search" />
                    <span class="input-group-btn">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search" style="height:26px;width:20px;"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
  </div>
</div>





<!-- FOOTER -->
        <br> <br> <br> <br> <br> <br>
<button type="button" class="collapsible">Μάθετε περισσότερα</button>
<div class="content">
  <p>Περιγραφή, Ενέργειες, Δράσεις...</p>
</div>

  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
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
              <li><a class="facebook" href="https://www.facebook.com/OASA.GR" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/OASA.GR/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a class="youtube" href="https://www.youtube.com/channel/UC0XdkZnOHhRLc3NE9tm4NUQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</footer>
</body>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</html>
