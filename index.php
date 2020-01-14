<?php
session_start();
include 'login_logout_button.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>OASA.gr</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="index.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="index.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css" type="text/css" rel="stylesheet" />

</head>
<body> 
    <div class="content">

<!--  ============= NAVIGATION BAR ================
 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php">OASA logo
<!--    <img src="images/logo2.png" style="height:70px; width: 110px;" alt="">
 -->  </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">			
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="diadromi/diadromi.php">Διαδρομή</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Δρομολόγια</a></li>
			<li class="nav-item"><a class="nav-link" href="tickets/tickets.php">Εισιτήρια-Κάρτες</a></li>
			<li class="nav-item"><a class="nav-link" href="amea/amea.php">ΑΜΕΑ</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Ανακοινώσεις</a></li>
			<li class="nav-item"><a class="nav-link" href="faq/faq.php">FAQ</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php 
          if(isset(($_SESSION['login_user'])) && ($_SESSION['login_user']) == true) {

              echo '<li class="nav-item"><a class="nav-link" href="profile/profile.php"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Προφίλ</a></li>'; 
              
          } else {

            echo '<li class="nav-item"><a class="nav-link" href="signup/signup.php"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Εγγραφή </a></li>';

          }
          ?>
			
			<?php 
          if(isset(($_SESSION['login_user'])) && ($_SESSION['login_user']) == true) {

              echo '<li class="nav-item"><a class="nav-link" href="logout/logout.php"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Εξοδος</a></li>'; 
              
          } else {

            echo '<li class="nav-item"><a class="nav-link" href="login/login.php"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Είσοδος</a></li>';

          }
          ?>
		</ul>
	</div>
</nav>

<div class="bg-img">  
	<form action="diadromi/diadromi.php" method="get" class="container">
		<h1>Εύρεση διαδρομής</h1>
		<label for="starting_point">Από:</label>
    <input type="text" placeholder="Σημείο εκκίνησης" name="starting_point">
    <label for="destination">Προς:</label>
    <input type="text" placeholder="Προορισμός" name="destination">
    <button class="btn" type="submit" name="find_route">Εύρεση διαδρομής</button>
	</form>
  
</div>
<div class="center_row">
<br>
<div class="row" style="margin-left: 600px;">
      <div class="col-md-6 font">
        <h1> Μια πόλη. Ένα δίκτυο.</h1>
        <hr>       
        <img src="images/icons.png" style="margin-left: 20px;">
      </div>
</div>      
</div>

<br>
<br>
<div class="row" style="margin-left:20px;">
            <div class="col-sm-12 col-md-6">
              <h2>Απεργίες : </h2> <br>

            <div class="month">      
              <ul>
                <li>
                  Ιανουάριος<br>
                  <span style="font-size:18px">2020</span>
                </li>
              </ul>
            </div>

            <ul class="weekdays">
              <li>We</li>
              <li>Th</li>
              <li>Fr</li>
              <li>Sa</li>
              <li>Su</li>
              <li>Mo</li>
              <li>Tu</li>
            </ul>

            <ul class="days">  
              <li>1</li>
              <li>2</li>
              <li>3</li>
              <li>4</li>
              <li>5</li>
              <li>6</li>
              <li>7</li>
              <li>8</li>
              <li>9</li>
              <li><span class="active">10</span></li>
              <li>11</li>
              <li>12</li>
              <li>13</li>
              <li>14</li>
              <li>15</li>
              <li>16</li>
              <li>17</li>
              <li>18</li>
              <li>19</li>
              <li><span class="active">20</span></li>
              <li>21</li>
              <li>22</li>
              <li>23</li>
              <li>24</li>
              <li>25</li>
              <li>26</li>
              <li>27</li>
              <li>28</li>
              <li>29</li>
              <li>30</li>
              <li><span class="active">31</span></li>
            </ul>

            </div>

            <div class="col-xs-6 col-md-3">
              <h2>Ανακοινώσεις : </h2> <br>
              <div class="card" style="width: 18rem;">
              <div class="card-header">
                Τα τελευταία νέα
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </div>
                
            </div>

  </div> 


<!-- <div class="calendar">
<h1>Απεργίες : </h1>
<div class="month">      
  <ul>
    <li>
      Ιανουάριος<br>
      <span style="font-size:18px">2020</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
  <li>Mo</li>
  <li>Tu</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li><span class="active">20</span></li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li><span class="active">31</span></li>
</ul>
</div> -->
  
  <br> <br> <br> <br> <br> <br> <br>
<div class="containerr">
        <div class="roww">
<!--             <div class="col-xs-12">
 -->                <!-- <h1>FullCalendar Events with Bootstrap Modal</h1>
                <p>from <a href="http://www.mikesmithdev.com/blog/fullcalendar-event-details-with-bootstrap-modal/" target="_blank">http://www.mikesmithdev.com/blog/fullcalendar-event-details-with-bootstrap-modal/</a></p> -->
                <!-- <br /> -->
                <div id="bootstrapModalFullCalendar" style="width:600px; height: 700px;"></div>
<!--             </div>
 -->        </div>
    </div>

    <div id="fullCalModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                    <h4 id="modalTitle" class="modal-title"></h4>
                </div>
                <div id="modalBody" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary" id="eventUrl" target="_blank">Event Page</a>
                </div>
            </div>
        </div>
    </div>

<h2>Άρθρα και Σχετικά</h2>
<div class="row">
  <div class="column">
    <img src="images/strike.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/athensbus.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="images/old.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</div> <!-- content -->

<!-- FOOTER -->
 
<?php
	include "components/footer/footer.php";
?>
       
