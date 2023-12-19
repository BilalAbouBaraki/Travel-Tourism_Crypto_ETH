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
$errorMessage = "";
if (isset($_POST['but_submit'])) {

  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if ($email != "" && $password != "") {

    $sql_query = "SELECT `First Name`, `Last Name`, `Email`, `Password` FROM `clients` WHERE `Email`='" . $email . "'";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_assoc($result);
    $storepassword = $row['Password'];
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