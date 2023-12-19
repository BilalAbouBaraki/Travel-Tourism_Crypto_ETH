<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Sign Up</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <meta name="keywords" content="ABQTours,Travel&Tours.co">
  <meta name="description" content="This is the travel and tourism website with cryptocurrency payment">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		/* Add styles for the form */
		form {
			border: 3px solid #f1f1f1;
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			background-color: #f9f9f9;
		}
		
		body {
  background-image: url('backg.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}

		input[type=text], input[type=email], input[type=date], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		button {
			background-color: #434bab;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			opacity: 0.8;
		}

		/* Add a cancel button */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Add padding to container elements */
		.container {
			padding: 16px;
		}

		/* Add styles for the heading */
		h1 {
			text-align: center;
			font-size: 36px;
			color: #434bab;
		}

		/* Add styles for the login button */
		.loginbtn {
			background-color: #008CBA;
			color: white;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		.loginbtn:hover {
			opacity: 0.8;
		}

		/* Add styles for the link to the login page */
		.login-link {
			text-align: center;
			margin-top: 20px;
		}

		.login-link a {
			color: #008CBA;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<h1>Sign Up</h1>

<form action="Sign_up_page_confirmation.php" method="post" onsubmit="return PasswordChecker()" name='sign_up_form'>
	<div class="container">
		<label for="firstname"><b>First Name</b></label>
		<input type="text" placeholder="Enter First Name" name="firstname" required>

		<label for="lastname"><b>Last Name</b></label>
		<input type="text" placeholder="Enter Last Name" name="lastname" required>

		<label for="birthdate"><b>Date of Birth</b></label>
		<input type="date" placeholder="Enter Date of Birth" name="birthdate" required>

		<label for="email"><b>Email</b></label>
		<input type="email" placeholder="Enter Email" name="email" required>

		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" required>

		<label for="createpassword"><b>Confirm Password</b></label>
		<input type="password" placeholder="Confirm Password" name="confirmPassword" required>
		<span id="passworderror"></span>

		<button type="submit" >Sign Up</button>

		<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		</label>

		<div class="login-link">
			Already have an account? <a href="Login_Page_php.php">Log in</a>
		</div>
	</div>

	<script>
		function PasswordChecker() {
			var password = document.getElementsByName("password")[0].value;
			var confirmPassword = document.getElementsByName("confirmPassword")[0].value;
			var passwordError = document.getElementById("passworderror");

			if (password !== confirmPassword) {
				passwordError.innerText = "The password doesn't match";
				return false; 
			} else {
				passwordError.innerText = "";
				return true;
			}
		}

	</script>
</form>
		</body>
		</html>
