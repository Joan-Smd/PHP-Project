<?php
include("dbconnect.php");
if(isset($_POST['update']))
{
	$edit_id=$_POST['edit_id'];
	$edit_name=$_POST['name'];
	$edit_place=$_POST['place'];
	$edit_service=$_POST['service'];
	$edit_gname=$_POST['gname'];
	$edit_gnumber=$_POST['gnumber'];
	$edit_pricead=$_POST['pricead'];
	$edit_pricech=$_POST['pricech'];
	$edit_description=$_POST['description'];
  $edit_img=$_FILES["image1"]['name'];
	$sql="UPDATE addpackage set
  name='$edit_name',place='$edit_place',service='$edit_service',guide='$edit_gname',gnumber='$edit_gnumber',pricead='$edit_pricead',pricech='$edit_pricech',description='$edit_description',image1='$edit_img' where id='$edit_id'";
	$res=mysqli_query($connect,$sql);
  if($sql)
	{
		move_uploaded_file($_FILES["image1"]["tmp_name"],"upload/".$_FILES["image1"]["name"]);
		//$_SESSION['success']="updated.";
		header("location:adminviewpackage.php");
	}
	else
	{
		//$_SESSION['status']="Not updated..";
		echo "Failed";
	}
}
?>
