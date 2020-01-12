<!DOCTYPE html>
<html lang="en">

<body>
		<h4>  	Επιτυχής αγορά! <br>
				Λεπτομέρειες: <br>
				<hr>			  
	</h4>
<?php
		  echo "Ημερομηνία αγοράς:";
		  $today = date("d/m/Y"); 
          echo $today;
?>
<br>
<?php		
          echo "Προιόν/προιόντα:";
          // if (isset($_SESSION['name']))
          echo $values["name"];
?>
<br>
<?php   
          echo "Ποσότητα:";

?> 
<br>

<?php
          echo "Συνολικό ποσό:";
          // if (isset($_SESSION['price']))
          echo $total;

?>
<br>
	
</body>
</html>