</body>
<script>
        $(document).ready(function() {
            $('#bootstrapModalFullCalendar').fullCalendar({
                header: {
                    left: '',
                    center: 'prev title next',
                    right: ''
                },
                eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
                events:
                [
                   {
                      "title":"ΜΕΤΡΟ",
                      "description":"<p>This is just a fake description for the Free Pizza.</p><p>Nothing to see!</p>",
                      "start":moment().subtract('days',14),
                      "end":moment().subtract('days',14),
                      "url":"http://www.mikesmithdev.com/blog/coding-without-music-vs-coding-with-music/"
                   },
                   {
                      "title":"DNUG Meeting",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the DNUG Meeting.</p><p>Nothing to see!</p>",
                      "start":moment().subtract('days',10),
                      "end":moment().subtract('days',10),
                      "url":"http://www.mikesmithdev.com/blog/youtube-video-event-tracking-with-google-analytics/"
                   },
                   {
                      "title":"Staff Meeting",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the Staff Meeting.</p><p>Nothing to see!</p>",
                      "start":moment().subtract('days',6),
                      "end":moment().subtract('days',6),
                      "url":"http://www.mikesmithdev.com/blog/what-if-your-website-were-an-animal/"
                   },
                   {
                      "title":"Poker Night",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the Poker Night.</p><p>Nothing to see!</p>",
                      "start":moment().subtract('days',2),
                      "end":moment().subtract('days',2),
                      "url":"http://www.mikesmithdev.com/blog/how-to-make-a-qr-code-in-asp-net/"
                   },
                   {
                      "title":"NES Gamers",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the NES Gamers.</p><p>Nothing to see!</p>",
                      "start":moment(),
                      "end":moment(),
                      "url":"http://www.mikesmithdev.com/blog/name-that-nes-soundtrack/"
                   },
                   {
                      "title":"XBox Tourney",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the XBox Tourney.</p><p>Nothing to see!</p>",
                      "start":moment().add('days',3),
                      "end":moment().add('days',3),
                      "url":"http://www.mikesmithdev.com/blog/worst-job-titles-in-internet-and-info-tech/"
                   },
                   {
                      "title":"Pool Party",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the Pool Party.</p><p>Nothing to see!</p>",
                      "start":moment().add('days',5),
                      "end":moment().add('days',5),
                      "url":"http://www.mikesmithdev.com/blog/jquery-full-calendar/"
                   },
                   {
                      "title":"Staff Meeting",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the Staff Meeting.</p><p>Nothing to see!</p>",
                      "start":moment().add('days',9),
                      "end":moment().add('days',9),
                      "url":"http://www.mikesmithdev.com/blog/keep-important-licensing-comments-dotnet-bundling-minification/"
                   },
                   {
                      "title":"Poker Night",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the Poker Night.</p><p>Nothing to see!</p>",
                      "start":moment().add('days',11),
                      "end":moment().add('days',11),
                      "url":"http://www.mikesmithdev.com/blog/aspnet-bundling-changes-output-with-user-agent-eureka-1/"
                   },
                   {
                      "title":"Hackathon",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the Hackathon.</p><p>Nothing to see!</p>",
                       "start":moment().add('days',15),
                      "end":moment().add('days',15),
                      "url":"http://www.mikesmithdev.com/blog/worst-job-titles-in-internet-and-info-tech/"
                   },
                   {
                      "title":"Beta Testing",
                      "allday":"false",
                      "description":"<p>This is just a fake description for the Beta Testing.</p><p>Nothing to see!</p>",
                      "start":moment().add('days',22),
                      "end":moment().add('days',22),
                      "url":"http://www.mikesmithdev.com/blog/worst-job-titles-in-internet-and-info-tech/"
                    }//,
                   // {
                   //    "title":"Perl Meetup",
                   //    "allday":"false",
                   //    "description":"<p>This is just a fake description for the Perl Meetup.</p><p>Nothing to see... though no one would show up any way.</p>",
                   //    "start":moment().subtract('days',20),
                   //    "end":moment().subtract('days',20),
                   //    "url":"http://www.mikesmithdev.com/blog/migrating-from-asp-net-to-ghost-node-js/"
                   // },
                   // {
                   //    "title":"Node.js Meetup",
                   //    "allday":"false",
                   //    "description":"<p>This is just a fake description for the Node.js Meetup.</p><p>Nothing to see!</p>",
                   //    "start":moment().add('days',25),
                   //    "end":moment().add('days',25),
                   //    "url":"http://www.mikesmithdev.com/blog/pdf-secure-access-and-log-downloads/"
                   // },
                   // {
                   //    "title":"Javascript Meetup",
                   //    "allday":"false",
                   //    "description":"<p>This is just a fake description for the Javascript Meetup.</p><p>Nothing to see!</p>",
                   //    "start":moment().subtract('days',27),
                   //    "end":moment().subtract('days',27),
                   //    "url":"http://www.mikesmithdev.com/blog/migrating-from-asp-net-to-ghost-node-js/"
                   // },
                   // {
                   //    "title":"HTML Meetup",
                   //    "allday":"false",
                   //    "description":"<p>This is just a fake description for the HTML Meetup.</p><p>Nothing to see!</p>",
                   //    "start":moment().subtract('days',22),
                   //    "end":moment().subtract('days',22),
                   //    "url":"http://www.mikesmithdev.com/blog/migrating-from-asp-net-to-ghost-node-js/"
                   // },
                   // {
                   //    "title":"CSS Meetup",
                   //    "allday":"false",
                   //    "description":"<p>This is just a fake description for the CSS Meetup.</p><p>Nothing to see!</p>",
                   //    "start":moment().add('days',27),
                   //    "end":moment().add('days',27),
                   //    "url":"http://www.mikesmithdev.com/blog/migrating-from-asp-net-to-ghost-node-js/"
                   // }
                ]
            });
        });
    </script>
</html>
