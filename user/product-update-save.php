<?php

$user_id=$_POST['user_id'];
$product_id = $_POST['product_id'];
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$detail = $_POST['detail'];
$type=$_POST['type'];

include 'db.php';

$q="select * from products";
$res=mysqli_query($conn,$q);
$data=mysqli_fetch_array($res);
$old_photo=$data['image'];

$tmp = $_FILES['image']['tmp_name'];

if($tmp!=''){
$image = "add-img/" . $_FILES['image']['name'];
move_uploaded_file($tmp, $image);
    
$q = "update products set name='$name',category='$category',price='$price',type='$type',detail='$detail',image='$image',user_id='$user_id' where product_id=$product_id";
unlink($old_photo);
}
else{
    $q = "update products set name='$name',category='$category',price='$price',detail='$detail',user_id='$user_id'  where product_id=$product_id";
}
$res = mysqli_query($conn, $q);

if (mysqli_affected_rows($conn)>0) {
    echo "<script>alert('Product Edited Succefully.');window.location='products.php';</script>";//
} else {
    echo "<script>alert('Product Not Edited. ');window.history.back();</script>";//
}
