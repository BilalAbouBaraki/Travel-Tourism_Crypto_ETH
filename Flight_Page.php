<!DOCTYPE html>
<?php include('Login_page_confirmation.php')?>
<html lang="en-US">
<head>
<script src="https://c0f4f41c-2f55-4863-921b-sdk-docs.github.io/cdn/metamask-sdk.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="FlightPageStyle.css">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <meta name="keywords" content="ABQ Tours,Travel&Tours.co">
  <meta name="description" content="This is the travel and tourism website with cryptocurrency payment">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style><?php include 'FlightPageStyle.css'; ?></style>
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
        <a href="Flights_Page.php">Flights</a>
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
    </div>
   </div>
  </div>
</header>
<section name="hero_section">
  <div class="hero_section">
    <div class="Heading_section">
      <h1 style="font-family: cursive;">Flights</h1>
      <h2 style="font-family: cursive;">Search For Your Flight</h2>
    </div>
    <div class="form_part">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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

echo '<input type="search" id="origin" name="origin" autocomplete="off" list="origin_list" placeholder="Choose your Origin">';
$sql = "SELECT City_Origin FROM countries_origin";
$result = mysqli_query($con, $sql);

echo '<datalist id="origin_list">';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<option values="'.$row['City_Origin'].'">'.$row['City_Origin'].'</option>';
}
echo '</datalist>';

echo '<input type="search" id="destination" name="destination" autocomplete="off" list="destination_list" placeholder="Choose your Destination">';
  $sql = "SELECT City FROM `countries_destination`";
  $result = mysqli_query($con, $sql);

  echo '<datalist id="destination_list">';
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<option values="'.$row['City'].'">'.$row['City'].'</option>';
  }
  echo '</datalist>';

?> 
  <div class="btn-group">
    <button type="submit">Search</button>
    <button type="reset">Reset</button
   </form>
</div>
</div>
</section>
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $sql = "SELECT * FROM flights WHERE Origin='". $_POST['origin'] ."' AND Destination='". $_POST['destination'] ."'";


  $result = mysqli_query($con, $sql);

  if ($result) {

    $num_rows = mysqli_num_rows($result);


    if ($num_rows == 0) {
      echo "There are no flights.";
    } else {

      $i = 1; 
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='content' data-value='". $row['ID'] ."'  >
        <div class='destination'>
        <h4 class='arr'>Origin:<span> " . $row['Origin'] . "</span></h4>
        <h4 class='arr'>Origin Country:<span> " . $row['Origin_Country'] . "</span></h4>
        <h4 class='des'>Departure Time:<span> " . $row['Departure_Time'] . "</span></h4>
        </div>
        <h4 >-------------------------------------------------------------></h3>
        <div class='origin'>
        <h4 class='des'>Destination:<span>" . $row['Destination'] . "</span></h4>
        <h4 class='des'>Destination Country:<span>" . $row['Destination_Country'] . "</span></h4>
        <h4 class='arr'>Arrival Time:<span>" . $row['Arrival_Time'] . "</span></h4>
        </div>;
        </div>";
        $i++;
      }
    }
  } else {
    
    echo "There was an error retrieving the flights.";
  }
}
?>
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
</footer>
</body>
