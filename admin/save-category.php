<?php
	
$name=$_POST['name'];
$type=$_POST['type'];

include 'db.php';

$q="insert into product_cat value(NULL,'$name','$type')";
$res=mysqli_query($conn,$q);

if($conn)
{
	echo "<script>alert('Product Category Added Succefully.');window.location='category.php';</script>";
}	
else
{
	echo "<script>alert('Product Category Not Added. ');window.history.back();</script>";

}



?>