	<?php
session_start();
include('dbconnect.php');
if(isset($_POST['login']))
{
	$uemail=$_POST['email'];
	$upassword=$_POST['password'];
	$sel1="SELECT * FROM register WHERE email='$uemail' && password='$upassword'";
	$table1=mysqli_query($connect,$sel1);
	$row1=mysqli_num_rows($table1);
	if($row1==1)
	{
		$_SESSION['id']=$uemail;
    header("location:web.php");
	}
	else
	{
		echo "<script>alert('Invalid Username or Password'); window.location = './login.php';</script>";
	}

}
?>
