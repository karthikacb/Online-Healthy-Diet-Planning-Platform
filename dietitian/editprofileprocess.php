<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$id=$_SESSION['id'];
include '../connection.php';
$name=$_POST['name'];
$age=$_POST['age'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$clinic=$_POST['clinic'];
$experience=$_POST['experiencedyears'];

$q="update dietitian set name='$name',age='$age',phonenumber='$phonenumber',email='$email',clinic='$clinic',experiencedyears='$experience' where loginid='$id'";
mysqli_query($con,$q);
header('location:dprofile.php');
?>
</body>
</html>
