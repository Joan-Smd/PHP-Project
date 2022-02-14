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
 </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Adventure</span>
      </div>
        <ul class="nav-links">
          <li style="background: #081D45;">
            <a href="addpackage.php">
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
              <i class='bx bx-coin-stack' ></i>
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
  <form class="" action="aupdate.php" method="post" enctype="multipart/form-data">
    <div class="container">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Edit Package</b></h2></center></legend><br>
<?php
		if(isset($_POST['edit_btn']))
		{
			$id=$_POST['edit_id'];
			$sql="SELECT * FROM addpackage where id='$id'";
			$res=mysqli_query($connect,$sql);
			$row=mysqli_fetch_assoc($res);
			}
			?>
<!-- Text input-->

<div class="form-group">
  <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
<label class="col-md-4 control-label">Event Name</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="name" value="<?php echo $row['name']; ?>" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Place</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="place"  value="<?php echo $row['place']; ?>" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Services</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="service"  value="<?php echo $row['service']; ?>" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Guide Name</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="gname"  value="<?php echo $row['guide']; ?>" class="form-control"  type="text">
</div>
</div>
</div>



<div class="form-group">
<label class="col-md-4 control-label" >Guide Number</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="gnumber"  value="<?php echo $row['gnumber']; ?>" class="form-control"  type="text">
</div>
</div>
</div>
<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Event Image 1</label>
<img src="image/<?php echo $row['image1'];?>" width="70" height="50">
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="image1" value=""  class="form-control"  type="file">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >Price for Adult</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="pricead"  class="form-control"  value="<?php echo $row['pricead']; ?>"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >Price for Children</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="pricech"  value="<?php echo $row['pricech']; ?>" class="form-control"  type="text">
</div>
</div>
</div>

   <div class="form-group">
<label class="col-md-4 control-label">Description</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <textarea name="description" rows="4" cols="80" class="form-control"><?php echo $row['description']; ?></textarea>

</div>
</div>
</div>


<!-- Select Basic -->


<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="update" value="Update Package">
</div>
</div>

</fieldset>

</div>
</div>

  </form>

</div>


  </body>
</html>
