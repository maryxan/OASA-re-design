<?php 
session_start();
include '../db_connection/db_connection.php'; 
include '../login_logout_button.php';
include '../signup_profile_button.php';


if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "id");
    if(!in_array($_GET["id"], $item_array_id))
    {
    $count = count($_SESSION["shopping_cart"]);
    $item_array = array(
    'id'    =>  $_GET["id"],
    'name'    =>  $_POST["name"],
    'price'   =>  $_POST["price"],
    'quantity'    =>  $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][$count] = $item_array;
    }
    else
    {
    echo '<script>alert("Το προιόν έχει ήδη προστεθεί")</script>';
    }
  }
  else
  {
    $item_array = array(
    'id'    =>  $_GET["id"],
    'name'    =>  $_POST["name"],
    'price'   =>  $_POST["price"],
    'quantity'    =>  $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}
 
if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
    if($values["id"] == $_GET["id"])
    {
    unset($_SESSION["shopping_cart"][$keys]);
    echo '<script>window.location="../tickets/tickets.php"</script>';
    }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="tickets.js"></script>
    <link rel="stylesheet" type="text/css" href="tickets.css">

  </head>
  
   
  <body>
  <div class="content">
<!--  ============= NAVIGATION BAR ================
   -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">
      <img src="../images/logcopy2.png" style="height:60px; width: 65px;" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">      
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="../diadromi/diadromi.php">Διαδρομή</a></li>
        <li class="nav-item"><a class="nav-link" href="../dromologia/dromologia.php">Δρομολόγια</a></li>
        <li class="nav-item active"><a class="nav-link" href="../tickets/tickets.php">Εισιτήρια-Κάρτες</a></li>
        <li class="nav-item"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
        <li class="nav-item"><a class="nav-link" href="../faq/faq.php">FAQ</a></li>
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
      <li class="breadcrumb-item active" aria-current="page">Εισιτήρια-Κάρτες</li>
    </ol>
  </nav>   


  <div class="bg-img">  
  
</div>

    <!--================-->
 
 <div class="container">
    
    <div class="container mb-5">
      <button class="accordion">Πληροφορίες</button>
      <div class="panel">
        <ul class="list-unstyled mt-3">
          <div class="d-flex justify-content-end">
          <a href="../faq/faq.php">Συχνές ερωτήσεις</a>
          </div>
          <li>
            <h4>Εισιτήρια</h4>
            <hr>
            <p>To ενιαίο εισιτήριο 90 λεπτών ισχύει σε όλα τα μέσα αρμοδιότητας ΟΑΣΑ: Λεωφορεία, Τρόλλεϋ, Τραμ, Ηλεκτρικό Σιδηρόδρομο, Μετρό (μέχρι Κορωπί) και στην ΤΡΑΙΝΟΣΕ (στο τμήμα του Προαστιακού Μαγούλα-Πειραιάς-Κορωπί).<br>
            Δεν ισχύει στις λεωφορειακές γραμμές EXPRESS του Αεροδρομίου, στη γραμμή Χ80 και στο Μετρό στο τμήμα Κορωπί-Αεροδρόμιο.</p>
            <p>Τα εισιτήρια ισχύουν για 90 λεπτά από την πρώτη επικύρωσή τους, ανεξάρτητα από τις ενδιάμεσες επιβιβάσεις/επικυρώσεις.</p>
            <br>
          </li>
          <li>
            <h4>Προσωποποιημένη ηλεκτρονική κάρτα («ATH.ENA card»)</h4>
            <hr>
            <p>Περιλαμβάνει όλα τα είδη κομίστρου, εισιτήρια, μηνιαίες, τριμηνιαίες, εξαμηνιαίες και ετήσιες κάρτες, συμπεριλαμβανομένων των μειωμένων κομίστρων (απαιτούνται προσωπικά στοιχεία).</p>
            <br>
          </li>
          <li>
            <h4>Εισιτήρια/Κάρτες μειωμένου κομίστρου</h4>
            <hr>
            <p>Περιλαμβάνει τις ομάδες: Φοιτητές της Δημόσιας Τριτοβάθμιας Εκπεύδεσης, άτομα με αναπηρία, άνεργοι, άτομα άνω των 65 ετών και παιδιά απο 7 εώς 18 ετών. </p>
            <p>Αγορά εισιτηρίων πραγματοποιείται στην ιστοσελίδα του ΟΑΣΑ και στα Αυτόματα μηχανήματα Επαναφόρτισης Καρτών (ΑΜΕΚ), που είναι εγκατεστημένα σε όλους τους σταθμούς Μετρό και σε στάσεις Τραμ</p>
            <br>
          </li>
        </ul>
      </div>
    </div>

 <hr>
 <br> <br> <br> <br> <br>
 
 <div class="cont">
   
    <?php
    $query = "SELECT * FROM ticket ORDER BY id ASC";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
       

    while($row = mysqli_fetch_array($result)){  

    ?>
      <form method="post" action="../tickets/tickets.php?action=add&id= <?php echo $row["id"]; ?>">
      <div class="col-md-4">
      <div class="card-deck mb-3 text-center">
      <div style="border:2px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
      <img src="../tickets/<?php echo "../images/".$row["image"]; ?>" class="img-responsive" style="width:300px;" /><br />
      <hr>
      <h4 class="text-info"><?php echo $row["name"]; ?></h4>
   
      <h4 class="text-danger"><?php if($row["id"] == 3  && (isset(($_SESSION['reduced_ticket'])) && ($_SESSION['reduced_ticket']) == 1)) {echo $row["reduced_price"];} else {echo $row["price"];}?>€</h4>

    
      <br>
      <h5>Ποσότητα</h5>
      <input type="number" min="1" name="quantity" value="1" class="form-control" />
   
      <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
   
      <input type="hidden" name="price" value="<?php if($row["id"] == 3  && (isset(($_SESSION['reduced_ticket'])) && ($_SESSION['reduced_ticket']) == 1)) {echo $row["reduced_price"];} else {echo $row["price"];}  ?>" /><br>
   
      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Προσθήκη" />
 
    </div>
    </div>
    </div>
    </form>

    <?php
    }
    }
    ?>  
  </div>
      
    <?php
    if(!empty($_SESSION["shopping_cart"])){
      $total_price = 0;
      echo '
        <div style="clear:both"></div>
      <br />
      <h3>Λεπτομέριες αγοράς</h3>
      <div class="table-responsive">
      <table class="table table-bordered">
      <tr>
      <th width="40%">Όνομα αντικειμένου</th>
      <th width="10%">Ποσότητα</th>
      <th width="20%">Τιμή</th>
      <th width="15%">Σύνολο</th>
      <th width="5%"></th>
      </tr>
      ';
      foreach($_SESSION["shopping_cart"] as $keys => $values){
        echo '
        <tr>
        <td>'.$values["name"].'</td>
        <td>'.$values["quantity"].'</td>
        <td>'.$values["price"].'€</td>
        <td>'.number_format($values["quantity"] * $values["price"], 2).'€</td>
        <td><a href="../tickets/tickets.php?action=delete&id= '.$values["id"].'"><span class="text-danger">Αφαίρεση</span></a></td>
      </tr>
      ';
        $total_price = $total_price + ($values["quantity"] * $values["price"]);
      }
      echo '
      <tr>
      <td colspan="3" align="right">Συνολικό ποσό</td>
      <td align="right">'.number_format($total_price, 2).'€</td>
      <td><button onclick="myFunction()" class="btn btn-success" >Αγορά</button></td> 
      </tr>
      ';
      $_SESSION['total_price'] = $total_price;
    }
    ?>
    
    </table>
    </div>
  <br/>
  </div>

  <!-- FOOTER -->
 
  <?php
include "../components/footer/footer.php";
?>
  </body>
  <script>
    
      function myFunction() {
      if(confirm("Επιθυμείτε να συνεχίσετε με την αγορά;")){
        var myWindow = window.open("ticket_print.php", "MsgWindow", "width=500,height=500");
      }
    }

     var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");
    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

  </script>
</html>