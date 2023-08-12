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
                        <h3 style="padding-left:15px;" class="mb-0"><b>Comments</b></h3>
                    </div>
                   <!-- <a href="add-product.php"><button class="btn btn-info btn-lg "> Add Product
              </button></a>-->

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
                                        <th scope="col">Email Id</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Message</th>
                                  <!--      <th scope="col">Update</th>-->
                                        <!--<th scope="col">Delete</th>-->
                                        
                                    </tr>
                                </thead>

                                <?php
                                include 'db.php';
                                $q = "select * from contact";
                                $res = mysqli_query($conn, $q);
                                $sr = 1;
                                while ($data = mysqli_fetch_array($res)) {
                                    
                                ?>
                                    <tbody>
                                        <td><?php echo $sr++; ?></td>
                                        <td><?php echo $data['name']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['subject']; ?></td>
                                        <td><?php echo $data['message']; ?></td>
                                    </tbody>
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