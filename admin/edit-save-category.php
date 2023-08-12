<?php

$cat_id=$_POST['cat_id'];
$cat_name=$_POST['cat_name'];
$type=$_POST['type'];

include 'db.php';

$q="update product_cat set cat_name='$cat_name',type='$type' where cat_id=$cat_id ";
$res=mysqli_query($conn,$q);

if($conn)
{
	echo "<script>alert('Category Edited Succefully.');window.location='category.php';</script>";//
}	
else
{
	echo "<script>alert('Category Not Edited. ');window.history.back();</script>";//

}



?>