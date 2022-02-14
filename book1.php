<?php
session_start();
include("dbconnect.php");
$uid=$_SESSION['id'];
echo $uid;
$eid=$_POST['eid'];
echo $eid;
?>
