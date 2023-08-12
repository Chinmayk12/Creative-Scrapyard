<?php
	
$name=$_POST['name'];
$cat_id=$_POST['cat_id'];
$price=$_POST['price'];
$detail=$_POST['detail'];

include 'db.php';

$tmp=$_FILES['image']['tmp_name'];
$image="add-img/".$_FILES['image']['name'];
move_uploaded_file($tmp,$image);

$q="insert into products value(NULL,'$name','$cat_id','$price','$image','$detail')";
$res=mysqli_query($conn,$q);

if($conn)
{
	echo "<script>alert('Product Added Succefully.');window.location='all-products.php';</script>";
}	
else
{
	echo "<script>alert('Product Not Added. ');window.history.back();</script>";

}



?>