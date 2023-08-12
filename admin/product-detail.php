<?php

include 'header.php';

?>
 <!-- Start Breadcrumbs -->
 <div class="breadcrumbs">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6 col-md-6 col-12">
                 <div class="breadcrumbs-content">
                     <h1 class="page-title">Product Detail</h1>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                 <ul class="breadcrumb-nav">
                     <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                     <li><a href="index.html">Shop</a></li>
                     <li>Product Detail</li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
 <!-- End Breadcrumbs -->


 <?php
 
 $product_id=$_REQUEST['id'];
 $q="select * from products where product_id=$product_id";
 $res=mysqli_query($conn,$q);
 $data=mysqli_fetch_array($res);


?>

 <!-- Start Item Details -->
 <section class="item-details section">
     <div class="container">
         <div class="top-area">
             <div class="row align-items-center">
                 <div class="col-lg-6 col-md-12 col-12">
                     <div class="product-images">
                         <main id="gallery">
                          
                         <div class="main-img">
                                 <img src="<?php echo $data['image'];?>" id="current" alt="#">
                             </div>
                           <!--  <div class="images">
                                 <img src="assets/images/product-details/01.jpg" class="img" alt="#">
                                 <img src="assets/images/product-details/02.jpg" class="img" alt="#">
                                 <img src="assets/images/product-details/03.jpg" class="img" alt="#">
                                 <img src="assets/images/product-details/04.jpg" class="img" alt="#">
                                 <img src="assets/images/product-details/05.jpg" class="img" alt="#">
                             </div>
-->
                         </main>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-12 col-12">
                     <div class="product-info">
                         <h2 style="text-transform:capitalize;" class="title"><?php echo $data['name'];?></h2>
 
                        <hr>
                        
                         <h6 style="color:green" class="price"><?php echo $data['price'];?>  <span  style="color:red">$945</span></h6>
                         <br>
                         
                         
                         <p class="info-text"><b style="color:black;">Description: </b><?php echo $data['description'];?></p>
                         <div class="row">
                        

                             <div class="col-lg-4 col-md-4 col-12">
                                 <div class="form-group quantity">
                                     <label for="color">Quantity</label>
                                     <input type="number" value="1" class="form-control">
                                  <!--   <select class="form-control">
                                         <option>1</option>
                                         <option>2</option>
                                         <option>3</option>
                                         <option>4</option>
                                         <option>5</option>
                                     </select>
-->
                                 </div>
                             </div>
                         </div>
                         <div class="bottom-content">
                             <div class="row align-items-end">
                                 <div class="col-lg-4 col-md-4 col-12">
                                     <div class="button cart-button">
                                         <button class="btn" style="width: 100%;">Add to Cart</button>
                                     </div>
                                 </div>
                              
                                 <div class="col-lg-4 col-md-4 col-12">
                                     <div class="wish-button">
                                         <button class="btn"><i class="lni lni-heart"></i> To Wishlist</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    
         </div>
     </div>
 </section>
 <!-- End Item Details -->

<?php

    include 'footer.php';

?>