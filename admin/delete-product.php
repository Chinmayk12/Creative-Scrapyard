<?php
include 'db.php';
$product_id=$_REQUEST['product_id'];
$q="delete from products where product_id=$product_id";
$result=mysqli_query($conn,$q);

if(mysqli_affected_rows($conn)>0)
{
	echo "<script>alert('Product Deleted Succefully');window.location='all-products.php';</script>";
}
else
{
	echo "<script>alert('Product Not Deleted');window.history.back();</script>";
}
?>