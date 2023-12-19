<!DOCTYPE html>
<?php include('Login_page_php.php')?>
<html lang="en-US">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="Attraction_Page_CSS.css">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <meta name="keywords" content="ABQ Tours,Travel&Tours.co">
  <meta name="description" content="This is the travel and tourism website with cryptocurrency payment">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATTRACTIONS</title>

    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
    
      h1 {
        margin-top: 0;
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
      /* Styles for tabs */
      ul.tabs {
        list-style: none;
        margin: 0;
        padding: 0;
      }
      ul.tabs li {
        display: inline-block;
        margin-right: 10px;
        padding: 10px;
        background-color: #f1f1f1;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        cursor: pointer;
      }
      ul.tabs li.active {
        background-color: #007bff;
        color: #fff;
      }
      div.tab-content {
        display: none;
        border: 1px solid #ccc;
        padding: 20px;
        border-top: none;
      }
      div.tab-content.active {
        display: block;
      }
	  .buttons {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.btn {
  position: relative;
  display: inline-block;
  width: 200px;
  height: 200px;
  margin: 20px;
  overflow: hidden;
}

.btn img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease-out;
}

.btn:hover img {
  transform: scale(1.2);
}

.btn:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s ease-out;
}

.btn:hover:before {
  opacity: 1;
}

.btn-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  font-size: 24px;
  font-weight: bold;
  text-shadow: 2px 2px #000;
  opacity: 1;
  transition: opacity 0.3s ease-out;
}

.btn:hover .btn-text {
  opacity: 0.8;
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
    <div class="container">
      <ul class="tabs">
        <li class="tab-header active" data-tab="tab1">Middle East</li>
        <li class="tab-header" data-tab="tab2">Europe</li>
        <li class="tab-header" data-tab="tab3">Asia</li>
        <li class="tab-header" data-tab="tab4">America</li>
        <li class="tab-header" data-tab="tab5">Africa</li>
      </ul>
      <div class="tab-content active" data-tab="tab1">
        <h2></h2>
<div class="buttons">
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/dubai.jpg" alt="Button 1">
    <span class="btn-text">DUBAI</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/abudhabi.jpg" alt="Button 2">
    <span class="btn-text">ABU DHABI</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/beirut.jpg" alt="Button 3">
    <span class="btn-text">BEIRUT</span>
  </a>
  
</div>
<div class="buttons">
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/amman.jpg" alt="Button 1">
    <span class="btn-text">AMMAN</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/riyadh.jfif" alt="Button 2">
    <span class="btn-text">RIYADH</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/doha.jpg" alt="Button 3">
    <span class="btn-text">DOHA</span>
  </a>
  
</div> 	 	 	 	
      

</div>
<script src="JSS.js"></script>

<div class="tab-content" data-tab="tab2">
<div class="buttons">
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/paris.jfif" alt="Button 1">
    <span class="btn-text">PARIS</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/istanbul.jpg" alt="Button 2">
    <span class="btn-text">ISTANBUL</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/amsterdam.jfif" alt="Button 3">
    <span class="btn-text">AMSTERDAM</span>
  </a>
  
</div>

<div class="buttons">
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/rome.jfif" alt="Button 1">
    <span class="btn-text">ROME</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/berlin.jfif" alt="Button 2">
    <span class="btn-text">BERLIN</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/barcelona.jpg" alt="Button 3">
    <span class="btn-text">BARCELONA</span>
  </a>
  
</div>
</div>




<div class="tab-content" data-tab="tab3">
<div class="buttons">
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/kualalumpur.jpg" alt="Button 1">
    <span class="btn-text">KUALALUMPUR</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/tokyo.jpg" alt="Button 2">
    <span class="btn-text">TOKYO</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/singapore.jpg" alt="Button 3">
    <span class="btn-text">SINGAPORE</span>
  </a>
  
</div>

</div>


<div class="tab-content" data-tab="tab4">
<div class="buttons">
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/newyork.jpg" alt="Button 1">
    <span class="btn-text">NEW YORK</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/lasvegas.jpg" alt="Button 2">
    <span class="btn-text">LAS VEGAS</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/mexico.jpg" alt="Button 3">
    <span class="btn-text">MEXICO CITY</span>
  </a>
  
</div>

<div class="buttons">
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/riode.jpg" alt="Button 1">
    <span class="btn-text">RIO DE JANEIRO</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/saopaulo.jpg" alt="Button 2">
    <span class="btn-text">São Paulo</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/panama.jpg" alt="Button 3">
    <span class="btn-text">PANAMA CITY</span>
  </a>
  
</div>
</div>


<div class="tab-content" data-tab="tab5">
<div class="buttons">
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/cairo.jpg" alt="Button 1">
    <span class="btn-text">CAIRO</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/marakesh.jpeg" alt="Button 2">
    <span class="btn-text">MARRAKESH</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/nairobi.jpg" alt="Button 3">
    <span class="btn-text">NAIROBI</span>
  </a>
  
</div>

<div class="buttons">
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/sharme.jpg" alt="Button 1">
    <span class="btn-text">SHARM EL SHEIKH</span>
  </a>
  <a href="#" class="btn">
    <img src="Attractions_page/attractions/casa.jpeg" alt="Button 2">
    <span class="btn-text">CASABLANCA</span>
  </a>

</div>
</div>
</div>
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