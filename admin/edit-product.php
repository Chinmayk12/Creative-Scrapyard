<?php
include 'header.php';
?>

<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h3 class="mb-0"><b>Edit Product</b></h3>
                    </div>


                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">

                                    <?php

                                    include 'db.php';
                                    $product_id = $_REQUEST['product_id'];
                                    $q = "select * from products where product_id=$product_id";
                                    $res = mysqli_query($conn, $q);
                                    $product = mysqli_fetch_array($res);

                                    ?>
                                    <form action="edit-product-save.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <input type="hidden" name="product_id" class="form-control rounded" id="inputEmail4" value="<?php echo $product['product_id']; ?>">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Product Name</label>
                                                <input type="text" name="name" class="form-control rounded" id="inputEmail4" value="<?php echo $product['name']; ?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4">Product Catagories</label>
                                              
                                                <select name="cat_id" class="form-control rounded" id="inputEmail4" value="<?php echo $product['cat_id']; ?>">

                                                    <?php
                                                    include 'db.php';
                                                    $q = "select * from product_cat";
                                                    $res = mysqli_query($conn, $q);
                                                    while ($cat = mysqli_fetch_array($res)) {

                                                        echo "<option value='{$cat[0]}'>{$cat['cat_name']}</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4">Product Price</label>
                                                <input type="text" name="price" class="form-control" id="inputPassword4" value="<?php echo $product['price']; ?>">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Product Image</label>
                                                <input type="file" name="image" class="form-control rounded" id="inputEmail4">
                                                <label for="inputEmail4">Current Image</label><br>
                                                <img src="<?php echo $product['image']; ?>" width='70px' heigth='70px'>
                                            </div>
                                           
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4">Product Detail</label>
                                                <input type="text" name="detail" class="form-control" id="inputPassword4" value="<?php echo $product['detail']; ?>">
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Edit Product</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->

<?php

include 'footer.php';

?>