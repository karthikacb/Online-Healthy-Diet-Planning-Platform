<?php
include('../connection.php');
session_start();
//error_reporting(0);
$uid = $_SESSION['id'];
// $name = $_GET['name'];
$amount = $_GET['amount'];
$artist = $_GET['ar'];
$sql="UPDATE `tbl_payment` SET status='Paid' WHERE  `id`= '$uid'";
$query_run=mysqli_query($con,$sql);
   

$qq = mysqli_query($con,"UPDATE `plandetails` SET status='Updated' WHERE  detailid = '$artist' ");
$query_run=mysqli_query($con,$qq);
 

echo "<script>window.location='successfull.php?did=$artist';</script>";

?>