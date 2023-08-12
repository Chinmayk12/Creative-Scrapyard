<?php
include 'db.php';
$cat_id=$_REQUEST['cat_id'];
$q="delete from product_cat where cat_id=$cat_id";
$result=mysqli_query($conn,$q);

if(mysqli_affected_rows($conn)>0)
{
	echo "<script>alert('Category Deleted Succefully');window.location='category.php';</script>";
}
else
{
	echo "<script>alert('Category Not Deleted');window.history.back();</script>";
}
?>