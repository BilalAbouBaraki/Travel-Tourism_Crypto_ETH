<!DOCTYPE html>
<?php include('Login_page_confirmation.php')?>
<html lang="en-US">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Packages_Page_CSS.css">
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
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
      }
      .package {
        border: 1px solid #ccc;
        margin-bottom: 20px;
        padding: 20px;
      }
      .package h2 {
        margin-top: 0;
      }
      .package img {
        float: left;
        margin-right: 20px;
        width: 250px;
        height: 150px;
        object-fit: cover;
      }
      .package p {
        margin-top: 0;
      }
      .price {
        font-weight: bold;
        font-size: 24px;
        color: #007bff;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <header>
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
    </header>
    <h1 style='color:blue;font-family:Verdana;text-align:center'>Available Packages</h1><br>
    <div class="container">
      <h2>Check out our amazing travel packages:</h2>
    
      <div class="package">
        <h2>Ayia Napa</h2>
        <img src="Pacakages_Page/Ayianapa.jpg" alt="Beach Getaway">
        <p>Escape to a tropical paradise with our Ayia Napa package! Includes flights, hotel accommodations, and daily breakfast. Book now for a relaxing and fun-filled vacation.</p>
		<p>5 Nights,6 Days	 </p>
        <p class="price">$800 </p>
      </div>
    
      <div class="package">
        <h2>Paris</h2>
        <img src="Pacakages_Page/paris.jfif" alt="City Adventure">
        <p>Experience the sights and sounds of a bustling city with our Paris package! Includes flights, hotel accommodations, and a guided tour of the city's top attractions. Book now for an unforgettable trip.</p>
		<p>4 Nights,5 Days</p>
        <p class="price">$1,000</p>
      </div>
    
      <div class="package">
        <h2>Georgia</h2>
        <img src="Pacakages_Page/georgia.jpg" alt="Mountain Retreat">
        <p>Get away from it all with our Mountain Retreat In Georgia package! Includes flights, cabin accommodations, and daily hikes through scenic mountain trails. Book now for a peaceful and rejuvenating vacation.</p>
		<p>4 Nights,5 Days,3 Hiking days</p>
        <p class="price">$920</p>
      </div>
	  
	   <div class="package">
        <h2>Sharm-el-Sheikh</h2>
        <img src="Pacakages_Page/sharm.jpg" alt="City Adventure">
        <p>A family package include accommodations, transportation, meals, and many variable activities to enjoy the amazing Sharm-el-Sheikh. Book now for an unforgettable family trip.</p>
		<p> 5 Nights,6 Days </p>
        <p class="price">$2,200 for 4 people</p>
      </div>
	  
	   <div class="package">
        <h2>Texas</h2>
        <img src="Pacakages_Page/texas.jpg" alt="City Adventure">
        <p>Texas offers plenty of opportunities for couples to enjoy a bit of romance. Where you'll find well-maintained parks and plenty of delicious restaurants and have entirely different experience(Package inluding hotel and transportation).</p>
		<p> 5 Nights,6 Days </p>
        <p class="price">$1500 for 2 people</p>
      </div>
    </div>
    <footer>
  <div class="footer-container">
  <h3>Quick Links</h3>
  <ul>
  <li><a href="MainPage.php">Home</a></li>
  <li><a href="Destination_Page.php">Destination</a></li>
  <li><a href="Attraction_Page.php">Tours & Activities</a></li>
  <li><a href="Flight_Page.php">Flights</a></li>
  <li><a href="Packages_Page.php">Packages</a></li>
  </ul>
  </div>
  </body>
</html>
