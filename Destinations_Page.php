<!DOCTYPE html>
<?php include('Login_page_confirmation.php')?>
<html lang="en-US">
<head>
<script src="https://c0f4f41c-2f55-4863-921b-sdk-docs.github.io/cdn/metamask-sdk.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="DestinationPageStyle.css">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <meta name="keywords" content="ABQ Tours,Travel&Tours.co">
  <meta name="description" content="This is the travel and tourism website with cryptocurrency payment">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style><?php include 'DestinationPageStyle.css'; ?></style>
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
    </div>
   </div>
  </div>
</header>
<section>
<div class="hero_section">
  <div class="Heading_section">
    <h1 style="font-family: cursive;">Destinations</h1>
    <h2 style="font-family: cursive;">Please Choose your Destination</h2>
  </div>
  <div class="form_part">
    <?php
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $destination = $_POST['destination'];
      $departure = $_POST['departure'];
      $return = $_POST['return'];
      $passengers = $_POST['passengers'];
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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

    echo '<input type="search" id="destination" name="destination" autocomplete="off" list="destination_list" placeholder="Choose your Destination" value="' . (isset($destination) ? $destination : '') . '">';
      $sql = "SELECT City FROM countries_destination ";
      $result = mysqli_query($con, $sql);
  
      echo '<datalist id="destination_list">';
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<option values="'.$row['City'].'">'.$row['City'].'</option>';
      }
      echo '</datalist>';
  ?>
      <label for="departure">Departure date:</label>
      <input type="date" id="departure" name="departure" value="<?php echo isset($departure) ? $departure : ''; ?>">

      <label for="return">Return date:</label>
      <input type="date" id="return" name="return" value="<?php echo isset($return) ? $return : ''; ?>">

      <label for="passengers">Passengers:</label>
      <input type="number" id="passengers" name="passengers" min="1" max="10" value="<?php echo isset($passengers) ? $passengers : ''; ?>">

      <div class="btn-group">
        <button type="submit">Search</button>
        <button type="reset">Reset</button>
      </div>
    </form>
  </div>
</div>
</section>
<section>
  <div class="wrapper">
    <h2>Filter Result</h2>
    <form action="/search" method="get">
      <label for="price">Price range:</label><br>
      <label for="price1">0$-50$<input type="checkbox" class="price" min="0" max="50" id="price1"></label><br>
      <label for="price2">50$-100$<input type="checkbox" class="price" min="50" max="100" id="price2"></label><br>
      <label for="price3">100$-150$<input type="checkbox" class="price" min="100" max="150" id="price3"></label><br>
      <label for="price4">150$-200$<input type="checkbox" class="price" min="150" max="200" id="price4"></label><br>
      <label for="price5">200$-250$<input type="checkbox" class="price" min="200" max="250" id="price5"></label><br>
      <label for="price6">+250$<input type="checkbox" class="price" min="250" id="price6"></label><br>
      <br>
      <div class="rating">
        <label for="rating"> Star Rating:</label><br>
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5" title="5 stars">&nbsp;5 stars</label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4" title="4 stars">&nbsp;4 stars</label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3" title="3 stars">&nbsp;3 stars</label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2" title="2 stars">&nbsp;2 stars</label>
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1" title="1 star">&nbsp;1 star</label>
        <br>
      </div>
      <div class="property_type">
        <label for="property_type"> Property Type:</label><br>
      <label for="property_type_1">Hotel&nbsp;<input type="checkbox" class="prop_type"  id="property_type_1"></label><br>
      <label for="property_type_3">Apartment&nbsp;<input type="checkbox" class="prop_type"  id="property_type_2"></label><br>
      <label for="property_type_3">Villa&nbsp;<input type="checkbox" class="prop_type"  id="property_type_3"></label><br>
      <br>
      </div>
      <div class="customer_reviews">
        <label for="customer_reviews"> Customer Reviews:</label><br>
        <label for="Any">Any&nbsp;<input type="checkbox" class="customer_review" min="7" max="7.9"  id="Any"></label><br> 
        <label for="Good">7+Good&nbsp;<input type="checkbox" class="customer_review"  id="Good"></label><br> 
        <label for="8+VeryGood">8+VeryGood&nbsp;<input type="checkbox" class="customer_review"  id="VeryGood"></label><br> 
        <label for="9+Excellent">9+Excellent&nbsp;<input type="checkbox" class="customer_review"  id="Excellent"></label><br>
        <br> 
      </div>
      <div class="meals">
        <label for="meals"> Meal types:</label><br>
        <label for="Breakfast">Breakfast&nbsp;<input type="checkbox" class="meal" id="break_fast"></label><br>
        <label for="Lunch">Lunch&nbsp;<input type="checkbox" class="meal" id="lun_ch"></label><br>
        <label for="all_inclusive">All Inclusive&nbsp;<input type="checkbox" class="meal" id="all_inclusive"></label><br>
      </div>
      <input type="submit" value="Apply filters" placeholder="Filter">
    </form>
  </div>

</section>
<section>
<?php
$servername = "localhost";
$username = "root";
$password = 'bilal';
$dbname = "travel_and_tourism";
$root=3307;
$con = new mysqli($servername, $username, $password, $dbname,$root);


if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $sql = "SELECT * FROM hotels WHERE City = '" . $_POST['destination'] . "'";


  $result = mysqli_query($con, $sql);

  if ($result) {

    $num_rows = mysqli_num_rows($result);


    if ($num_rows == 0) {
      echo "There are no hotels that match your criteria.";
    } else {

      $i = 1; 
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='content' data-value='". $row['City'] ."' name='des".$i."' >
          <h4>" . $row['Property'] . "</h4>
          <h5>City: " . $row['City'] . "</h5>
          <h5>Country: " . $row['Country'] . "</h5>
          <h5>Star Rating:" . $row['Star Rating'] . "</h5>
          <h5>Customers Review: " . $row['Customers Reviews'] . "</h5>
          <h5>Meals: " . $row['Meals'] . "</h5>
          <h5>Price: " . $row['Price'] . "</h5>";
          if (isset($_SESSION['Email']) && $_SESSION['Email'] == true) {
          echo "<a href='Booking_Page.php?property=" . urlencode($row['Property']) . "&city=" . urlencode($row['City']) . "&country=" . urlencode($row['Country']) . "&star=" . urlencode($row['Star Rating']) . "&customer=" . urlencode($row['Customers Reviews']) . "&meals=" . urlencode($row['Meals']) . "&price=" . urlencode($row['Price']) . "&depart=".urlencode($departure)."&arrive=".urlencode($return)."&passengers=".urlencode($passengers)."'>&nbsp Book&nbspNow&nbsp</a>";
          }
        echo"</div>";
        $i++;
      }
    }
  } else {
    // The query was not successful, so we can display an error message
    echo "There was an error retrieving the hotels.";
  }
}
?>
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
</footer>
</body>
</html>