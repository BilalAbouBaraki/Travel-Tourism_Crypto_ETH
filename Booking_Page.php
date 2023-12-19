<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Booking_Page_CSS.css">
      <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <meta name="keywords" content="ABQ Tours,Travel&Tours.co">
  <meta name="description" content="This is the travel and tourism website with cryptocurrency payment">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>

<body>
<?php 
include('Login_page_confirmation.php');

$property = $_GET['property'];
$city = $_GET['city'];
$country = $_GET['country'];
$star = $_GET['star'];
$customer = $_GET['customer'];
$meals = $_GET['meals'];
$price = $_GET['price'];
$departure = $_GET['depart'];
$arrival= $_GET['arrive'];
$passengers = $_GET['passengers'];

$_SESSION['property'] = $property;
$_SESSION['city'] = $city;
$_SESSION['country'] = $country;
$_SESSION['star'] = $star;
$_SESSION['customer'] = $customer;
$_SESSION['meals'] = $meals;
$_SESSION['price'] = $price;
$_SESSION['depart'] = $departure;
$_SESSION['arrive'] = $arrival;
$_SESSION['passengers'] = $passengers;


$property=$_SESSION['property'];
$city=$_SESSION['city'];
$country= $_SESSION['country'];
$star=$_SESSION['star'];
$customer=$_SESSION['customer'];
$meals=$_SESSION['meals'];
$price=$_SESSION['price'];
$departure=$_SESSION['depart'];
$arrival=$_SESSION['arrive'];
$passengers=$_SESSION['passengers'];
$total_price=$price +($passengers*0.02);


echo "
<div class='payment-tab-container'>
  <div class='payment-tab'>
    <p class='property'>Stay: " . $property . "</p>
    <p class='city'>City: " . $city . "</p>
    <p class='country'>Country: " . $country . "</p>
    <p class='star'>Star Rating: " . $star . "</p>
    <p class='customer'>Customer Reviews: " . $customer . "</p>
    <p class='meals'>Meals: " . $meals . "</p>
    <p class='price' id='price'>Price: " . $price . "</p>
    <p class='nb_passenger' id='passenger'>Passengers Number: " . $passengers . "</p>
    <p class='departure' id='departure'>Departure Date: " . $departure . "</p>
    <p class='arrival' id='arrival'>Arrival Date: " . $arrival . "</p>
    <p class='totalprice' id='totalprice'>Total price: " . $total_price . "</p>
    <form method='post' action=''>
    <input type='hidden' id='fnameid' name='fnameid' value='".$_SESSION['First Name']."'>
    <input type='hidden' id='lnameid' name='lnameid' value='".$_SESSION['Last Name']."'>
    <input type='hidden' id='emailid' name='emailid' value='".$_SESSION['Email']."'>
    <input type='hidden' id='propertyid' name='propertyid' value='".$property."'>
    <input type='hidden' id='destinationid' name='destinationid' value='".$city."'>
    <input type='hidden' id='countryid' name='countryid' value='".$country."'>
    <input type='hidden' id='departid' name='departid' value='".$departure."'>
    <input type='hidden' id='arriveid' name='arriveid' value='".$arrival."'>
    <input type='hidden' id='passengerid' name='passengerid' value='".$passengers."'>
    <input type='hidden' id='mealsid' name='mealssid' value='".$meals."'>
    <input type='hidden' id='priceid' name='priceid' value='".$price."'>
    <input type='hidden' id='totalpriceid' name='totalpriceid' value='".$total_price."'>
    <input class='btn btn-primary' type='submit' value='Register' title='Register Using Ethereum' id='Confirm_Button' disabled>
    <a href='Destinations_Page.php' class='btn btn-secondary' type='button' title='Go Back to Destination'>Back</a>
    </form>
    <button id='ethereum_button' class='eth_enable' required>Enable Ethereum</button>
    <button id='send_ethereum'  class='eth_send' required>Send Ethereum</button>
  </div>

</div>"
?>
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

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $fname = $_POST['fnameid'];
  $lname = $_POST['lnameid'];
  $email = $_POST['emailid'];
  $property = $_POST['propertyid'];
  $city = $_POST['destinationid'];
  $country = $_POST['countryid'];
  $departure = $_POST['departid'];
  $arrival = $_POST['arriveid'];
  $passengers = $_POST['passengerid'];
  $meals = $_POST['mealssid'];
  $price = $_POST['priceid'];


  $sql = "INSERT INTO registration(`First Name`, `Last Name`, `Email`, `Property`, `Destination`, `Country`, `Departure_Date`, `Arrival_Date`, `Number_of_Passangers`, `Meals`, `Price`,`Total Price`) VALUES ('".$fname."','".$lname."','".$email."','".$property."','".$city."','".$country."','".$departure."','".$arrival."','".$passengers."','".$meals."','".$price."','".$total_price."') ";

  if(mysqli_query($con, $sql)) {
    echo "Record created successfully";
  } else {
    echo "Error creating record: " . mysqli_error($con);
  }

  header('Location: MainPage.php');
  exit;
}

?>
<script src=
    "https://smtpjs.com/v3/smtp.js"></script>
<script>
const eth_price = document.getElementById('totalpriceid').value;
const multipliedNumber = eth_price * Math.pow(10,18);
const hexNumber = '0x'+Math.floor(multipliedNumber).toString(16);
  let account;
  if (typeof window.ethereum !== 'undefined') {
  console.log('MetaMask is installed!');

  document.getElementById('ethereum_button').addEventListener('click', event => {
    let button = event.target;
    ethereum.request({ method: 'eth_requestAccounts' }).then(accounts => {
      account = accounts[0];
      console.log(account);
      button.textContent = hexNumber;
      ethereum.request({ method: 'eth_getBalance', params: [account, 'latest'] }).then(result => {
        console.log(result);
        let wei = parseInt(result, 16); 
        let balance = wei / (10**18);
        console.log(balance + " ETH");
      });
    });
  });

  document.getElementById('send_ethereum').addEventListener('click', event => {
    let transactionParam = {
      to: '0x977B36Ca0cA4D7fC32d86491f98a5F3AD43aE7a2',
      from: account,
      value: hexNumber
    };
    ethereum.request({ method: 'eth_sendTransaction', params: [transactionParam] }).then(txhash => {
      console.log(txhash);
      checkTransactionConfirmation(txhash).then(r => alert(r));
    });
  });

  function checkTransactionConfirmation(txhash) {
    let checkTransactionLoop = () => {
      return ethereum.request({ method: 'eth_getTransactionReceipt', params: [txhash] }).then(r => {
        if (r != null) {
          return document.getElementById("Confirm_Button").disabled = false,"confirmed";
        }
        else return checkTransactionLoop();
      });
    };
    return checkTransactionLoop();
  }
}
else
{
      console.log('MetaMask is not available')
      window.alert('MetaMask is not available \n Please install metamask on your browser')
}
</script>

</body>
</html>
