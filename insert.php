<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "adventure");

		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO contact VALUES ('$name','$email','$message')";

		if(mysqli_query($conn, $sql)){
			echo "<h1>Thank You For Your Message</h1>";

			echo nl2br("\n$name\n  $email\n $message");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
