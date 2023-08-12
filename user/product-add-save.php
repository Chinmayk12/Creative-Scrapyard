<?php
	
$user_id=$_POST['user_id'];
$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];
$detail=$_POST['detail'];
$type=$_POST['type'];


include 'db.php';

$tmp=$_FILES['image']['tmp_name'];
$image="add-img/".$_FILES['image']['name'];
move_uploaded_file($tmp,$image);

$q="insert into products value(NULL,'$name','$category','$price','$image','$detail','$type','$user_id')";
$res=mysqli_query($conn,$q);

if($conn)
{
	echo "<script>alert('Product Added Succefully.');window.location='products.php';</script>";
}	
else
{
	echo "<script>alert('Product Not Added. ');window.history.back();</script>";

}



?>