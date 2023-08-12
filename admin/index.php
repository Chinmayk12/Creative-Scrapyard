<?php

include 'header.php';

?>


<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                   
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 col-lg-12  mt-3">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <?php

                            $data = $_SESSION['admin'];

                            ?>
                            <h1 style="padding-left:250px; color:blue;"><b>Welcome
                                    <?php echo $data['name']; ?>
                                </b>
                            </h1>

                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>

        </div>
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->

<?php

include 'footer.php';

?>