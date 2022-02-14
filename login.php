<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
  <div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="login2.php" method="post">
			<h1>Login</h1>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<input type="submit" name="login" value="Login" />
		</form>
	</div>
	<div class="overlay-container">
    <h1 class="new">Adventure Tourism Booking System</h1>
		<div class="overlay">
			<div class="overlay-panel overlay-left">
			</div>
			<div class="overlay-panel overlay-right">
				<h1 class="newuser">New User?</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp"><a href="newuser.php">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>
