<?php
  session_start();
  $id=$_GET['id'];
  include '../connection.php';
  $sq = "UPDATE `dietitian` SET status=0 WHERE loginid = '$id'";
  mysqli_query($con, $sq);
  $sql = "UPDATE `login` SET status=0 WHERE loginid = '$id'";
  mysqli_query($con, $sql);
  echo "<script> alert('deititian removed'); window.location.href='viewdietion.php';</script>";
?>