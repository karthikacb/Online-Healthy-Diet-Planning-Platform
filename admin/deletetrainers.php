<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
  session_start();
  $id=$_GET['id'];
  include '../connection.php';
  $sq = "UPDATE `trainer` SET status=0 WHERE loginid = '$id'";
  mysqli_query($con, $sq);
  $sql = "UPDATE `login` SET status=0 WHERE loginid = '$id'";
  mysqli_query($con, $sql);
  echo "<script> alert('Trainer removed'); window.location.href='viewtrainers.php';</script>";
?>
</body>
</html>
