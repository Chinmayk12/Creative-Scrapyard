<?php
session_start();
$mobile_no=$_POST['mobile_no'];
$password=$_POST['password'];

include 'db.php';
$q="select * from admin where mobile_no='$mobile_no' and password='$password' ";
$res=mysqli_query($conn,$q);
$count=mysqli_num_rows($res);
$data=mysqli_fetch_array($res);

if($count > 0)
{
	//header("location:home.php?id=".$data['user_id']);
	$_SESSION['user']=$data;

	header("location:index.php");
}
else
{
	echo "<script>alert('Your username/ password is wrong, please try again');window.history.back();</script>";
}


?>