<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
  <link rel="stylesheet" href="css/admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Adventure</span>
      </div>
        <ul class="nav-links">
          <li style="background: #081D45;">
            <a href="testing.php">
              <i class='bx bx-box' ></i>
              <span class="links_name">Add Package</span>
            </a>
          </li>
          <li style="background: #081D45;">
            <a href="adminviewpackage.php">
              <i class='bx bx-list-ul' ></i>
              <span class="links_name">View Package</span>
            </a>
          </li>
          <li style="background: #081D45;">
            <a href="viewcustomer.php">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">View Bookings</span>
            </a>
          </li>
          <li style="background: #081D45;">
            <a href="custommsg.php">
              <i class='bx bx-coin-stack' ></i>
              <span class="links_name">Customer Message</span>
            </a>
          </li>
          <li style="background: #081D45;">
            <a href="index.php">
              <i class='bx bx-log-out'></i>
              <span class="links_name">Log out</span>
            </a>
          </li>
        </ul>
    </div>
  <div class="" style="margin-left:270px;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Booking ID</th>
          <th scope="col">Event Id</th>
          <th scope="col">Email</th>
          <th scope="col">Date</th>
          <th scope="col">phone</th>
          <th scope="col">Address</th>
          <th scope="col">Adult</th>
          <th scope="col">Children</th>
          <th scope="col">Status</th>
          </tr>
      </thead>
      <tbody>
        <?php
				$sql="SELECT * FROM `book`;";
				$rs=mysqli_query($connect,$sql);
				if($rs)
				{
					if(mysqli_num_rows($rs))
					{
						while($row=mysqli_fetch_assoc($rs))
						{
              if($row['status'] == 0){
										$status = '<a class="btn btn-primary" href="confirm_book.php?order_email='.$row["usermail"].'&userbookid='.$row["bookid"].'">Confirm Booking</a>';
									}else{
										$status = '<font color="green">Booked</font>';
									}
						?>
        <tr>
          <th scope="row"><div><?php echo $row['bookid']; ?></div></th>
          <td><div><?php echo $row['eventid']; ?></div></td>
          <td><div><?php echo $row['email']; ?></div></td>
          <td><div><?php echo $row['date']; ?></div></td>
          <td><div><?php echo $row['phone']; ?></div></td>
          <td><div><?php echo $row['address']; ?></div></td>
          <td><div><?php echo $row['adult']; ?></div></td>
          <td><div><?php echo $row['children']; ?></div></td>
          <td><div><?php echo $status; ?></div></td>
        <?php
      }}
}
         ?>

      </tbody>
    </table>
  </div>
  </body>
</html>
