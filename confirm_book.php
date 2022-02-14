<?Php
			include("dbconnect.php");
			echo $_GET['order_email'];
			echo $_GET['userbookid'];
			if(isset($_GET['order_email']))
			{
				$order_email =$_GET['order_email'];
				$order_bid=$_GET['userbookid'];
				if($order_email)
						{
					 mysqli_query($connect,"update book SET status ='1' WHERE usermail = '$order_email' AND bookid='$order_bid'") or die(mysqli_error($connect));
					 echo "<script>alert('Confirm Successfully'); window.location = './viewcustomer.php';</script>";
						}
				else
				{
					echo "There was an error uploading the file, please try again! <br />";
				}
			}


		?>
