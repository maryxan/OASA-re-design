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
    <a class="navbar-brand" href="../index.php">OASA logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">      
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="../diadromi/diadromi.php">Διαδρομή</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Δρομολόγια</a></li>
        <li class="nav-item active"><a class="nav-link" href="../tickets/tickets.php">Εισιτήρια-Κάρτες</a></li>
        <li class="nav-item"><a class="nav-link" href="../amea/amea.php">ΑΜΕΑ</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Ανακοινώσεις</a></li>
        <li class="nav-item"><a class="nav-link" href="../faq/faq.php">FAQ</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Για τον ΟΑΣΑ</a></li>
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


  <div class="bg-img"/>  
  <!-- <form class="cnt">
    <button class="btn" type="submit" name="find_route"></button>
    <button class="btn" type="submit" name="find_route"></button>
    <div class="buttons" style="margin-top: 250px; margin-left: 600px;">
      <a href="../ekdosi/ekdosi.php" class="btn btn-warning" role="button">ΠΛΗΡΟΦΟΡΙΕΣ</a>
    </div>

  </form> -->
  
  <!-- </div> -->
</div>

    <!--================-->
 <br><br>
 <div class="container">
    <div class="buttons">
      <a href="../ekdosi/ekdosi.php" class="btn btn-warning" role="button">ΠΛΗΡΟΦΟΡΙΕΣ</a>
    </div>
 <hr>
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
      <img src="../tickets/<?php echo $row["image"]; ?>" class="img-responsive" style="width:300px;" /><br />
      <hr>
      <h4 class="text-info"><?php echo $row["name"]; ?></h4>
   
      <h4 class="text-danger"><?php echo $row["price"];?>€</h4>

    
      <br>
      <h5>Ποσότητα</h5>
      <input type="number" min="1" name="quantity" value="1" class="form-control" />
   
      <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
   
      <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" /><br>
   
      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Προσθήκη" />
 
    </div>
    </div>
    </div>
    </form>

    <?php
    // $_SESSION["name"] = $row["name"];
    // $_SESSION["price"] = $row["price"];
    }
    }
    ?>  
  </div>
      
    <?php
    if(!empty($_SESSION["shopping_cart"])){
      $total = 0;
      ?>
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

      <?php
      foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
    ?>
      <tr>
      <td><?php echo $values["name"]; ?></td>
      <td><?php echo $values["quantity"]; ?></td>
      <td> <?php echo $values["price"]; ?>€</td>
      <td> <?php echo number_format($values["quantity"] * $values["price"], 2);?>€</td>
      <td><a href="../tickets/tickets.php?action=delete&id= <?php echo $values["id"]; ?>"><span class="text-danger">Αφαίρεση</span></a></td>

    </tr>
    <?php
      $total = $total + ($values["quantity"] * $values["price"]);
    }
    ?>
      <tr>
      <td colspan="3" align="right">Συνολικό ποσό</td>
      <td align="right"><?php echo number_format($total, 2); ?>€</td>
      <td><button onclick="myFunction()" class="btn btn-success" >Αγορά</button></td> 
      </tr>
    <?php
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
      confirm("Επιθυμείτε να συνεχίσετε με την αγορά;");  
      var myWindow = window.open("ticket_print.php", "MsgWindow", "width=500,height=500");
    }
  </script>
</html>