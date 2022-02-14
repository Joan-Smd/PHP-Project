<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
  <link rel="stylesheet" href="css/admin.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style media="screen">
   #fnames
  {
    font-family: Arial, Helvetica, sans-serif;
  }
  input[type="file"]
  {
    border-radius: 50px;
    outline: none;
  }
  input[type="file"]:focus
  {
    border-color: dodgerblue;
    box-shadow: 0 0 8px 0 dodgerblue;
  }
  input[type="text"]
		{
			width: 100%;
			border:1px solid #aaa;
			border-radius: 4px;
			outline: none;
			padding: 3px 3px;
			box-sizing: border-box;

		}
		input[type="text"]:focus
		{
			border-color: dodgerblue;
			box-shadow: 0 0 8px 0 dodgerblue;
		}
		input[type="number"]
		{
			width: 20%;
			border:1px solid #aaa;
			border-radius: 4px;
			outline: none;
			padding: 3px 3px;
			box-sizing: border-box;

		}
		input[type="number"]:focus
		{
			border-color: dodgerblue;
			box-shadow: 0 0 8px 0 dodgerblue;
		}
		textarea
		{
			width: 100%;
			border:1px solid #aaa;
			border-radius: 4px;
			outline: none;
			padding: 3px 3px;
			box-sizing: border-box;

		}
		textarea:focus
		{
			border-color: dodgerblue;
			box-shadow: 0 0 8px 0 dodgerblue;
		}
		#fselect
		{
			border:1px solid #aaa;
			border-radius: 4px;
			outline: none;
			padding: 3px 0;
			box-sizing: border-box;
		}
		#fselect:focus
		{
			border-color: dodgerblue;
			box-shadow: 0 0 8px 0 dodgerblue;
		}
		#fnames
		{
			font-family: Arial, Helvetica, sans-serif;
		}
		input[type="file"]
		{
			border-radius: 50px;
			outline: none;
		}
		input[type="file"]:focus
		{
			border-color: dodgerblue;
			box-shadow: 0 0 8px 0 dodgerblue;
		}
		input[type="submit"]
		{
			width: 80px;
			border:1px solid #aaa;
			border-radius: 4px;
			outline: none;
			padding: 3px 3px;
			box-sizing: border-box;
			background: #0a3b57;
			color:white;
		}
   </style>
 </head>
  <body>
    <?php include("navbar.php");
	?>
<div class="" style="margin-left:270px;>
  <form action="kannan.php" method="post">
<fieldset>

  <legend><center><h2><b>Add Package</b></h2></center></legend><br>
      <table class="vehictab" align="center" cellpadding="10" >
        <tr><td>
				<label id="fnames">Event Name</label><br></td>
				<td>
				<input type="text" name="name" value="" required>
				</td></tr>

				<tr><td>
				<label id="fnames">Place</label><br></td>
				<td>
				<input type="text" name="place" value="" required>
				</td></tr>
        <tr><td>
				<label id="fnames">Services</label><br></td>
				<td>
				<input type="text" name="service" value="" required>
				</td></tr>
        <tr><td>
				<label id="fnames">Guide Name</label><br></td>
				<td>
				<input type="text" name="gname" value="" required>
				</td></tr>
        <tr><td>
				<label id="fnames">Event Image1</label><br></td>
				<td>
				<input type="file" name="image1" value="" required>
				</td></tr>
				<tr><td>
				<label id="fnames">Price</label></td>
				<td>
				<input type="text" name="price" value="" required>
				</td></tr>
				<tr><td>
				<label id="fnames">Description</label></td>
				<td>
				<textarea name="description" rows="4" cols="80" class="form-control"></textarea>
				</td></tr>

        <tr><td><input type="submit" name="submit" value="Register"/></td></tr>
      </table>
      </fieldset>

  </form>
</div>
</body>
</html>
