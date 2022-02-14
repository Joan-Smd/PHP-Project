<?php
  include("dbconnect.php");
  if(isset($_POST['register']))
{
    $name=$_POST['name'];
  	$email=$_POST['email'];
    $password=$_POST['password'];
	$cpassword=$_POST['password2'];
	 if($password==$cpassword)

 {
   $sel="SELECT * FROM register WHERE email='$email'";
		$table=mysqli_query($connect,$sel);
		$row=mysqli_num_rows($table);
		if($row==0)
		{
			$ins="INSERT INTO register (name,email,password) VALUES('$name','$email','$password')";
			if(mysqli_query($connect,$ins))
			{
				header("location:web.php");
			}
			else
			{
				echo "invalid connection";
			}
		}
		else
		{
			echo "Username name Already exist";
		}
     }
     else
     {
     	echo "invalid password";
     }
}
 ?>
