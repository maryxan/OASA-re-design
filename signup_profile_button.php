<?php 
         function signup_profile_button(){ 


         	if(isset(($_SESSION['login_user'])) && ($_SESSION['login_user']) == true) {

              return '<li class="nav-item"><a class="nav-link" href="../profile/profile.php"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Προφίλ</a></li>'; 
              
          } else {

            return '<li class="nav-item"><a class="nav-link" href="../signup/signup.php"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Εγγραφή</a></li>';

          }
		}
      ?>