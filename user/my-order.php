<?php
session_start();
include 'header.php';

?>


<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h3 style="padding-left:15px;" class="mb-0"><b>My Orders</b></h3>
                    </div>
                  

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
                                        <th>Name Of Buyer</th>
                                        <th>Total Price</th>
                                        <th>Payment mode</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <?php

                                include 'db.php';
                                $data = $_SESSION['user'];
                                $user_id = $data['user_id'];
                                
                                $q = "select * from orders where user_id=".$user_id;
                                $res = mysqli_query($conn, $q);

                                while ($data = mysqli_fetch_array($res)) {

                                    ?>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td style="text-transform:capitalize;" class="align-middle">
                                                <?php echo $data['first_name']; ?>
                                                <?php echo $data['last_name']; ?>
                                            </td>
                                            <td class="align-middle">
                                                <?php echo $data['totalprice']; ?>
                                            </td>
                                            <td class="align-middle">
                                                <?php echo $data['payment']; ?>
                                            </td>
                                            <td>
                                                <button class=" btn-success ">New Order</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php

                                }
                                ?>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


            <?php

            include 'footer.php';

            ?>