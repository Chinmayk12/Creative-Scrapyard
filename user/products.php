<?php

session_start();
include 'header.php';
$data = $_SESSION['user'];
$user_id = $data['user_id'];

?>
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h3 style="padding-left:15px;" class="mb-0"><b>My Products</b></h3>
                    </div>
                    <a style="padding-right:18px;" href="product-add.php"><button  class="btn btn-info btn-lg "> +  Add Product
              </button></a>

                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 col-sm-12 mt-3"> 
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table layout-primary bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Detail</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                        
                                    </tr>
                                </thead>

                                <?php

                                
                                include 'db.php';
                                $q = "select * from products where user_id=".$user_id;
                                $res = mysqli_query($conn, $q);
                               
                                $sr = 1;
                                while ($data = mysqli_fetch_array($res)) {
                                    $q2="select * from product_cat where cat_id=".$data['category'];
                                    $res2=mysqli_query($conn,$q2);
                                    $cat_data=mysqli_fetch_array($res2);
                                ?>
                                    <tbody>
                                        <td><?php echo $sr++; ?></td>
                                        <td><?php echo $data['name']; ?></td>
                                        <td><?php echo $cat_data['cat_name']; ?></td>
                                        <td><?php echo $data['price']; ?></td>
                                        <td><img src="<?php echo $data['image'];  ?>" width="65px" height="65px"></td>
                                        <td><?php echo $data['detail']; ?></td>
                                        <td>
                                            <a href="product-update.php?product_id=<?php echo $data['product_id']; ?>">
                                                <button  type="button" class="btn btn-success btn-rounded ">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="product-delete.php?product_id=<?php echo $data['product_id']; ?>">
                                                <button type="button" class="btn btn-danger btn-rounded ">Delete</button>
                                            </a>
                                        </td>
                                    <?php
                                }
                                    ?>
                                    </tbody>
                            </table>
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