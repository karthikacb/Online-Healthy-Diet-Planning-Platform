<?php
include '../connection.php';
session_start();
$id = $_SESSION['id'];
$file=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/".$file);
$dwm=$_POST['dwm'];
$did=$_GET['deta'];
 $query="SELECT * FROM `plandetails` where logid='$did'";
 $res=mysqli_query($con,$query);
 $data=mysqli_fetch_assoc($res);
 $logid=$data['detailid'];
$sql1="insert into postsolution(image,dwm,status,loginid,detailid) values('$file','$dwm','Posted','$id','$logid')";
$result = mysqli_query($con, $sql1);
mysqli_query($con,"UPDATE `plandetails` SET `status`='Posted' where detailid='$logid'");
echo "<script> alert('Successfully Posted the solution'); window.location.href='postsolution.php';</script>";
?>