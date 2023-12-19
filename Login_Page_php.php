<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <meta name="keywords" content="ABQ Tours,Travel&Tours.co">
  <meta name="description" content="This is the travel and tourism website with cryptocurrency payment">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
      }
      h2 {
        text-align: center;
      }
      form {
        background-color: #ffffff;
        border: 1px solid #cccccc;
        width: 300px;
        margin: 0 auto;
        padding: 20px;
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type="text"], input[type="password"] {
        width: 100%;
        padding: 9px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 3px;
      }
      input[type="submit"] {
        background-color: #0000FF;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
        justify-content: flex;
        align-items: center;
      }
      .error {
        background:grey;
        color: #0c0101;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
}
  </style>
</head>
<body>
<!--The PHP code-->
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "travel_and_tourism";
$root=3307;
$con = new mysqli($servername, $username, $password, $dbname,$root);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$errorMessage="";
if(isset($_POST['but_submit'])){

  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  error_reporting(E_ERROR | E_PARSE);

  if ($email != "" && $password != ""){

    $sql_query = "SELECT `First Name`, `Last Name`, `Email`, `Password` FROM `clients` WHERE `Email`='".$email."'";
      $result = mysqli_query($con,$sql_query);
      $row = mysqli_fetch_assoc($result);
      $storepassword=$row['Password'];
      $count = $row['Email'];

      if ($row !== null) {
        if ($password == $storepassword) {
          $_SESSION['Success'] = "You Successfully Logged In";
          $_SESSION['First Name'] = $row['First Name'];
          $_SESSION['Last Name'] = $row['Last Name'];
          $_SESSION['UserName'] = $row['First Name'] . " " . $row['Last Name'];
          $_SESSION['Email'] = $row['Email'];
          $_SESSION['ID'] = $row['ID'];
          header('Location: MainPage.php');
          exit();
        } else {
          $errorMessage = "Invalid password";
        }
      } else {
        $errorMessage = "Email does not exist";
      }
    } else {
      $errorMessage = "Please enter both email and password";
    }
  }
?>
<!--The Form-->
  <h2>Login</h2>
  <form name='Login_form' method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  onsubmit="return Login_Checker()" >
  <?php #include("Login_page_confirmation.php") ?>

  <label for="email">Email:</label>
  <input type="text" id="email" name="email" >
  <span id="emailerror"></span>
  <span></span>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" >
  <span id="passworderror"></span><br>
  <?php echo "<span>".$errorMessage."</span><br>";?>
  <input type="submit" value="Login" name="but_submit" >
 </form>
  <script>
    function Login_Checker() {
      var email = document.getElementsByName('email')[0].value;
      var password = document.getElementsByName('password')[0].value;
      var emailError = document.getElementById('emailerror');
      var passwordError = document.getElementById('passworderror');

      if (email == '' && password!='') {
        emailError.innerText = "Type the Email\n";
        passwordError.innerText="";
        return false;
      }
      else if (password === '' && email!='') {
        passwordError.innerText = "Type the Password\n";
        emailError.innerText="";
        return false;
      }
      else if (email == '' && password == '') {
        emailError.innerText = "Type the Email\n";
        passwordError.innerText = "Type the Password\n";
        return false;
      }
      else {
        emailError.innerText = "";
        passwordError.innerText = "";
        return true;
      }
    }
  </script>
</body>
</html>
