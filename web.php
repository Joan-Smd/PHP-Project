<?php
session_start();
include("dbconnect.php");
$uid=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
		*
		{
			padding: 0;
			margin: 0;
		}
		html
		{
			min-height: 100%;
		}
		body
		{
			background-image: url(https://imgcld.yatra.com/ytimages/image/upload/t_ann_seo_banner_tab/v1530015312/AdvNation/ANN_TRP156/adventure-trips-in-india_1440486703_aNbqdJ.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			width: 100%;
		}
		.navbar
		{
			height: 80px;
			width: 100%;
			background: rgba(0,0,0,0.4);
		}
		.navbar ul
		{
			float: right;
			margin-right: 20px;
		}
		.navbar ul li
		{
			list-style: none;
			margin: 0 8px;
			display: inline-block;
			line-height: 80px;
		}
		.navbar ul li a
		{
			text-decoration: none;
			color: white;
			font-size: 15px;
			padding: 6px 13px;
			font-family: 'Roboto',sans-serif;
			transition: .4s;
		}
		.navbar ul li a.active,
		.navbar ul li a:hover
		{
			background: red;
			border-radius: 6px;
		}
		.wrapper .center
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-family: sans-serif;
			user-select: none;
		}
		.center h1
		{
			color: yellow;
			font-size: 70px;
			font-weight: bold;
			width: 900px;
			text-align: center;
			margin-top: 250px;
		}
		.center .button
		{
			margin: 35px 280px;
			text-align: center;

		}
		.button button
		{
			height: 50px;
			width: 150px;
			font-size: 18px;
			font-weight: bold;
			color: #ffb3b3;
			background: red;
			border: 1px solid #cc0000;
			outline: none;
			cursor: pointer;
			border-radius: 25px;
		}
		.button button:hover
		{
			background: #cc0000;
		}
		.button button a
		{
			text-decoration: none;
			color: #ffffff;
		}

	</style>
</head>
<body>
	<div class="wrapper">
		<nav class="navbar">
			<ul>
				<li><a href="#">Home</a></li>
					<li><a href="userview.php"active">Adventure Package</a></li>
					<li><a href="userbooking.php">My Bookings</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<div class="center">
			<h1>Adventure Tourism Booking System</h1>
		</div>
	</div>
</body>
</html>
