<?php
include '../connection.php';
session_start();
$id = $_SESSION['id'];
$did=$_GET['deta'];
 $query="SELECT * FROM `plandetails` where logid='$did'";
 $res=mysqli_query($con,$query);
 $data=mysqli_fetch_assoc($res);
 $logid=$data['detailid'];
 $charge=$_POST['charge'];
 $sql1="insert into `tbl_payment` (amount,loginid,detailid,status) values('$charge','$id','$logid','unpaid')";
 $result = mysqli_query($con, $sql1);
// $sql1="insert into postsolution(image,dwm,status,loginid,detailid) values('$file','$dwm','Updated','$id','$logid')";
// $result = mysqli_query($con, $sql1);
mysqli_query($con,"UPDATE `plandetails` SET `status`='unpaid' , charge='$charge' where detailid='$logid'");
echo "<script> alert('Successfully Posted the solution'); window.location.href='bill.php';</script>";
?>