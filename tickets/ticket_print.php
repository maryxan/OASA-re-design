<?php
session_start();
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
</head>
<body>
    <div class="alert alert-success">
        <h4>Επιτυχής αγορά!</h4>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Λεπτομέρειες:</h5>
        </div>
        <div class="card-body">
            <p>
                <?php
                    echo "<strong>Ημερομηνία αγοράς:</strong>
                    ".date("d/m/Y");
                ?>
            </p>
            <br>
            <?php		
                echo "<strong>Προιόν/προιόντα:</strong>
                <ul class='list-group list-group-flush'>";
                for ($i=0; $i < count($_SESSION["shopping_cart"]); $i++) { 
                    echo "<li class='list-group-item'>".$_SESSION["shopping_cart"][$i]['name']
                    ." ( ".$_SESSION["shopping_cart"][$i]['price']." € )"
                    ." x ".$_SESSION["shopping_cart"][$i]['quantity']."</li>";
                }
                echo "</ul>";
                ?>
            <p>
            <br>
            <br>
            <?php
                echo "<strong>Συνολικό ποσό:</strong>
                 ".$_SESSION['total_price']." € ";
            ?>
            </p>
        
        </div>
    </div>
</body>
</html>