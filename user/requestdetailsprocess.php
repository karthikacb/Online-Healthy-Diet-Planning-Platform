<?php
include '../connection.php';
session_start();
$id = $_SESSION['id'];

$ss = mysqli_query($con,"SELECT * FROM `plandetails` where logid ='$id' AND status = 'Reported'");
$ss1 = mysqli_num_rows($ss);
if($ss1>0){
	echo "<script> alert('You have already Reported'); window.location.href='requestdietplan.php';</script>";
}else
{
//echo $id;
$date=date('d-m-Y');
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$targetweight=$_POST['targetweight'];
$sugar=$_POST['sugar'];
$bp=$_POST['bp'];
$cho=$_POST['cho'];
$habits=$_POST['habits'];
$dietrequired=$_POST['dietrequired'];
$disease=$_POST['disease'];
$dname=$_POST['dname'];
// $file2=$_FILES['file']['name'];
// move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$file2);
$file1=$_FILES['idproof']['name'];
move_uploaded_file($_FILES['idproof']['tmp_name'],"../uploads/".$file1);
$discription=$_POST['discription'];
$sql1="insert into plandetails(date,age,height,weight,targetweight,sugar,bp,cho,habits,dietrequired,disease,idproof,discription,dname,status,logid) values('$date','$age','$height','$weight','$targetweight','$sugar','$bp','$cho','$habits','$dietrequired','$disease','$file1','$discription','$dname','Reported',$id)";
$result = mysqli_query($con, $sql1);
echo "<script> alert('Successfully reported your request'); window.location.href='requestdietplan.php';</script>";
}
?>

