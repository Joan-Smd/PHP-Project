<?php
session_start();
include("dbconnect.php");
$uid=$_SESSION['id'];
echo $uid;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
     background-image: url(https://i1.wp.com/safezonecounselling.ca/wp-content/uploads/2019/06/mild-background-10.jpg?ssl=1);
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
			color: green;
			font-size: 70px;
			font-weight: bold;
			width: 900px;
			text-align: center;
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
				<li><a href="web.php">Home</a></li>
					<li><a href="userview.php"active">Adventure Package</a></li>
					<li><a href="userbooking.php">My Bookings</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
  <div>
    <h1>Adventure Event Packages</h1>
  </div>
  <div class="container">
    <?php
           $sql="SELECT * from addpackage;";
           $qry=mysqli_query($connect,$sql);
           if($qry)
           {
               if(mysqli_num_rows($qry))
               {
                   while($row=mysqli_fetch_assoc($qry))
                   {
                       ?>
                       <br />
  <div class="row">

    <div class="col-sm-4">
      <img src="image/<?php echo $row['image1']; ?>" width="300" height="200">
      </div>
    <div class="col-sm-3">
      <h3><?php echo $row['name']; ?></h3>
      <div>Place :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['place']; ?></div>
      <div>Guide Name :&nbsp&nbsp&nbsp<?php echo $row['guide']; ?></div>
			<div>Guide Mobile :&nbsp&nbsp&nbsp<?php echo $row['gnumber']; ?></div>
      <div>Services:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['service']; ?></div>
        <div>Price for Adult :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['pricead']; ?></div>
				<div>Price for Children :&nbsp&nbsp&nbsp<?php echo $row['pricech']; ?></div>

    </div>
    <div class="col-sm-5">

      <div style="margin-top: 20px; margin-bottom: 10px;">Description</div>
      <div> <?php echo $row['description']; ?></div><br />
<a class="btn btn-primary" href="book.php?eid=<?php echo $row['id']; ?>;">Book</a>
<hr />
    </div>
    </div>
    <br><br>
    <?php
}
}
}
     ?>
</div>
</body>
</html>
