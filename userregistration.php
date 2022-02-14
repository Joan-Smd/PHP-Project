
<!DOCTYPE html>
<html>
<head>
	<title>Tourism</title>
	<link rel="stylesheet" type="text/css" href="css/mystyl.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style type="text/css">
body {
	background-image: url(5.jpg);
	}
.heading2 {
	color: #8b008b;
	text-shadow: 1px -1px 4px red;
	font-size: 40px;
}
#container {
	text-align: right;
	float: left;
	width: 100%;
}
label {
	color:  darkblue;
	text-shadow: 1px -1px 2px red;
	font-weight: bold;
	margin: 60px;
	font-size: 25px;
}
#already {
	color : lightgreen;
	margin: 20px;
}
input {
	background-color: powderblue;
margin-right: 60px;
border: 0px;
border-radius: 40px;
padding: 8px;
}
input:hover {
	background-color: pink;
	border-radius: 40px;
	border: 1px solid red;
}
.submit {
	margin-right: -25px;

}
	</style>
</head>
<body >

<div id="container">

	<div id="con1">
		<h4 class="heading2" align="right">New Registration</h4>
		<form class="form1" method="post">

				<label id="fnames">Name</label>
				<input type="text" name="uname" value=""><br><br>
				<label id="fnames">Phone no</label>
				<input type="tel" name="phno" value=""><br><br>

				<label id="fnames">Email Id</label>
				<input type="email" name="uemail" value="" id="long"><br><br>

				<label id="fnames">Password</label>
				<input type="text" name="upsw" value=""><br><br>

				<label id="fnames">Confirm Password</label>
				<input type="text" name="ucpsw" value=""><br><br>
				<div class="submit">
				<input style="color: red;font-size: 20px;border: 5px ridge indianred;padding: 8px; border-radius: 35px;background-color: grey;" type="submit" name="submit" value="Submit"/>&nbsp
				<input style="color: red;font-size: 20px;border: 5px ridge indianred;padding: 8px; border-radius: 35px;background-color: grey;" type="reset" name="reset" value="Reset"/><br><br>
			</div>
				<label id="already">Already have an account?  <a href="#" style="font-weight:700;font-size:25px;color:#dc143c;text-decoration:none">Login</a>
						</form>
	</div>
</div>
</body>
</html>
