<?php

$product_id = $_POST['product_id'];
$name = $_POST['name'];
$cat_id = $_POST['cat_id'];
$price = $_POST['price'];
$detail = $_POST['detail'];

include 'db.php';

$q="select * from products";
$res=mysqli_query($conn,$q);
$data=mysqli_fetch_array($res);
$old_photo=$data['image'];

$tmp = $_FILES['image']['tmp_name'];

if($tmp!=''){
$image = "add-img/" . $_FILES['image']['name'];
move_uploaded_file($tmp, $image);
    
$q = "update products set name='$name',cat_id='$cat_id',price='$price',image='$image',detail='$detail' where product_id=$product_id";
unlink($old_photo);
}
else{
    $q = "update products set name='$name',cat_id='$cat_id',price='$price',detail='$detail' where product_id=$product_id";
}
$res = mysqli_query($conn, $q);

if (mysqli_affected_rows($conn)>0) {
    echo "<script>alert('Product Edited Succefully.');window.location='all-products.php';</script>";//
} else {
    echo "<script>alert('Product Not Edited. ');</script>";//window.history.back();
}
