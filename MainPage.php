<!DOCTYPE html>
<?php include('Login_page_confirmation.php')?>
<html lang="en-US">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="MainPageStyleCleaned.css">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <meta name="keywords" content="ABQ Tours,Travel&Tours.co">
  <meta name="description" content="This is the travel and tourism website with cryptocurrency payment">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel&Tourism.co</title>
</head>
<body>
<header>
  <div class="header-container">
    <div class="logo-nav-container">
   <div class="logo-container">
    <a href="MainPage.php"><img src="ABQ_Travels_And_Tours__5_-removebg.png" alt="This is the logo of the website" class="logo"></a>
    </div>
    <div class="nav-container">
      <nav>
        <a href="Destinations_Page.php">Destination</a> 
        <a href="Flight_Page.php">Flights</a>
        <a href="Attraction_Page.php">Tours & Activities</a>
        <a href="Packages_Page.php">Packages</a>
        </nav>
    </div>
    <div class="Other-Container" >
      <a href=""><img src="Notification_sign.png" alt="Notifications" class="other_pics"></a>
      <a href=""><img src="Question_Mark_Icon.png" alt="Support&FQA"  class="other_pics" ></a>
      <?php
      if (isset($_SESSION['Email']) && $_SESSION['Email'] == true) {
        echo"<a href='Log_out_page.php' class='Account_Buttons'>Log Out</a>";
    } else {
        echo "<a class='Account_Buttons' href='Login_Page_php.php'>Log In</a>";
        echo "<a class='Account_Buttons' href='Sign_up_page.php'>Sign Up</a>";
    }
      ?>
       <!---<button type="button"  class="Account_Buttons" onclick="window.location.href='Login_Page_php.php'">Log In</button>
      <button type="button" class="Account_Buttons" onclick="window.location.href='sign_up_page.php'">Sign Up</button>---->
    </div>
   </div>
  </div>
</header>
  <?php
  echo "<div class='welcome_header'>";
  if(isset($_SESSION['Email']) && $_SESSION['Email'] == true){
echo "<h1 class='welcome_header'>Welcome " . htmlspecialchars( $_SESSION['First Name']." ".$_SESSION['Last Name']) . "!</h1>";
  }
  else{
    echo "<h1 >Welcome to Travels&Tour.co !</h1>";
  }
  echo "</div>";
  ?>
<section name="hero_section">
  <div class="hero_section">
    <div class="Heading_section">
      <h1 style="font-family: cursive;">Welcome To Travel&Tours.co</h1>
      <h2 style="font-family: cursive;">Please register a ticket</h2>
    </div>
    <div class="form_part">
    <form action="Destinations_Page.php" method="post">
  <label for="destination">Destination:</label>
  <?php

    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "travel_and_tourism";
    $root=3307;
    $con = new mysqli($servername, $username, $password, $dbname,$root);


    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }

      echo '<input type="search" id="destination" name="destination" autocomplete="off" list="destination_list" placeholder="Choose your Destination" on >';
      $sql = "SELECT City FROM countries_destination ";
      $result = mysqli_query($con, $sql);
  
      echo '<datalist id="destination_list">';
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<option values="'.$row['City'].'">'.$row['City'].'</option>';
      }
      echo '</datalist>';
  ?>
  <label for="departure">Departure date:</label>
  <input type="date" id="departure" name="departure"  >
  <label for="return">Return date:</label>
  <input type="date" id="return" name="return">
  <label for="passengers">Passengers:</label>
  <input type="number" id="passengers" name="passengers" min="1" max="10">
  <div class="btn-group">
    <button type="submit">Search</button>
    <button type="reset">Reset</button>
  </div>
</form>

    </div>
  </div>
</section>
<section name="Destination">
  <h2>Famous Destinations</h2>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner" >
        <div class="item active">
          <img src="Paris.png" alt="Paris" style="width:100%;">
          <div class="carousel-caption">
            <h2>Paris</h2>
            <p>Paris the City of Lights,probably the most famous destination around the world, with landmarks like the Eiffel Tower</p>
            <p>Price:</p>
          </div>
        </div>
  
        <div class="item">
          <img src="Petra_Jordan.png" alt="Petra Jordan" style="width:100%;">
          <div class="carousel-caption">
            <h2>Petra</h2>
            <p>One of the Seven Wonders of the world, located in Jordan</p>
            <p>Price:</p>
          </div>
        </div>
      
        <div class="item">
          <img src="Rome.png" alt="Rome" style="width:100%;">
          <div class="carousel-caption">
            <h2>Rome</h2>
            <p>Birth to one of the ancient civilizations around the world</p>
            <p>Price:</p>
          </div>
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<section name="Packages" >
  <h1>Packages</h1>
  <div class="gallery">
    <div class="gallery__group">
      <img class="class__image" src="City_Tours.png" alt="City_Tours">
      <div class="gallery__icon">
        <p>City Tours</p>
      </div>
    </div>
    <div class="gallery__group">
      <img class="class__image" src="Family.png" alt="Family_Vacation">
      <div class="gallery__icon">
        <p>Family Vacation</p>
      </div>
    </div>
    <div class="gallery__group">
      <img class="class__image" src="Cultural Travel.png" alt="Cultural_Tour">
      <div class="gallery__icon">
        <p>Cultural Tour</p>
      </div>
    </div>
    <div class="gallery__group">
      <img class="class__image" src="Wild Life Safari.png" alt="Wildlife Safari">
      <div class="gallery__icon">
        <p>Wildlife Safari</p>
      </div>
    </div>
    <div class="gallery__group">
      <img class="class__image" src="Adventures.png" alt="Adventures">
      <div class="gallery__icon">
        <p>Adventures</p>
      </div>
    </div>
    <div class="gallery__group">
      <img class="class__image" src="Beach Vacation.png" alt="Beach Vacation">
      <div class="gallery__icon">
        <p>Beach Vacation</p>
      </div>
    </div>
  </div>
</section>
<section>
</section>

<footer>
  <div class="footer-container">
  <h3>Quick Links</h3>
  <ul>
  <li><a href="MainPage.php">Home</a></li>
  <li><a href="Destinations_Page.php">Destination</a></li>
  <li><a href="Attraction_Page.php">Tours & Activities</a></li>
  <li><a href="Flight_Page.php">Flights</a></li>
  <li><a href="Packages_Page.php">Packages</a></li>
  </ul>
  </div>
<?php 
if (isset($_SESSION['Email']) && $_SESSION['Email'] == true) {
echo "<p>".$successMessage = $_SESSION['Success']."</p>";
echo "<p>".$firstName = $_SESSION['First Name']."</p>";
echo "<p>".$lastName = $_SESSION['Last Name']."</p>";
echo "<p>".$userName = $_SESSION['UserName']."</p>";
echo "<p>".$email = $_SESSION['Email']."</p>";
echo "<p>".$ID = $_SESSION['ID']."</p>";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $destination = $_POST['destination'];
  $departure = $_POST['departure'];
  $return = $_POST['return'];
  $passengers = $_POST['passengers'];


  echo "<h2>Form Data</h2>";
  echo "<p>Destination: $destination</p>";
  echo "<p>Departure Date: $departure</p>";
  echo "<p>Return Date: $return</p>";
  echo "<p>Passengers: $passengers</p>";
}
?>
</footer>
</body>
</html>