<?php 
         function login_logout_button(){ 


         	if(isset(($_SESSION['login_user'])) && ($_SESSION['login_user']) == true) {

              return '<li class="nav-item"><a class="nav-link" href="../logout/logout.php"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Εξοδος</a></li>'; 
              
          } else {

            return '<li class="nav-item"><a class="nav-link" href="../login/login.php"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Είσοδος</a></li>';

          }
		}
      ?>