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
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody>
        <?php
				$sql="SELECT * FROM `contact`;";
				$rs=mysqli_query($connect,$sql);
				if($rs)
				{
					if(mysqli_num_rows($rs))
					{
						while($row=mysqli_fetch_assoc($rs))
						{

						?>
        <tr>
          <td><div><?php echo $row['name']; ?></div></td>
          <td><div><?php echo $row['email']; ?></div></td>
          <td><div><?php echo $row['message']; ?></div></td>
          <?php
      }}
}
         ?>

      </tbody>
    </table>
  </div>
  </body>
</html>
